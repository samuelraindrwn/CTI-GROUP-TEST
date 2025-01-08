<section id="free-trial" class="form-container">
    <div class="desc">
        <h1>About Sangfor
            Cyber Command</h1>
        <p><br>Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a
            comprehensive
            security management platform designed to protect businesses from cyber threats.
            <br><br>
            It provides a range of security solutions such as threat detection, incident response, and compliance
            management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze
            security events, and respond to incidents quickly and efficiently.
            <br><br>
            The platform uses advanced machine learning algorithms and big data analytics to identify and prevent
            cyber-attacks before they cause damage. It also offers a user-friendly dashboard that enables businesses
            to track their security posture in real-time and make informed decisions based on the insights provided.
            <br><br>
            Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their
            cybersecurity defenses and safeguard their assets from modern-day threats.
        </p>
    </div>
    <form class="form-wrapper" action="/confirmation">
        @csrf
        <div class="form-title">
            <h3>Dapatkan Free Trial selama 1 bulan,</h3>
            <span>analisa keamanan network anda dan lihat hasilnya!</span>
        </div>
        <div class="input-wrapper-col">
            <div class="input-wrapper">
                <label for="firstName">
                    First Name
                    <span style="color: red;">*</span>
                </label>
                <input class="input" type="text" id="firstName" name="firstName" placeholder="First Name" required>
            </div>
            <div class="input-wrapper">
                <label for="lastName">
                    Last Name
                    <span style="color: red;">*</span>
                </label>
                <input class="input" type="text" id="lastName" name="lastName" placeholder="Last Name" required>
            </div>
        </div>
        <div class="input-wrapper">
            <label for="corporateEmail">
                Corporate Email
                <span style="color: red;">*</span>
            </label>
            <input class="input" type="email" id="corporateEmail" name="corporateEmail" placeholder="Corporate Email"
                required>
        </div>
        <div class="input-wrapper">
            <label for="jobTitle">
                Job Title
                <span style="color: red;">*</span>
            </label>
            <input class="input" type="text" id="jobTitle" name="jobTitle" placeholder="Job Title" required>
        </div>
        <div class="input-wrapper">
            <label for="companyName">
                Company Name
                <span style="color: red;">*</span>
            </label>
            <input class="input" type="text" id="companyName" name="companyName" placeholder="Company Name" required>
        </div>
        <div class="input-wrapper">
            <label for="industry">
                Industry
                <span style="color: red;">*</span>
            </label>
            <select class="input" name="industry" id="industry" required>
                <option value="">Select Industry</option>
                <option value="education">Education</option>
                <option value="tech">Technology</option>
                <option value="medical">Medical</option>
            </select>
            <i id="chevron" class="fa-solid fa-chevron-down"></i>
        </div>
        <div class="input-wrapper">
            <label for="phone">
                Phone Number
                <span style="color: red;">*</span>
            </label>
            <input class="input" type="tel" id="phone" name="phone" placeholder="Phone Number" required>
        </div>
        <div class="check-wrapper">
            <input type="checkbox" id="emailDeals" name="emailDeals">
            <label for="emailDeals">
                click this box to agree to be contacted by our team and
                get great deals on Sangfor for Helios!
            </label>
        </div>
        <a title="Send" class="btn-style">
            <button type="submit">
                Send
            </button>
        </a>
    </form>
</section>