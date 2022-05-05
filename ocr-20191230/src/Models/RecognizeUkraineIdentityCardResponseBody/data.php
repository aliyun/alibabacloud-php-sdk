<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeUkraineIdentityCardResponseBody;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeUkraineIdentityCardResponseBody\data\birthDate;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeUkraineIdentityCardResponseBody\data\cardBox;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeUkraineIdentityCardResponseBody\data\documentNumber;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeUkraineIdentityCardResponseBody\data\expiryDate;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeUkraineIdentityCardResponseBody\data\nameEnglish;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeUkraineIdentityCardResponseBody\data\nameUkraine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeUkraineIdentityCardResponseBody\data\nationality;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeUkraineIdentityCardResponseBody\data\patronymic;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeUkraineIdentityCardResponseBody\data\portraitBox;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeUkraineIdentityCardResponseBody\data\recordNumber;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeUkraineIdentityCardResponseBody\data\sex;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeUkraineIdentityCardResponseBody\data\surnameEnglish;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeUkraineIdentityCardResponseBody\data\surnameUkraine;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var birthDate
     */
    public $birthDate;

    /**
     * @var cardBox
     */
    public $cardBox;

    /**
     * @var documentNumber
     */
    public $documentNumber;

    /**
     * @var expiryDate
     */
    public $expiryDate;

    /**
     * @var nameEnglish
     */
    public $nameEnglish;

    /**
     * @var nameUkraine
     */
    public $nameUkraine;

    /**
     * @var nationality
     */
    public $nationality;

    /**
     * @var patronymic
     */
    public $patronymic;

    /**
     * @var portraitBox
     */
    public $portraitBox;

    /**
     * @var recordNumber
     */
    public $recordNumber;

    /**
     * @var sex
     */
    public $sex;

    /**
     * @var surnameEnglish
     */
    public $surnameEnglish;

    /**
     * @var surnameUkraine
     */
    public $surnameUkraine;
    protected $_name = [
        'birthDate'      => 'BirthDate',
        'cardBox'        => 'CardBox',
        'documentNumber' => 'DocumentNumber',
        'expiryDate'     => 'ExpiryDate',
        'nameEnglish'    => 'NameEnglish',
        'nameUkraine'    => 'NameUkraine',
        'nationality'    => 'Nationality',
        'patronymic'     => 'Patronymic',
        'portraitBox'    => 'PortraitBox',
        'recordNumber'   => 'RecordNumber',
        'sex'            => 'Sex',
        'surnameEnglish' => 'SurnameEnglish',
        'surnameUkraine' => 'SurnameUkraine',
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
        if (null !== $this->cardBox) {
            $res['CardBox'] = null !== $this->cardBox ? $this->cardBox->toMap() : null;
        }
        if (null !== $this->documentNumber) {
            $res['DocumentNumber'] = null !== $this->documentNumber ? $this->documentNumber->toMap() : null;
        }
        if (null !== $this->expiryDate) {
            $res['ExpiryDate'] = null !== $this->expiryDate ? $this->expiryDate->toMap() : null;
        }
        if (null !== $this->nameEnglish) {
            $res['NameEnglish'] = null !== $this->nameEnglish ? $this->nameEnglish->toMap() : null;
        }
        if (null !== $this->nameUkraine) {
            $res['NameUkraine'] = null !== $this->nameUkraine ? $this->nameUkraine->toMap() : null;
        }
        if (null !== $this->nationality) {
            $res['Nationality'] = null !== $this->nationality ? $this->nationality->toMap() : null;
        }
        if (null !== $this->patronymic) {
            $res['Patronymic'] = null !== $this->patronymic ? $this->patronymic->toMap() : null;
        }
        if (null !== $this->portraitBox) {
            $res['PortraitBox'] = null !== $this->portraitBox ? $this->portraitBox->toMap() : null;
        }
        if (null !== $this->recordNumber) {
            $res['RecordNumber'] = null !== $this->recordNumber ? $this->recordNumber->toMap() : null;
        }
        if (null !== $this->sex) {
            $res['Sex'] = null !== $this->sex ? $this->sex->toMap() : null;
        }
        if (null !== $this->surnameEnglish) {
            $res['SurnameEnglish'] = null !== $this->surnameEnglish ? $this->surnameEnglish->toMap() : null;
        }
        if (null !== $this->surnameUkraine) {
            $res['SurnameUkraine'] = null !== $this->surnameUkraine ? $this->surnameUkraine->toMap() : null;
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
        if (isset($map['CardBox'])) {
            $model->cardBox = cardBox::fromMap($map['CardBox']);
        }
        if (isset($map['DocumentNumber'])) {
            $model->documentNumber = documentNumber::fromMap($map['DocumentNumber']);
        }
        if (isset($map['ExpiryDate'])) {
            $model->expiryDate = expiryDate::fromMap($map['ExpiryDate']);
        }
        if (isset($map['NameEnglish'])) {
            $model->nameEnglish = nameEnglish::fromMap($map['NameEnglish']);
        }
        if (isset($map['NameUkraine'])) {
            $model->nameUkraine = nameUkraine::fromMap($map['NameUkraine']);
        }
        if (isset($map['Nationality'])) {
            $model->nationality = nationality::fromMap($map['Nationality']);
        }
        if (isset($map['Patronymic'])) {
            $model->patronymic = patronymic::fromMap($map['Patronymic']);
        }
        if (isset($map['PortraitBox'])) {
            $model->portraitBox = portraitBox::fromMap($map['PortraitBox']);
        }
        if (isset($map['RecordNumber'])) {
            $model->recordNumber = recordNumber::fromMap($map['RecordNumber']);
        }
        if (isset($map['Sex'])) {
            $model->sex = sex::fromMap($map['Sex']);
        }
        if (isset($map['SurnameEnglish'])) {
            $model->surnameEnglish = surnameEnglish::fromMap($map['SurnameEnglish']);
        }
        if (isset($map['SurnameUkraine'])) {
            $model->surnameUkraine = surnameUkraine::fromMap($map['SurnameUkraine']);
        }

        return $model;
    }
}
