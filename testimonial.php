<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Testimonial Slider</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="/time-management.ico" type="image/x-icon" />
    <meta name="description" content="Learn how to create a dynamic testimonial slider with HTML, CSS, and JavaScript. Showcase customer reviews with engaging animations.">
  </head>
  <body>

    <style>
.container_testimonial {
  border: 2px solid #00a1e4;
  background-color: #ede3e4;
  height: 50vmin;
  width: 50%;
  border-radius: 20px;
  padding: 15px;
  position: relative;
  display: flex;
  justify-content: space-around;
  align-items: flex-end;
  flex-wrap: wrap;
}

.bar {
  content: "1";
  height: 5px;
  width: 0%;
  position: absolute;
  background: linear-gradient(90deg, red, orange);
  bottom: 0;
  border-radius: 20px;
  left: 10px;
  animation: width 5s linear infinite both;
  z-index: 2;
}

@keyframes width {
  from {
    width: 0;
  }
  to {
    width: 88%;
  }
}

.circle {
  height: 12vmin;
  width: 12vmin;
  border-radius: 50%;
  background-image: url(./Untitled\ design.png);
  background-position: left;
  background-size: 90%;
  background-color: #CDE8E5;
  background-repeat: no-repeat;
  position: absolute;
  z-index: 10;
}

.first {
  top: -40px;
  left: 15px;
}

.second {
  bottom: -35px;
  right: 15px;
  transform: rotate(180deg);
}

.text {
  text-align: center;
  margin-top: 30px;
}

.details > p {
  text-align: center;
}

.profile {
  border: 5px double #00a1e4;
  border-radius: 50%;
  position: absolute;
  top: -50px;
}

.name {
  font-weight: 900;
  font-size: calc(10px + 1vmin);
}

.city {
  font-size: calc(10px + 1vmin);
}

@keyframes translate {
  from {
    transform: translateY(10px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}
.parent_container{
  display: flex;
  justify-content: center;
  align-items: center;
}
    </style>

    <div class="parent_container">
      <section class="container_testimonial">
        <div class="circle first"></div>
        <div class="circle second"></div>
        <div class="bar"></div>
        <img alt="profile" height="90" width="90" class="profile" />
        <div class="text"></div>
        <div class="details"></div>
      </section>
    </div>
    <script>

      const customers = [
  {
    name: "Arjun Mehta",
    image: "https://img.freepik.com/free-photo/portrait-man-cartoon-style_23-2151134160.jpg?size=626&ext=jpg&uid=R146697784&ga=GA1.1.992685107.1718858231&semt=ais_user",
    location: "Mumbai, Maharashtra",
    testimonial: "The biryani here is out of this world! The spices and flavors are just perfect. Highly recommended!",
  },
  {
    name: "Priya Sharma",
    image: "https://img.freepik.com/free-vector/hand-drawn-side-profile-cartoon-illustration_23-2150503812.jpg?size=626&ext=jpg&uid=R146697784&ga=GA1.1.992685107.1718858231&semt=ais_user",
    location: "Delhi, Delhi",
    testimonial: "I love the vegetarian options at this restaurant. The paneer tikka is a must-try. Wonderful experience overall!",
  },
  {
    name: "Ravi Patel",
    image: "https://img.freepik.com/free-photo/portrait-man-cartoon-style_23-2151134012.jpg?size=626&ext=jpg&uid=R146697784&ga=GA1.1.992685107.1718858231&semt=ais_user",
    location: "Ahmedabad, Gujarat",
    testimonial: "A fantastic place for authentic Indian food. The service is excellent, and the atmosphere is very welcoming.",
  },
  {
    name: "Anjali Verma",
    image: "https://img.freepik.com/free-photo/androgynous-avatar-non-binary-queer-person_23-2151100164.jpg?t=st=1719046094~exp=1719049694~hmac=29670c440f200e9e11612c82874614ebf1a643bbb4f43ef1f8f83f4c93714454&w=740",
    location: "Bengaluru, Karnataka",
    testimonial: "The dessert selection here is amazing. I can't get enough of the gulab jamun and the kulfi. A great place for a sweet treat!",
  },
  {
    name: "Vikram Singh",
    image: "https://img.freepik.com/free-vector/hand-drawn-side-profile-cartoon-illustration_23-2150517168.jpg?size=626&ext=jpg&uid=R146697784&ga=GA1.1.992685107.1718858231&semt=ais_user",
    location: "Jaipur, Rajasthan",
    testimonial: "The tandoori chicken is cooked to perfection. The flavors are rich and the meat is so tender. I'll definitely be coming back.",
  },
  {
    name: "Kavita Rao",
    image: "https://img.freepik.com/free-vector/hand-drawn-side-profile-cartoon-illustration_23-2150503812.jpg?size=626&ext=jpg&uid=R146697784&ga=GA1.1.992685107.1718858231&semt=ais_user",
    location: "Hyderabad, Telangana",
    testimonial: "This restaurant has the best dosa I've ever had. Crispy, delicious, and served with perfect chutneys. Highly recommended!",
  },
  {
    name: "Amit Gupta",
    image: "https://img.freepik.com/free-photo/portrait-man-cartoon-style_23-2151134160.jpg?size=626&ext=jpg&uid=R146697784&ga=GA1.1.992685107.1718858231&semt=ais_user",
    location: "Chandigarh, Punjab",
    testimonial: "A wonderful place for family dinners. The menu is extensive and there's something for everyone. Great service too.",
  },
  {
    name: "Sanjay Kumar",
    image: "https://img.freepik.com/free-photo/portrait-man-cartoon-style_23-2151134012.jpg?size=626&ext=jpg&uid=R146697784&ga=GA1.1.992685107.1718858231&semt=ais_user",
    location: "Lucknow, Uttar Pradesh",
    testimonial: "The kebabs here are the best I've ever had. Juicy, flavorful, and perfectly cooked. A must-visit for kebab lovers.",
  },
  {
    name: "Rekha Desai",
    image: "https://img.freepik.com/free-photo/androgynous-avatar-non-binary-queer-person_23-2151100164.jpg?t=st=1719046094~exp=1719049694~hmac=29670c440f200e9e11612c82874614ebf1a643bbb4f43ef1f8f83f4c93714454&w=740",
    location: "Pune, Maharashtra",
    testimonial: "Great ambiance and delicious food. The butter chicken is a must-try. Will be back soon!",
  },
  {
    name: "Manish Agarwal",
    image: "https://img.freepik.com/free-vector/hand-drawn-side-profile-cartoon-illustration_23-2150517168.jpg?size=626&ext=jpg&uid=R146697784&ga=GA1.1.992685107.1718858231&semt=ais_user",
    location: "Kolkata, West Bengal",
    testimonial: "The fish curry here is to die for. Fresh, flavorful, and cooked to perfection. Highly recommended for seafood lovers.",
  },
];

let count = 0;
setInterval(() => {
  if (count === customers.length - 1) {
    count = 0;
  } else {
    count++;
  }
  change();
}, 5000);

let profile = document.querySelector(".profile");
let testimonial = document.querySelector(".text");
let details = document.querySelector(".details");

function change() {
  profile.style.animation = "none"; // Reset the animation
  testimonial.style.animation = "none"; // Reset the animation
  details.style.animation = "none"; // Reset the animation
  profile.offsetHeight; // Trigger reflow

  profile.setAttribute("src", customers[count].image);
  testimonial.innerText = customers[count].testimonial;
  details.innerHTML = `<p class="name">${customers[count].name}</p>
                         <p class="city">${customers[count].location}</p>`;

  profile.style.animation = "translate 0.75s 1 ease-in forwards";
  testimonial.style.animation = "translate 0.75s 1 ease-in forwards";
  details.style.animation = "translate 0.75s 1 ease-in forwards";
}

change();
      
    </script>
  </body>
</html>

