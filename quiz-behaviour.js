//Gera Jahja:IN1010: Web Development Coursework 2: Database-Driven Web Application
//this funcion creates a quiz, the code is based from lab 4 (moodle)but has been contextualised and changed so that it suits my website. 
(function() {
    function buildQuiz() {
        // Variable that stores the HTML output
        const output = [];

        // For each question...
        myQuestions.forEach(
            (currentQuestion, questionNumber) => {

                // store the list of all possible answers
                const answers = [];

                // and for each available answer...
                for (letter in currentQuestion.answers) {

                    // ...add a radio button
                    answers.push(
                        `<label>
              <input type="radio" name="question${questionNumber}" value="${letter}">
              ${letter} :
              ${currentQuestion.answers[letter]}
            </label>`
                    );
                }

                // Add this question and its answers to the output
                output.push(
                    `<div class="slide">
            <div class="question"> ${currentQuestion.question} </div>
            <div class="answers"> ${answers.join("")} </div>
          </div>`
                );
            }
        );

        // Combine the output list into one string of HTML and place it on the page
        quizContainer.innerHTML = output.join('');
    }

    function showResults() {

        // Gather answer containers from the quiz
        const answerContainers = quizContainer.querySelectorAll('.answers');

        // Keeping track of user's answers
        let numCorrect = 0;

        // For each question...
        myQuestions.forEach((currentQuestion, questionNumber) => {

            // find selected answer
            const answerContainer = answerContainers[questionNumber];
            const selector = `input[name=question${questionNumber}]:checked`;
            const userAnswer = (answerContainer.querySelector(selector) || {}).value;

            // Ff answer is correct
            if (userAnswer === currentQuestion.correctAnswer) {
                // increment the number of correct answers by one
                numCorrect++;

                // and colour the answers green
                answerContainers[questionNumber].style.color = '#16A085';
            }
            // If answer is wrong or left blank
            else {
                // colour the answers red
                answerContainers[questionNumber].style.color = '#C70039';
            }
        });

        // Show the number of correct answers out of the total number
        resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`;
    }

    //Create slides
    function showSlide(n) {
        slides[currentSlide].classList.remove('active-slide');
        slides[n].classList.add('active-slide');
        currentSlide = n;
        if (currentSlide === 0) {
            previousButton.style.display = 'none';
        } else {
            previousButton.style.display = 'inline-block';
        }
        if (currentSlide === slides.length - 1) {
            nextButton.style.display = 'none';
            submitButton.style.display = 'inline-block';
        } else {
            nextButton.style.display = 'inline-block';
            submitButton.style.display = 'none';
        }
    }

    function showNextSlide() {
        showSlide(currentSlide + 1);
    }

    function showPreviousSlide() {
        showSlide(currentSlide - 1);
    }

    // Variables for the quiz container, results container, and the submit button 
    const quizContainer = document.getElementById('quiz');
    const resultsContainer = document.getElementById('results');
    const submitButton = document.getElementById('submit');
    //An array of questions and answers
	//Answers are from the website : https://www.kencorner.com/computer-motherboard-components/
    const myQuestions = [{
            question: "What piece of the motherboard is labled 1",
            answers: {
                a: "USB",
                b: "PS/2 ",
                c: "PS/1",
                d: "USB and PS/2",
                e: "USB and PS/1"
            },
            correctAnswer: "d"
        },
        {
            question: "What piece of the motherboard is labled 2",
            answers: {
                a: "Universal Serial Bus",
                b: "Key Board",
                c: "Mouse",
                d: "CPU",
                e: "RAM slots"
            },
            correctAnswer: "a"
        },
        {
            question: "What piece of the motherboard is labled 3",
            answers: {
                a: "IDE",
                b: "Floppy Disk",
                c: "RAM chip",
                d: "CPU Chip",
                e: "Parallel port"
            },
            correctAnswer: "e"
        },
		{
            question: "What piece of the motherboard is labled 4",
            answers: {
                a: "PCI slot",
                b: "IDE",
                c: "RAM chip",
                d: "CPU Chip",
                e: "PS/2"
            },
            correctAnswer: "d"
        },
		{
            question: "What piece of the motherboard is labled 5",
            answers: {
                a: "ROM chip",
                b: "IDE chip",
                c: "RAM chip",
                d: "ROM slot",
                e: "RAM slot"
            },
            correctAnswer: "e"
        },
		{
            question: "What piece of the motherboard is labled 6",
            answers: {
                a: "ROM slot",
                b: "Floppy controller",
                c: "USB port",
                d: "Floppy Disk",
                e: "RAM slot"
            },
            correctAnswer: "b"
        },
		{
            question: "What piece of the motherboard is labled 7",
            answers: {
                a: "IDE controller",
                b: "PS/2 ",
                c: "AGP slot",
                d: "CMOS battery",
                e: "PCI slot"
            },
            correctAnswer: "a"
        },
        {
            question: "What piece of the motherboard is labled 8",
            answers: {
                a: "CPU",
                b: "PCI slot",
                c: "CMOS battery",
                d: "CPU slot",
                e: "RAM slots"
            },
            correctAnswer: "b"
        },
        {
            question: "What piece of the motherboard is labled 9",
            answers: {
                a: "IDE chip",
                b: "Power supply",
                c: "PCI slot",
                d: "ISA slot",
                e: "Parallel chip"
            },
            correctAnswer: "c"
        },
		{
            question: "What piece of the motherboard is labled 10",
            answers: {
                a: "PCI slot",
                b: "IDE battery",
                c: "CMOS battery",
                d: "CPU Chip",
                e: "PS/2"
            },
            correctAnswer: "c"
        },
		{
            question: "What piece of the motherboard is labled 11",
            answers: {
                a: "ROM chip",
                b: "IDE chip",
                c: "RAM chip",
                d: "ROM slot",
                e: "AGP slot"
            },
            correctAnswer: "e"
        },
		{
            question: "What piece of the motherboard is labled 12",
            answers: {
                a: "ROM slot",
                b: "CPU slot ",
                c: "USB port",
                d: "Floppy Disk",
                e: "RAM port"
            },
            correctAnswer: "b"
        },
		{
            question: "What piece of the motherboard is labled 13",
            answers: {
                a: "IDE",
                b: "Power supply plug in",
                c: "RAM chip",
                d: "CPU Chip",
                e: "Parallel port"
            },
            correctAnswer: "b"
        }
    ];

    // Create the quiz
    buildQuiz();

    // Add pagination
    const previousButton = document.getElementById("previous");
    const nextButton = document.getElementById("next");
    const slides = document.querySelectorAll(".slide");
    let currentSlide = 0;

    // Display the first slide
    showSlide(currentSlide);

    // Event listeners
    submitButton.addEventListener('click', showResults);
    previousButton.addEventListener("click", showPreviousSlide);
    nextButton.addEventListener("click", showNextSlide);
})();