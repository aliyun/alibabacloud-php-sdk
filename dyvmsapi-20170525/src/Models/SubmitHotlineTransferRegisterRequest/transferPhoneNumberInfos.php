<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SubmitHotlineTransferRegisterRequest;

use AlibabaCloud\Tea\Model;

class transferPhoneNumberInfos extends Model
{
    /**
     * @description The ID card number of the number owner.
     *
     * @example 500***
     *
     * @var string
     */
    public $identityCard;

    /**
     * @description The China 400 number that you want to submit for registration.
     *
     * @example 1580000****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The real name or company name of the number owner.
     *
     * @example A***
     *
     * @var string
     */
    public $phoneNumberOwnerName;
    protected $_name = [
        'identityCard'         => 'IdentityCard',
        'phoneNumber'          => 'PhoneNumber',
        'phoneNumberOwnerName' => 'PhoneNumberOwnerName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identityCard) {
            $res['IdentityCard'] = $this->identityCard;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->phoneNumberOwnerName) {
            $res['PhoneNumberOwnerName'] = $this->phoneNumberOwnerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transferPhoneNumberInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdentityCard'])) {
            $model->identityCard = $map['IdentityCard'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['PhoneNumberOwnerName'])) {
            $model->phoneNumberOwnerName = $map['PhoneNumberOwnerName'];
        }

        return $model;
    }
}
