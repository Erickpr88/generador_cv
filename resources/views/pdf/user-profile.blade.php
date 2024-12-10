<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
    <style>
body {
    font-family: 'Open Sans', sans-serif;
    background-color: #f9f9f9;  /* Fondo claro */
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    height: 100vh;
    padding: 20px;
}

.container {
    width: 100%;
    max-width: 1200px;
    background-color: #ffffff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    text-align: left;
}

.profile-image {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.left-column {
    width: 25%;
    padding-right: 30px;
}

.right-column {
    width: 70%;
}

h1 {
    font-size: 36px;
    color: #2C3E50;
    margin-bottom: 10px;
}

h2 {
    font-size: 20px;
    color: #7F8C8D;
    margin-bottom: 20px;
}

h3 {
    font-size: 18px;
    color: #16A085;
    margin-bottom: 10px;
}

p, ul {
    font-size: 16px;
    color: #7F8C8D;
    line-height: 1.6;
    margin-bottom: 15px;
}

ul {
    list-style: none;
    padding-left: 20px;
}

ul li {
    margin-bottom: 10px;
}

.social-links {
    display: flex;
    margin-top: 20px;
    gap: 20px;
}

.social-links a {
    color: #16A085;
    text-decoration: none;
    font-size: 18px;
}

.social-links a:hover {
    color: #1ABC9C;
}

.skills-bar {
    width: 100%;
    height: 8px;
    background-color: #E5E5E5;
    border-radius: 4px;
    margin-top: 10px;
}

.skills-bar span {
    display: block;
    height: 100%;
    background-color: #16A085;  /* Color verde */
    border-radius: 4px;
}

.section-title {
    font-size: 20px;
    font-weight: bold;
    color: #34495E;
    margin-top: 30px;
    margin-bottom: 10px;
}

.contact-info {
    margin-top: 20px;
}

.contact-info p {
    margin: 5px 0;
}

/* Responsividad */
@media (max-width: 768px) {
    .container {
        flex-direction: column;
        padding: 20px;
    }

    .left-column {
        width: 100%;
        padding-right: 0;
        text-align: center;
        margin-bottom: 20px;
    }

    .right-column {
        width: 100%;
    }

    .profile-image {
        width: 120px;
        height: 120px;
    }

    h1 {
        font-size: 28px;
    }

    h2 {
        font-size: 18px;
    }

    h3 {
        font-size: 16px;
    }
}

    </style>
</head>

<body>

    <div class="container">
        <!-- Columna de la izquierda -->
        <div class="left-column">
            <img src="{{ public_path('assets/images/' . $information->image_path) }}" alt="Foto de perfil">
            <h2>{{ $information->first_name }} {{ $information->last_name }}</h2>
            <h3>{{ $information->profile_title }}</h3>
            <p>Email: {{ $user->email }}</p>

        </div>

        <!-- Columna de la derecha -->
        <div class="right-column">
            <div class="section">
                <h3>Perfil Profesional</h3>
                <p>{{ $information->about_me }}</p>
            </div>

            <div class="section">
                <h3>Educación</h3>
                @foreach($educations as $education)
                <p><strong>{{ $education->degree_title }}</strong> en {{ $education->institute }}
                    ({{ $education->edu_start_date }} - {{ $education->edu_end_date }})</p>
                <p>{{ $education->education_description }}</p>
                @endforeach
            </div>

            <div class="section">
                <h3>Experiencia</h3>
                @foreach($experiences as $experience)
                <p>{{ $experience->job_title }} en {{ $experience->organization }} ({{ $experience->job_start_date }} -
                    {{ $experience->job_end_date }})</p>
                <p>{{ $experience->job_description }}</p>
                @endforeach
            </div>

            <div class="section">
                <h3>Proyectos</h3>
                @foreach($projects as $project)
                <p><strong>{{ $project->project_title }}</strong> - {{ $project->project_description }} </p>
                @endforeach
            </div>

            <div class="section">
                <h3>Habilidades</h3>
                @foreach($skills as $skill)
                <div class="skills-bar">
                    <p>{{ $skill->skill_name }} - {{ $skill->skill_percentage }}%</p>
                </div>
                </p>
                @endforeach
            </div>

            <div class="section">
                <h3>Idiomas</h3>
                @foreach($languages as $language)
                <p>{{ $language->language }} - Nivel: {{ $language->language_level }}</p>
                @endforeach
            </div>

            <div class="section">
                <h3>Intereses</h3>
                @foreach($interests as $interest)
                <p>{{ $interest->interest }}</p>
                @endforeach
            </div>
        </div>
    </div>

</body>

</html>