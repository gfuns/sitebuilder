function validateForm(e) {
    'use strict';
    e.preventDefault();
    const forms = document.getElementById('create-page');
    if (!forms.checkValidity()) {
      e.preventDefault();
      e.stopPropagation();
      forms.classList.add('was-validated');
      return false;
    }
  
    return submitForm();
  }
  
  function submitForm() {
    console.log("Get Form Content");
    const nameField = document.getElementById('name');
    const nameFieldValue = nameField.value;
    console.log("name -> ", nameFieldValue);

   
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $('#submit').html('Please Wait...');
      $("#submit"). attr("disabled", true);

      $.ajax({
        url: "{{url('create_page')}}",
        type: "POST",
        data: $('#create-page').serialize(),
        success: function( response ) {
        $('#submit').html('Submit');
        $("#submit"). attr("disabled", false);
          alert('Ajax form has been submitted successfully');
          clearForm();
          return true; 
      }
      });
      

      

    // axios
    //   .post("{{route('create_page')}}", { name: nameFieldValue })
    //   .then((response) => {
    //     alert(`Page ${nameFieldValue} created successfully`);
    //     window.location.href = '/';
    //   })
    //   .catch((err) => {
    //     alert('Failed: Page not created');
    //   });
    // clearForm();
    // return true;
  }
  
  function clearForm() {
    /**
     * Get name field and reset it's value
     */
    const nameField = document.getElementById('name');
    nameField.value = '';
    /**
     * Remove was-validated class from Form
     */
    const forms = document.getElementById('create-page');
    forms.classList.remove('was-validated');
  }