<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\addressFifthLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\addressFirstLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\addressFourthLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\addressSecondLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\addressThirdLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\birthDate;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\birthPlace;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\cardBox;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\expiryDate;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\gender;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\height;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\idNumber;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\licenseNumber;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\maritalStatus;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\nameFirstLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\nameSecondLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\nationality;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\occupation;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\portraitBox;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\province;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\religion;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIndonesiaIdentityCardResponseBody\data\sex;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var addressFifthLine
     */
    public $addressFifthLine;

    /**
     * @var addressFirstLine
     */
    public $addressFirstLine;

    /**
     * @var addressFourthLine
     */
    public $addressFourthLine;

    /**
     * @var addressSecondLine
     */
    public $addressSecondLine;

    /**
     * @var addressThirdLine
     */
    public $addressThirdLine;

    /**
     * @var birthDate
     */
    public $birthDate;

    /**
     * @var birthPlace
     */
    public $birthPlace;

    /**
     * @var cardBox
     */
    public $cardBox;

    /**
     * @var expiryDate
     */
    public $expiryDate;

    /**
     * @var gender
     */
    public $gender;

    /**
     * @var height
     */
    public $height;

    /**
     * @var idNumber
     */
    public $idNumber;

    /**
     * @var licenseNumber
     */
    public $licenseNumber;

    /**
     * @var maritalStatus
     */
    public $maritalStatus;

    /**
     * @var nameFirstLine
     */
    public $nameFirstLine;

    /**
     * @var nameSecondLine
     */
    public $nameSecondLine;

    /**
     * @var nationality
     */
    public $nationality;

    /**
     * @var occupation
     */
    public $occupation;

    /**
     * @var portraitBox
     */
    public $portraitBox;

    /**
     * @var province
     */
    public $province;

    /**
     * @var religion
     */
    public $religion;

    /**
     * @var sex
     */
    public $sex;
    protected $_name = [
        'addressFifthLine'  => 'AddressFifthLine',
        'addressFirstLine'  => 'AddressFirstLine',
        'addressFourthLine' => 'AddressFourthLine',
        'addressSecondLine' => 'AddressSecondLine',
        'addressThirdLine'  => 'AddressThirdLine',
        'birthDate'         => 'BirthDate',
        'birthPlace'        => 'BirthPlace',
        'cardBox'           => 'CardBox',
        'expiryDate'        => 'ExpiryDate',
        'gender'            => 'Gender',
        'height'            => 'Height',
        'idNumber'          => 'IdNumber',
        'licenseNumber'     => 'LicenseNumber',
        'maritalStatus'     => 'MaritalStatus',
        'nameFirstLine'     => 'NameFirstLine',
        'nameSecondLine'    => 'NameSecondLine',
        'nationality'       => 'Nationality',
        'occupation'        => 'Occupation',
        'portraitBox'       => 'PortraitBox',
        'province'          => 'Province',
        'religion'          => 'Religion',
        'sex'               => 'Sex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressFifthLine) {
            $res['AddressFifthLine'] = null !== $this->addressFifthLine ? $this->addressFifthLine->toMap() : null;
        }
        if (null !== $this->addressFirstLine) {
            $res['AddressFirstLine'] = null !== $this->addressFirstLine ? $this->addressFirstLine->toMap() : null;
        }
        if (null !== $this->addressFourthLine) {
            $res['AddressFourthLine'] = null !== $this->addressFourthLine ? $this->addressFourthLine->toMap() : null;
        }
        if (null !== $this->addressSecondLine) {
            $res['AddressSecondLine'] = null !== $this->addressSecondLine ? $this->addressSecondLine->toMap() : null;
        }
        if (null !== $this->addressThirdLine) {
            $res['AddressThirdLine'] = null !== $this->addressThirdLine ? $this->addressThirdLine->toMap() : null;
        }
        if (null !== $this->birthDate) {
            $res['BirthDate'] = null !== $this->birthDate ? $this->birthDate->toMap() : null;
        }
        if (null !== $this->birthPlace) {
            $res['BirthPlace'] = null !== $this->birthPlace ? $this->birthPlace->toMap() : null;
        }
        if (null !== $this->cardBox) {
            $res['CardBox'] = null !== $this->cardBox ? $this->cardBox->toMap() : null;
        }
        if (null !== $this->expiryDate) {
            $res['ExpiryDate'] = null !== $this->expiryDate ? $this->expiryDate->toMap() : null;
        }
        if (null !== $this->gender) {
            $res['Gender'] = null !== $this->gender ? $this->gender->toMap() : null;
        }
        if (null !== $this->height) {
            $res['Height'] = null !== $this->height ? $this->height->toMap() : null;
        }
        if (null !== $this->idNumber) {
            $res['IdNumber'] = null !== $this->idNumber ? $this->idNumber->toMap() : null;
        }
        if (null !== $this->licenseNumber) {
            $res['LicenseNumber'] = null !== $this->licenseNumber ? $this->licenseNumber->toMap() : null;
        }
        if (null !== $this->maritalStatus) {
            $res['MaritalStatus'] = null !== $this->maritalStatus ? $this->maritalStatus->toMap() : null;
        }
        if (null !== $this->nameFirstLine) {
            $res['NameFirstLine'] = null !== $this->nameFirstLine ? $this->nameFirstLine->toMap() : null;
        }
        if (null !== $this->nameSecondLine) {
            $res['NameSecondLine'] = null !== $this->nameSecondLine ? $this->nameSecondLine->toMap() : null;
        }
        if (null !== $this->nationality) {
            $res['Nationality'] = null !== $this->nationality ? $this->nationality->toMap() : null;
        }
        if (null !== $this->occupation) {
            $res['Occupation'] = null !== $this->occupation ? $this->occupation->toMap() : null;
        }
        if (null !== $this->portraitBox) {
            $res['PortraitBox'] = null !== $this->portraitBox ? $this->portraitBox->toMap() : null;
        }
        if (null !== $this->province) {
            $res['Province'] = null !== $this->province ? $this->province->toMap() : null;
        }
        if (null !== $this->religion) {
            $res['Religion'] = null !== $this->religion ? $this->religion->toMap() : null;
        }
        if (null !== $this->sex) {
            $res['Sex'] = null !== $this->sex ? $this->sex->toMap() : null;
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
        if (isset($map['AddressFifthLine'])) {
            $model->addressFifthLine = addressFifthLine::fromMap($map['AddressFifthLine']);
        }
        if (isset($map['AddressFirstLine'])) {
            $model->addressFirstLine = addressFirstLine::fromMap($map['AddressFirstLine']);
        }
        if (isset($map['AddressFourthLine'])) {
            $model->addressFourthLine = addressFourthLine::fromMap($map['AddressFourthLine']);
        }
        if (isset($map['AddressSecondLine'])) {
            $model->addressSecondLine = addressSecondLine::fromMap($map['AddressSecondLine']);
        }
        if (isset($map['AddressThirdLine'])) {
            $model->addressThirdLine = addressThirdLine::fromMap($map['AddressThirdLine']);
        }
        if (isset($map['BirthDate'])) {
            $model->birthDate = birthDate::fromMap($map['BirthDate']);
        }
        if (isset($map['BirthPlace'])) {
            $model->birthPlace = birthPlace::fromMap($map['BirthPlace']);
        }
        if (isset($map['CardBox'])) {
            $model->cardBox = cardBox::fromMap($map['CardBox']);
        }
        if (isset($map['ExpiryDate'])) {
            $model->expiryDate = expiryDate::fromMap($map['ExpiryDate']);
        }
        if (isset($map['Gender'])) {
            $model->gender = gender::fromMap($map['Gender']);
        }
        if (isset($map['Height'])) {
            $model->height = height::fromMap($map['Height']);
        }
        if (isset($map['IdNumber'])) {
            $model->idNumber = idNumber::fromMap($map['IdNumber']);
        }
        if (isset($map['LicenseNumber'])) {
            $model->licenseNumber = licenseNumber::fromMap($map['LicenseNumber']);
        }
        if (isset($map['MaritalStatus'])) {
            $model->maritalStatus = maritalStatus::fromMap($map['MaritalStatus']);
        }
        if (isset($map['NameFirstLine'])) {
            $model->nameFirstLine = nameFirstLine::fromMap($map['NameFirstLine']);
        }
        if (isset($map['NameSecondLine'])) {
            $model->nameSecondLine = nameSecondLine::fromMap($map['NameSecondLine']);
        }
        if (isset($map['Nationality'])) {
            $model->nationality = nationality::fromMap($map['Nationality']);
        }
        if (isset($map['Occupation'])) {
            $model->occupation = occupation::fromMap($map['Occupation']);
        }
        if (isset($map['PortraitBox'])) {
            $model->portraitBox = portraitBox::fromMap($map['PortraitBox']);
        }
        if (isset($map['Province'])) {
            $model->province = province::fromMap($map['Province']);
        }
        if (isset($map['Religion'])) {
            $model->religion = religion::fromMap($map['Religion']);
        }
        if (isset($map['Sex'])) {
            $model->sex = sex::fromMap($map['Sex']);
        }

        return $model;
    }
}
