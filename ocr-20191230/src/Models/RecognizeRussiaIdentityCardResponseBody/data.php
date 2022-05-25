<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeRussiaIdentityCardResponseBody;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeRussiaIdentityCardResponseBody\data\birthDate;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeRussiaIdentityCardResponseBody\data\birthPlaceFirstLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeRussiaIdentityCardResponseBody\data\birthPlaceSecondLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeRussiaIdentityCardResponseBody\data\birthPlaceThirdLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeRussiaIdentityCardResponseBody\data\cardBox;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeRussiaIdentityCardResponseBody\data\givenName;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeRussiaIdentityCardResponseBody\data\idNumber;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeRussiaIdentityCardResponseBody\data\paternalName;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeRussiaIdentityCardResponseBody\data\portraitBox;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeRussiaIdentityCardResponseBody\data\sex;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeRussiaIdentityCardResponseBody\data\surnameFirstLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeRussiaIdentityCardResponseBody\data\surnameSecondLine;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var birthDate
     */
    public $birthDate;

    /**
     * @var birthPlaceFirstLine
     */
    public $birthPlaceFirstLine;

    /**
     * @var birthPlaceSecondLine
     */
    public $birthPlaceSecondLine;

    /**
     * @var birthPlaceThirdLine
     */
    public $birthPlaceThirdLine;

    /**
     * @var cardBox
     */
    public $cardBox;

    /**
     * @var givenName
     */
    public $givenName;

    /**
     * @var idNumber
     */
    public $idNumber;

    /**
     * @var paternalName
     */
    public $paternalName;

    /**
     * @var portraitBox
     */
    public $portraitBox;

    /**
     * @var sex
     */
    public $sex;

    /**
     * @var surnameFirstLine
     */
    public $surnameFirstLine;

    /**
     * @var surnameSecondLine
     */
    public $surnameSecondLine;
    protected $_name = [
        'birthDate'            => 'BirthDate',
        'birthPlaceFirstLine'  => 'BirthPlaceFirstLine',
        'birthPlaceSecondLine' => 'BirthPlaceSecondLine',
        'birthPlaceThirdLine'  => 'BirthPlaceThirdLine',
        'cardBox'              => 'CardBox',
        'givenName'            => 'GivenName',
        'idNumber'             => 'IdNumber',
        'paternalName'         => 'PaternalName',
        'portraitBox'          => 'PortraitBox',
        'sex'                  => 'Sex',
        'surnameFirstLine'     => 'SurnameFirstLine',
        'surnameSecondLine'    => 'SurnameSecondLine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->birthDate) {
            $res['BirthDate'] = null !== $this->birthDate ? $this->birthDate->toMap() : null;
        }
        if (null !== $this->birthPlaceFirstLine) {
            $res['BirthPlaceFirstLine'] = null !== $this->birthPlaceFirstLine ? $this->birthPlaceFirstLine->toMap() : null;
        }
        if (null !== $this->birthPlaceSecondLine) {
            $res['BirthPlaceSecondLine'] = null !== $this->birthPlaceSecondLine ? $this->birthPlaceSecondLine->toMap() : null;
        }
        if (null !== $this->birthPlaceThirdLine) {
            $res['BirthPlaceThirdLine'] = null !== $this->birthPlaceThirdLine ? $this->birthPlaceThirdLine->toMap() : null;
        }
        if (null !== $this->cardBox) {
            $res['CardBox'] = null !== $this->cardBox ? $this->cardBox->toMap() : null;
        }
        if (null !== $this->givenName) {
            $res['GivenName'] = null !== $this->givenName ? $this->givenName->toMap() : null;
        }
        if (null !== $this->idNumber) {
            $res['IdNumber'] = null !== $this->idNumber ? $this->idNumber->toMap() : null;
        }
        if (null !== $this->paternalName) {
            $res['PaternalName'] = null !== $this->paternalName ? $this->paternalName->toMap() : null;
        }
        if (null !== $this->portraitBox) {
            $res['PortraitBox'] = null !== $this->portraitBox ? $this->portraitBox->toMap() : null;
        }
        if (null !== $this->sex) {
            $res['Sex'] = null !== $this->sex ? $this->sex->toMap() : null;
        }
        if (null !== $this->surnameFirstLine) {
            $res['SurnameFirstLine'] = null !== $this->surnameFirstLine ? $this->surnameFirstLine->toMap() : null;
        }
        if (null !== $this->surnameSecondLine) {
            $res['SurnameSecondLine'] = null !== $this->surnameSecondLine ? $this->surnameSecondLine->toMap() : null;
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
        if (isset($map['BirthDate'])) {
            $model->birthDate = birthDate::fromMap($map['BirthDate']);
        }
        if (isset($map['BirthPlaceFirstLine'])) {
            $model->birthPlaceFirstLine = birthPlaceFirstLine::fromMap($map['BirthPlaceFirstLine']);
        }
        if (isset($map['BirthPlaceSecondLine'])) {
            $model->birthPlaceSecondLine = birthPlaceSecondLine::fromMap($map['BirthPlaceSecondLine']);
        }
        if (isset($map['BirthPlaceThirdLine'])) {
            $model->birthPlaceThirdLine = birthPlaceThirdLine::fromMap($map['BirthPlaceThirdLine']);
        }
        if (isset($map['CardBox'])) {
            $model->cardBox = cardBox::fromMap($map['CardBox']);
        }
        if (isset($map['GivenName'])) {
            $model->givenName = givenName::fromMap($map['GivenName']);
        }
        if (isset($map['IdNumber'])) {
            $model->idNumber = idNumber::fromMap($map['IdNumber']);
        }
        if (isset($map['PaternalName'])) {
            $model->paternalName = paternalName::fromMap($map['PaternalName']);
        }
        if (isset($map['PortraitBox'])) {
            $model->portraitBox = portraitBox::fromMap($map['PortraitBox']);
        }
        if (isset($map['Sex'])) {
            $model->sex = sex::fromMap($map['Sex']);
        }
        if (isset($map['SurnameFirstLine'])) {
            $model->surnameFirstLine = surnameFirstLine::fromMap($map['SurnameFirstLine']);
        }
        if (isset($map['SurnameSecondLine'])) {
            $model->surnameSecondLine = surnameSecondLine::fromMap($map['SurnameSecondLine']);
        }

        return $model;
    }
}
