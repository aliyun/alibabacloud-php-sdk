<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SubmitHotlineTransferRegisterRequest;

use AlibabaCloud\Tea\Model;

class transferPhoneNumberInfos extends Model
{
    /**
     * @var string
     */
    public $identityCard;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
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
