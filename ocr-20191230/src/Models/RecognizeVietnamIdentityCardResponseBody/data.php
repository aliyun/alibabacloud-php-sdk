<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody\data\addressFirstLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody\data\addressSecondLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody\data\birthDate;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody\data\cardBox;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody\data\driveClass;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody\data\expiryDate;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody\data\fullName;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody\data\idNumber;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody\data\nationality;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody\data\originPlaceFirstLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody\data\originPlaceSecondLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody\data\portraitBox;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody\data\residencePlaceFirstLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody\data\residencePlaceSecondLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody\data\sex;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var addressFirstLine
     */
    public $addressFirstLine;

    /**
     * @var addressSecondLine
     */
    public $addressSecondLine;

    /**
     * @var birthDate
     */
    public $birthDate;

    /**
     * @var cardBox
     */
    public $cardBox;

    /**
     * @var driveClass
     */
    public $driveClass;

    /**
     * @var expiryDate
     */
    public $expiryDate;

    /**
     * @var fullName
     */
    public $fullName;

    /**
     * @var idNumber
     */
    public $idNumber;

    /**
     * @var nationality
     */
    public $nationality;

    /**
     * @var originPlaceFirstLine
     */
    public $originPlaceFirstLine;

    /**
     * @var originPlaceSecondLine
     */
    public $originPlaceSecondLine;

    /**
     * @var portraitBox
     */
    public $portraitBox;

    /**
     * @var residencePlaceFirstLine
     */
    public $residencePlaceFirstLine;

    /**
     * @var residencePlaceSecondLine
     */
    public $residencePlaceSecondLine;

    /**
     * @var sex
     */
    public $sex;
    protected $_name = [
        'addressFirstLine'         => 'AddressFirstLine',
        'addressSecondLine'        => 'AddressSecondLine',
        'birthDate'                => 'BirthDate',
        'cardBox'                  => 'CardBox',
        'driveClass'               => 'DriveClass',
        'expiryDate'               => 'ExpiryDate',
        'fullName'                 => 'FullName',
        'idNumber'                 => 'IdNumber',
        'nationality'              => 'Nationality',
        'originPlaceFirstLine'     => 'OriginPlaceFirstLine',
        'originPlaceSecondLine'    => 'OriginPlaceSecondLine',
        'portraitBox'              => 'PortraitBox',
        'residencePlaceFirstLine'  => 'ResidencePlaceFirstLine',
        'residencePlaceSecondLine' => 'ResidencePlaceSecondLine',
        'sex'                      => 'Sex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressFirstLine) {
            $res['AddressFirstLine'] = null !== $this->addressFirstLine ? $this->addressFirstLine->toMap() : null;
        }
        if (null !== $this->addressSecondLine) {
            $res['AddressSecondLine'] = null !== $this->addressSecondLine ? $this->addressSecondLine->toMap() : null;
        }
        if (null !== $this->birthDate) {
            $res['BirthDate'] = null !== $this->birthDate ? $this->birthDate->toMap() : null;
        }
        if (null !== $this->cardBox) {
            $res['CardBox'] = null !== $this->cardBox ? $this->cardBox->toMap() : null;
        }
        if (null !== $this->driveClass) {
            $res['DriveClass'] = null !== $this->driveClass ? $this->driveClass->toMap() : null;
        }
        if (null !== $this->expiryDate) {
            $res['ExpiryDate'] = null !== $this->expiryDate ? $this->expiryDate->toMap() : null;
        }
        if (null !== $this->fullName) {
            $res['FullName'] = null !== $this->fullName ? $this->fullName->toMap() : null;
        }
        if (null !== $this->idNumber) {
            $res['IdNumber'] = null !== $this->idNumber ? $this->idNumber->toMap() : null;
        }
        if (null !== $this->nationality) {
            $res['Nationality'] = null !== $this->nationality ? $this->nationality->toMap() : null;
        }
        if (null !== $this->originPlaceFirstLine) {
            $res['OriginPlaceFirstLine'] = null !== $this->originPlaceFirstLine ? $this->originPlaceFirstLine->toMap() : null;
        }
        if (null !== $this->originPlaceSecondLine) {
            $res['OriginPlaceSecondLine'] = null !== $this->originPlaceSecondLine ? $this->originPlaceSecondLine->toMap() : null;
        }
        if (null !== $this->portraitBox) {
            $res['PortraitBox'] = null !== $this->portraitBox ? $this->portraitBox->toMap() : null;
        }
        if (null !== $this->residencePlaceFirstLine) {
            $res['ResidencePlaceFirstLine'] = null !== $this->residencePlaceFirstLine ? $this->residencePlaceFirstLine->toMap() : null;
        }
        if (null !== $this->residencePlaceSecondLine) {
            $res['ResidencePlaceSecondLine'] = null !== $this->residencePlaceSecondLine ? $this->residencePlaceSecondLine->toMap() : null;
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
        if (isset($map['AddressFirstLine'])) {
            $model->addressFirstLine = addressFirstLine::fromMap($map['AddressFirstLine']);
        }
        if (isset($map['AddressSecondLine'])) {
            $model->addressSecondLine = addressSecondLine::fromMap($map['AddressSecondLine']);
        }
        if (isset($map['BirthDate'])) {
            $model->birthDate = birthDate::fromMap($map['BirthDate']);
        }
        if (isset($map['CardBox'])) {
            $model->cardBox = cardBox::fromMap($map['CardBox']);
        }
        if (isset($map['DriveClass'])) {
            $model->driveClass = driveClass::fromMap($map['DriveClass']);
        }
        if (isset($map['ExpiryDate'])) {
            $model->expiryDate = expiryDate::fromMap($map['ExpiryDate']);
        }
        if (isset($map['FullName'])) {
            $model->fullName = fullName::fromMap($map['FullName']);
        }
        if (isset($map['IdNumber'])) {
            $model->idNumber = idNumber::fromMap($map['IdNumber']);
        }
        if (isset($map['Nationality'])) {
            $model->nationality = nationality::fromMap($map['Nationality']);
        }
        if (isset($map['OriginPlaceFirstLine'])) {
            $model->originPlaceFirstLine = originPlaceFirstLine::fromMap($map['OriginPlaceFirstLine']);
        }
        if (isset($map['OriginPlaceSecondLine'])) {
            $model->originPlaceSecondLine = originPlaceSecondLine::fromMap($map['OriginPlaceSecondLine']);
        }
        if (isset($map['PortraitBox'])) {
            $model->portraitBox = portraitBox::fromMap($map['PortraitBox']);
        }
        if (isset($map['ResidencePlaceFirstLine'])) {
            $model->residencePlaceFirstLine = residencePlaceFirstLine::fromMap($map['ResidencePlaceFirstLine']);
        }
        if (isset($map['ResidencePlaceSecondLine'])) {
            $model->residencePlaceSecondLine = residencePlaceSecondLine::fromMap($map['ResidencePlaceSecondLine']);
        }
        if (isset($map['Sex'])) {
            $model->sex = sex::fromMap($map['Sex']);
        }

        return $model;
    }
}
