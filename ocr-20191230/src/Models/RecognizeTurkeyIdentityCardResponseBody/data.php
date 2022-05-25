<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\auxiliaryTools;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\birthDate;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\birthPlace;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\bloodType;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\cardBox;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\cilt;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\documentNumber;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\driveClass;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\dueDate;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\duzenleyen;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\entryNumber;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\expiryDate;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\fatherName;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\foreignersId;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\gender;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\givenName;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\idNumber;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\issueBy;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\issueCounty;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\issueDate;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\issuePlace;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\kutuk;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\licenseNumber;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\maritalStatus;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\motherName;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\name;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\nationality;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\neighborhoodVillage;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\pageNumber;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\passportNumber;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\portraitBox;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\province;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\provinceOfResidence;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\reasonOfIssue;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\registerNumber;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\religion;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\sayfa;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\seri;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\sex;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\surname;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\typeOfResidencePermit;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\validUntil;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\village;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTurkeyIdentityCardResponseBody\data\volumeNumber;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var auxiliaryTools
     */
    public $auxiliaryTools;

    /**
     * @var birthDate
     */
    public $birthDate;

    /**
     * @var birthPlace
     */
    public $birthPlace;

    /**
     * @var bloodType
     */
    public $bloodType;

    /**
     * @var cardBox
     */
    public $cardBox;

    /**
     * @var cilt
     */
    public $cilt;

    /**
     * @var documentNumber
     */
    public $documentNumber;

    /**
     * @var driveClass
     */
    public $driveClass;

    /**
     * @var dueDate
     */
    public $dueDate;

    /**
     * @var duzenleyen
     */
    public $duzenleyen;

    /**
     * @var entryNumber
     */
    public $entryNumber;

    /**
     * @var expiryDate
     */
    public $expiryDate;

    /**
     * @var fatherName
     */
    public $fatherName;

    /**
     * @var foreignersId
     */
    public $foreignersId;

    /**
     * @var gender
     */
    public $gender;

    /**
     * @var givenName
     */
    public $givenName;

    /**
     * @var idNumber
     */
    public $idNumber;

    /**
     * @var issueBy
     */
    public $issueBy;

    /**
     * @var issueCounty
     */
    public $issueCounty;

    /**
     * @var issueDate
     */
    public $issueDate;

    /**
     * @var issuePlace
     */
    public $issuePlace;

    /**
     * @var kutuk
     */
    public $kutuk;

    /**
     * @var licenseNumber
     */
    public $licenseNumber;

    /**
     * @var maritalStatus
     */
    public $maritalStatus;

    /**
     * @var motherName
     */
    public $motherName;

    /**
     * @var name
     */
    public $name;

    /**
     * @var nationality
     */
    public $nationality;

    /**
     * @var neighborhoodVillage
     */
    public $neighborhoodVillage;

    /**
     * @var pageNumber
     */
    public $pageNumber;

    /**
     * @var passportNumber
     */
    public $passportNumber;

    /**
     * @var portraitBox
     */
    public $portraitBox;

    /**
     * @var province
     */
    public $province;

    /**
     * @var provinceOfResidence
     */
    public $provinceOfResidence;

    /**
     * @var reasonOfIssue
     */
    public $reasonOfIssue;

    /**
     * @var registerNumber
     */
    public $registerNumber;

    /**
     * @var religion
     */
    public $religion;

    /**
     * @var sayfa
     */
    public $sayfa;

    /**
     * @var seri
     */
    public $seri;

    /**
     * @var sex
     */
    public $sex;

    /**
     * @var surname
     */
    public $surname;

    /**
     * @var typeOfResidencePermit
     */
    public $typeOfResidencePermit;

    /**
     * @var validUntil
     */
    public $validUntil;

    /**
     * @var village
     */
    public $village;

    /**
     * @var volumeNumber
     */
    public $volumeNumber;
    protected $_name = [
        'auxiliaryTools'        => 'AuxiliaryTools',
        'birthDate'             => 'BirthDate',
        'birthPlace'            => 'BirthPlace',
        'bloodType'             => 'BloodType',
        'cardBox'               => 'CardBox',
        'cilt'                  => 'Cilt',
        'documentNumber'        => 'DocumentNumber',
        'driveClass'            => 'DriveClass',
        'dueDate'               => 'DueDate',
        'duzenleyen'            => 'Duzenleyen',
        'entryNumber'           => 'EntryNumber',
        'expiryDate'            => 'ExpiryDate',
        'fatherName'            => 'FatherName',
        'foreignersId'          => 'ForeignersId',
        'gender'                => 'Gender',
        'givenName'             => 'GivenName',
        'idNumber'              => 'IdNumber',
        'issueBy'               => 'IssueBy',
        'issueCounty'           => 'IssueCounty',
        'issueDate'             => 'IssueDate',
        'issuePlace'            => 'IssuePlace',
        'kutuk'                 => 'Kutuk',
        'licenseNumber'         => 'LicenseNumber',
        'maritalStatus'         => 'MaritalStatus',
        'motherName'            => 'MotherName',
        'name'                  => 'Name',
        'nationality'           => 'Nationality',
        'neighborhoodVillage'   => 'NeighborhoodVillage',
        'pageNumber'            => 'PageNumber',
        'passportNumber'        => 'PassportNumber',
        'portraitBox'           => 'PortraitBox',
        'province'              => 'Province',
        'provinceOfResidence'   => 'ProvinceOfResidence',
        'reasonOfIssue'         => 'ReasonOfIssue',
        'registerNumber'        => 'RegisterNumber',
        'religion'              => 'Religion',
        'sayfa'                 => 'Sayfa',
        'seri'                  => 'Seri',
        'sex'                   => 'Sex',
        'surname'               => 'Surname',
        'typeOfResidencePermit' => 'TypeOfResidencePermit',
        'validUntil'            => 'ValidUntil',
        'village'               => 'Village',
        'volumeNumber'          => 'VolumeNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auxiliaryTools) {
            $res['AuxiliaryTools'] = null !== $this->auxiliaryTools ? $this->auxiliaryTools->toMap() : null;
        }
        if (null !== $this->birthDate) {
            $res['BirthDate'] = null !== $this->birthDate ? $this->birthDate->toMap() : null;
        }
        if (null !== $this->birthPlace) {
            $res['BirthPlace'] = null !== $this->birthPlace ? $this->birthPlace->toMap() : null;
        }
        if (null !== $this->bloodType) {
            $res['BloodType'] = null !== $this->bloodType ? $this->bloodType->toMap() : null;
        }
        if (null !== $this->cardBox) {
            $res['CardBox'] = null !== $this->cardBox ? $this->cardBox->toMap() : null;
        }
        if (null !== $this->cilt) {
            $res['Cilt'] = null !== $this->cilt ? $this->cilt->toMap() : null;
        }
        if (null !== $this->documentNumber) {
            $res['DocumentNumber'] = null !== $this->documentNumber ? $this->documentNumber->toMap() : null;
        }
        if (null !== $this->driveClass) {
            $res['DriveClass'] = null !== $this->driveClass ? $this->driveClass->toMap() : null;
        }
        if (null !== $this->dueDate) {
            $res['DueDate'] = null !== $this->dueDate ? $this->dueDate->toMap() : null;
        }
        if (null !== $this->duzenleyen) {
            $res['Duzenleyen'] = null !== $this->duzenleyen ? $this->duzenleyen->toMap() : null;
        }
        if (null !== $this->entryNumber) {
            $res['EntryNumber'] = null !== $this->entryNumber ? $this->entryNumber->toMap() : null;
        }
        if (null !== $this->expiryDate) {
            $res['ExpiryDate'] = null !== $this->expiryDate ? $this->expiryDate->toMap() : null;
        }
        if (null !== $this->fatherName) {
            $res['FatherName'] = null !== $this->fatherName ? $this->fatherName->toMap() : null;
        }
        if (null !== $this->foreignersId) {
            $res['ForeignersId'] = null !== $this->foreignersId ? $this->foreignersId->toMap() : null;
        }
        if (null !== $this->gender) {
            $res['Gender'] = null !== $this->gender ? $this->gender->toMap() : null;
        }
        if (null !== $this->givenName) {
            $res['GivenName'] = null !== $this->givenName ? $this->givenName->toMap() : null;
        }
        if (null !== $this->idNumber) {
            $res['IdNumber'] = null !== $this->idNumber ? $this->idNumber->toMap() : null;
        }
        if (null !== $this->issueBy) {
            $res['IssueBy'] = null !== $this->issueBy ? $this->issueBy->toMap() : null;
        }
        if (null !== $this->issueCounty) {
            $res['IssueCounty'] = null !== $this->issueCounty ? $this->issueCounty->toMap() : null;
        }
        if (null !== $this->issueDate) {
            $res['IssueDate'] = null !== $this->issueDate ? $this->issueDate->toMap() : null;
        }
        if (null !== $this->issuePlace) {
            $res['IssuePlace'] = null !== $this->issuePlace ? $this->issuePlace->toMap() : null;
        }
        if (null !== $this->kutuk) {
            $res['Kutuk'] = null !== $this->kutuk ? $this->kutuk->toMap() : null;
        }
        if (null !== $this->licenseNumber) {
            $res['LicenseNumber'] = null !== $this->licenseNumber ? $this->licenseNumber->toMap() : null;
        }
        if (null !== $this->maritalStatus) {
            $res['MaritalStatus'] = null !== $this->maritalStatus ? $this->maritalStatus->toMap() : null;
        }
        if (null !== $this->motherName) {
            $res['MotherName'] = null !== $this->motherName ? $this->motherName->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = null !== $this->name ? $this->name->toMap() : null;
        }
        if (null !== $this->nationality) {
            $res['Nationality'] = null !== $this->nationality ? $this->nationality->toMap() : null;
        }
        if (null !== $this->neighborhoodVillage) {
            $res['NeighborhoodVillage'] = null !== $this->neighborhoodVillage ? $this->neighborhoodVillage->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = null !== $this->pageNumber ? $this->pageNumber->toMap() : null;
        }
        if (null !== $this->passportNumber) {
            $res['PassportNumber'] = null !== $this->passportNumber ? $this->passportNumber->toMap() : null;
        }
        if (null !== $this->portraitBox) {
            $res['PortraitBox'] = null !== $this->portraitBox ? $this->portraitBox->toMap() : null;
        }
        if (null !== $this->province) {
            $res['Province'] = null !== $this->province ? $this->province->toMap() : null;
        }
        if (null !== $this->provinceOfResidence) {
            $res['ProvinceOfResidence'] = null !== $this->provinceOfResidence ? $this->provinceOfResidence->toMap() : null;
        }
        if (null !== $this->reasonOfIssue) {
            $res['ReasonOfIssue'] = null !== $this->reasonOfIssue ? $this->reasonOfIssue->toMap() : null;
        }
        if (null !== $this->registerNumber) {
            $res['RegisterNumber'] = null !== $this->registerNumber ? $this->registerNumber->toMap() : null;
        }
        if (null !== $this->religion) {
            $res['Religion'] = null !== $this->religion ? $this->religion->toMap() : null;
        }
        if (null !== $this->sayfa) {
            $res['Sayfa'] = null !== $this->sayfa ? $this->sayfa->toMap() : null;
        }
        if (null !== $this->seri) {
            $res['Seri'] = null !== $this->seri ? $this->seri->toMap() : null;
        }
        if (null !== $this->sex) {
            $res['Sex'] = null !== $this->sex ? $this->sex->toMap() : null;
        }
        if (null !== $this->surname) {
            $res['Surname'] = null !== $this->surname ? $this->surname->toMap() : null;
        }
        if (null !== $this->typeOfResidencePermit) {
            $res['TypeOfResidencePermit'] = null !== $this->typeOfResidencePermit ? $this->typeOfResidencePermit->toMap() : null;
        }
        if (null !== $this->validUntil) {
            $res['ValidUntil'] = null !== $this->validUntil ? $this->validUntil->toMap() : null;
        }
        if (null !== $this->village) {
            $res['Village'] = null !== $this->village ? $this->village->toMap() : null;
        }
        if (null !== $this->volumeNumber) {
            $res['VolumeNumber'] = null !== $this->volumeNumber ? $this->volumeNumber->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuxiliaryTools'])) {
            $model->auxiliaryTools = auxiliaryTools::fromMap($map['AuxiliaryTools']);
        }
        if (isset($map['BirthDate'])) {
            $model->birthDate = birthDate::fromMap($map['BirthDate']);
        }
        if (isset($map['BirthPlace'])) {
            $model->birthPlace = birthPlace::fromMap($map['BirthPlace']);
        }
        if (isset($map['BloodType'])) {
            $model->bloodType = bloodType::fromMap($map['BloodType']);
        }
        if (isset($map['CardBox'])) {
            $model->cardBox = cardBox::fromMap($map['CardBox']);
        }
        if (isset($map['Cilt'])) {
            $model->cilt = cilt::fromMap($map['Cilt']);
        }
        if (isset($map['DocumentNumber'])) {
            $model->documentNumber = documentNumber::fromMap($map['DocumentNumber']);
        }
        if (isset($map['DriveClass'])) {
            $model->driveClass = driveClass::fromMap($map['DriveClass']);
        }
        if (isset($map['DueDate'])) {
            $model->dueDate = dueDate::fromMap($map['DueDate']);
        }
        if (isset($map['Duzenleyen'])) {
            $model->duzenleyen = duzenleyen::fromMap($map['Duzenleyen']);
        }
        if (isset($map['EntryNumber'])) {
            $model->entryNumber = entryNumber::fromMap($map['EntryNumber']);
        }
        if (isset($map['ExpiryDate'])) {
            $model->expiryDate = expiryDate::fromMap($map['ExpiryDate']);
        }
        if (isset($map['FatherName'])) {
            $model->fatherName = fatherName::fromMap($map['FatherName']);
        }
        if (isset($map['ForeignersId'])) {
            $model->foreignersId = foreignersId::fromMap($map['ForeignersId']);
        }
        if (isset($map['Gender'])) {
            $model->gender = gender::fromMap($map['Gender']);
        }
        if (isset($map['GivenName'])) {
            $model->givenName = givenName::fromMap($map['GivenName']);
        }
        if (isset($map['IdNumber'])) {
            $model->idNumber = idNumber::fromMap($map['IdNumber']);
        }
        if (isset($map['IssueBy'])) {
            $model->issueBy = issueBy::fromMap($map['IssueBy']);
        }
        if (isset($map['IssueCounty'])) {
            $model->issueCounty = issueCounty::fromMap($map['IssueCounty']);
        }
        if (isset($map['IssueDate'])) {
            $model->issueDate = issueDate::fromMap($map['IssueDate']);
        }
        if (isset($map['IssuePlace'])) {
            $model->issuePlace = issuePlace::fromMap($map['IssuePlace']);
        }
        if (isset($map['Kutuk'])) {
            $model->kutuk = kutuk::fromMap($map['Kutuk']);
        }
        if (isset($map['LicenseNumber'])) {
            $model->licenseNumber = licenseNumber::fromMap($map['LicenseNumber']);
        }
        if (isset($map['MaritalStatus'])) {
            $model->maritalStatus = maritalStatus::fromMap($map['MaritalStatus']);
        }
        if (isset($map['MotherName'])) {
            $model->motherName = motherName::fromMap($map['MotherName']);
        }
        if (isset($map['Name'])) {
            $model->name = name::fromMap($map['Name']);
        }
        if (isset($map['Nationality'])) {
            $model->nationality = nationality::fromMap($map['Nationality']);
        }
        if (isset($map['NeighborhoodVillage'])) {
            $model->neighborhoodVillage = neighborhoodVillage::fromMap($map['NeighborhoodVillage']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = pageNumber::fromMap($map['PageNumber']);
        }
        if (isset($map['PassportNumber'])) {
            $model->passportNumber = passportNumber::fromMap($map['PassportNumber']);
        }
        if (isset($map['PortraitBox'])) {
            $model->portraitBox = portraitBox::fromMap($map['PortraitBox']);
        }
        if (isset($map['Province'])) {
            $model->province = province::fromMap($map['Province']);
        }
        if (isset($map['ProvinceOfResidence'])) {
            $model->provinceOfResidence = provinceOfResidence::fromMap($map['ProvinceOfResidence']);
        }
        if (isset($map['ReasonOfIssue'])) {
            $model->reasonOfIssue = reasonOfIssue::fromMap($map['ReasonOfIssue']);
        }
        if (isset($map['RegisterNumber'])) {
            $model->registerNumber = registerNumber::fromMap($map['RegisterNumber']);
        }
        if (isset($map['Religion'])) {
            $model->religion = religion::fromMap($map['Religion']);
        }
        if (isset($map['Sayfa'])) {
            $model->sayfa = sayfa::fromMap($map['Sayfa']);
        }
        if (isset($map['Seri'])) {
            $model->seri = seri::fromMap($map['Seri']);
        }
        if (isset($map['Sex'])) {
            $model->sex = sex::fromMap($map['Sex']);
        }
        if (isset($map['Surname'])) {
            $model->surname = surname::fromMap($map['Surname']);
        }
        if (isset($map['TypeOfResidencePermit'])) {
            $model->typeOfResidencePermit = typeOfResidencePermit::fromMap($map['TypeOfResidencePermit']);
        }
        if (isset($map['ValidUntil'])) {
            $model->validUntil = validUntil::fromMap($map['ValidUntil']);
        }
        if (isset($map['Village'])) {
            $model->village = village::fromMap($map['Village']);
        }
        if (isset($map['VolumeNumber'])) {
            $model->volumeNumber = volumeNumber::fromMap($map['VolumeNumber']);
        }

        return $model;
    }
}
