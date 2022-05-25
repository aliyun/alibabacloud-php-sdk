<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeMalaysiaIdentityCardResponseBody;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeMalaysiaIdentityCardResponseBody\data\addressFifthLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeMalaysiaIdentityCardResponseBody\data\addressFirstLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeMalaysiaIdentityCardResponseBody\data\addressFourthLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeMalaysiaIdentityCardResponseBody\data\addressSecondLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeMalaysiaIdentityCardResponseBody\data\addressThirdLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeMalaysiaIdentityCardResponseBody\data\cardBox;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeMalaysiaIdentityCardResponseBody\data\driveClass;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeMalaysiaIdentityCardResponseBody\data\expiryDate;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeMalaysiaIdentityCardResponseBody\data\idNumber;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeMalaysiaIdentityCardResponseBody\data\issueDate;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeMalaysiaIdentityCardResponseBody\data\nameFirstLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeMalaysiaIdentityCardResponseBody\data\nameSecondLine;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeMalaysiaIdentityCardResponseBody\data\nationality;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeMalaysiaIdentityCardResponseBody\data\portraitBox;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeMalaysiaIdentityCardResponseBody\data\sex;
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
     * @var idNumber
     */
    public $idNumber;

    /**
     * @var issueDate
     */
    public $issueDate;

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
     * @var portraitBox
     */
    public $portraitBox;

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
        'cardBox'           => 'CardBox',
        'driveClass'        => 'DriveClass',
        'expiryDate'        => 'ExpiryDate',
        'idNumber'          => 'IdNumber',
        'issueDate'         => 'IssueDate',
        'nameFirstLine'     => 'NameFirstLine',
        'nameSecondLine'    => 'NameSecondLine',
        'nationality'       => 'Nationality',
        'portraitBox'       => 'PortraitBox',
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
        if (null !== $this->cardBox) {
            $res['CardBox'] = null !== $this->cardBox ? $this->cardBox->toMap() : null;
        }
        if (null !== $this->driveClass) {
            $res['DriveClass'] = null !== $this->driveClass ? $this->driveClass->toMap() : null;
        }
        if (null !== $this->expiryDate) {
            $res['ExpiryDate'] = null !== $this->expiryDate ? $this->expiryDate->toMap() : null;
        }
        if (null !== $this->idNumber) {
            $res['IdNumber'] = null !== $this->idNumber ? $this->idNumber->toMap() : null;
        }
        if (null !== $this->issueDate) {
            $res['IssueDate'] = null !== $this->issueDate ? $this->issueDate->toMap() : null;
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
        if (null !== $this->portraitBox) {
            $res['PortraitBox'] = null !== $this->portraitBox ? $this->portraitBox->toMap() : null;
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
        if (isset($map['CardBox'])) {
            $model->cardBox = cardBox::fromMap($map['CardBox']);
        }
        if (isset($map['DriveClass'])) {
            $model->driveClass = driveClass::fromMap($map['DriveClass']);
        }
        if (isset($map['ExpiryDate'])) {
            $model->expiryDate = expiryDate::fromMap($map['ExpiryDate']);
        }
        if (isset($map['IdNumber'])) {
            $model->idNumber = idNumber::fromMap($map['IdNumber']);
        }
        if (isset($map['IssueDate'])) {
            $model->issueDate = issueDate::fromMap($map['IssueDate']);
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
        if (isset($map['PortraitBox'])) {
            $model->portraitBox = portraitBox::fromMap($map['PortraitBox']);
        }
        if (isset($map['Sex'])) {
            $model->sex = sex::fromMap($map['Sex']);
        }

        return $model;
    }
}
