<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListHotlineTransferNumberResponseBody\data;

use AlibabaCloud\Tea\Model;

class values extends Model
{
    /**
     * @description The China 400 number.
     *
     * @example 400****
     *
     * @var string
     */
    public $hotlineNumber;

    /**
     * @description The ID card number of the number owner.
     *
     * @example 500***4119
     *
     * @var string
     */
    public $identityCard;

    /**
     * @description The real name of the number owner or the company name.
     *
     * @example A***
     *
     * @var string
     */
    public $numberOwnerName;

    /**
     * @description The registered phone number.
     *
     * @example 1580000****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The qualification ID.
     *
     * @example 100***
     *
     * @var string
     */
    public $qualificationId;

    /**
     * @description The resource code.
     *
     * @example 1***
     *
     * @var string
     */
    public $resUniqueCode;
    protected $_name = [
        'hotlineNumber'   => 'HotlineNumber',
        'identityCard'    => 'IdentityCard',
        'numberOwnerName' => 'NumberOwnerName',
        'phoneNumber'     => 'PhoneNumber',
        'qualificationId' => 'QualificationId',
        'resUniqueCode'   => 'ResUniqueCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotlineNumber) {
            $res['HotlineNumber'] = $this->hotlineNumber;
        }
        if (null !== $this->identityCard) {
            $res['IdentityCard'] = $this->identityCard;
        }
        if (null !== $this->numberOwnerName) {
            $res['NumberOwnerName'] = $this->numberOwnerName;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }
        if (null !== $this->resUniqueCode) {
            $res['ResUniqueCode'] = $this->resUniqueCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return values
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotlineNumber'])) {
            $model->hotlineNumber = $map['HotlineNumber'];
        }
        if (isset($map['IdentityCard'])) {
            $model->identityCard = $map['IdentityCard'];
        }
        if (isset($map['NumberOwnerName'])) {
            $model->numberOwnerName = $map['NumberOwnerName'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }
        if (isset($map['ResUniqueCode'])) {
            $model->resUniqueCode = $map['ResUniqueCode'];
        }

        return $model;
    }
}
