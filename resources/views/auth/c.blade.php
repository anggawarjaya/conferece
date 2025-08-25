<script>
  const categoryOptions = {
    domestic: [
      { value: "presenter", text: "Presenter (IDR 3,000,050)" },
      { value: "student_presenter", text: "Student Presenter (IDR 2,700,050)" },
      { value: "extra_paper", text: "Extra One Paper (IDR 1,800,050)" },
      { value: "non_presenter", text: "Non Presenter (IDR 300,050)" },
    ],
    overseas: [
      { value: "presenter", text: "Presenter (USD 260/300)" },
      { value: "student_presenter", text: "Student Presenter (USD 220/250)" },
      { value: "extra_paper", text: "Extra One Paper (USD 150)" },
      { value: "participant", text: "Student Participant (USD 100/150)" },
    ],
  };

  function populateCategory(originValue, selectedValue = null) {
    const categorySelect = document.getElementById("category");
    categorySelect.innerHTML = '<option value="">-- Select Category --</option>';

    if (originValue && categoryOptions[originValue]) {
      categoryOptions[originValue].forEach(option => {
        const opt = document.createElement("option");
        opt.value = option.value;
        opt.textContent = option.text;
        if (selectedValue && selectedValue === option.value) {
          opt.selected = true;
        }
        categorySelect.appendChild(opt);
      });
    }
  }

  document.getElementById("origin").addEventListener("change", function () {
    populateCategory(this.value);
  });

  // Populate category on page load if old value exists
  window.addEventListener('DOMContentLoaded', () => {
    const origin = document.getElementById("origin").value;
    const oldCategory = document.getElementById("category").dataset.old;
    if (origin && oldCategory) {
      populateCategory(origin, oldCategory);
    }
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const today = new Date();
    const earlyBirdDeadline = new Date('2025-09-30');
    const normalRateStart = new Date('2025-10-01');
    const normalRateEnd = new Date('2025-11-19');

    let period = '';

    if (today <= earlyBirdDeadline) {
      period = 'Early Bird';
    } else if (today >= normalRateStart && today <= normalRateEnd) {
      period = 'Normal Rate';
    } else {
      period = 'Closed';
    }

    document.getElementById('period').textContent = period;
  });
  window.addEventListener('DOMContentLoaded', () => {
    const origin = document.getElementById("origin").value;
    const oldCategory = document.getElementById("category").dataset.old;
    if (origin && oldCategory) {
      populateCategory(origin, oldCategory);
    }
  });
</script>


// function validateForm() {
//   const requiredFields = ['name', 'email', 'role', 'gender', 'institution', 'phone', 'origin', 'category'];
//   const fileChecks = {
//     payment_proof: true,
//     student_card: document.getElementById('student_card').closest('.mt-8').classList.contains('hidden') === false,
//     abstract: document.getElementById('abstract').closest('.mt-8').classList.contains('hidden') === false,
//   };

//   const allFilled = requiredFields.every(id => {
//     const el = document.getElementById(id);
//     return el && el.value.trim() !== '';
//   });

//   const allFilesOk = Object.entries(fileChecks).every(([id, required]) => {
//     const input = document.getElementById(id);
//     return !required || (input && input.files.length > 0);
//   });

//   document.getElementById('submitBtn').disabled = !(allFilled && allFilesOk);
// }