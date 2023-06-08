<x-masterDash title="Ajouter un traitement">    
    <form class="form-inputss" method="POST" action="{{ route('traitements.store') }}">
        @csrf
        <div class="prenom-box p-3">
            <h2> Ajouter un Traitement : </h2>
        <div class="mb-3">
            <label class="form-label">Numéro de dossier</label>
            <input type="number" name="NumDoss" class="form-control" placeholder="Numéro de dossier" value="{{ old('NumDoss') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Date de traitement</label>
            <input type="date" name="DateTraitement" class="form-control" value="{{ old('DateTraitement') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Acte</label><br>
            <select class="form-control select-input" name="Acte" id="Acte">
                <option value="Traitement endodontique">Traitement endodontique</option>
                <option value="Obturation composite">Obturation composite</option>
                <option value="Détartrage">Détartrage</option>
                <option value="Surfaçage">Surfaçage</option>
                <option value="Extraction">Extraction</option>
                <option value="Extraction chirurgicale">Extraction chirurgicale</option>
                <option value="Couronne ccm">Couronne ccm</option>
                <option value="Couronne zircone">Couronne zircone</option>
                <option value="Couronne ccc">Couronne ccc</option>
                <option value="Implant">Implant</option>
                <option value="Prothèse adjointe totale">Prothèse adjointe totale</option>
                <option value="Stellite">Stellite</option>
                <option value="Prothèse adjointe partielle">Prothèse adjointe partielle</option>
                <option value="Valplast">Valplast</option>
                <option value="Inlaycore">Inlaycore</option>
                <option value="Blanchiment">Blanchiment</option>
                <option value="Orthodontie">Orthodontie</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Dent</label>
            <input type="number" name="Dent" class="form-control" placeholder="Dent" value="{{ old('Dent') }}">
        </div>

        <div class="my-4">
            <button type="submit" class="btn  profile-button">Ajouter</button>
            <a href="{{ route('traitementpage') }}" class="btn btn-default">Retour</a>
        </div>
        </div>
    </form>
</x-masterDash>
