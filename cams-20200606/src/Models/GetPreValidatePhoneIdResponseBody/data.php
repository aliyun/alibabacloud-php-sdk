<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetPreValidatePhoneIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 929833
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example 8613800000000
     *
     * @var string
     */
    public $phoneNumberId;
    protected $_name = [
        'phoneNumber'   => 'PhoneNumber',
        'phoneNumberId' => 'PhoneNumberId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->phoneNumberId) {
            $res['PhoneNumberId'] = $this->phoneNumberId;
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
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['PhoneNumberId'])) {
            $model->phoneNumberId = $map['PhoneNumberId'];
        }

        return $model;
    }
}
