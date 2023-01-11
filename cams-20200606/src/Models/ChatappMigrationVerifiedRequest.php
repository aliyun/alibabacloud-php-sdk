<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class ChatappMigrationVerifiedRequest extends Model
{
    /**
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @example 861380000000
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example 828798
     *
     * @var string
     */
    public $verifyCode;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'phoneNumber' => 'PhoneNumber',
        'verifyCode'  => 'VerifyCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->verifyCode) {
            $res['VerifyCode'] = $this->verifyCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChatappMigrationVerifiedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['VerifyCode'])) {
            $model->verifyCode = $map['VerifyCode'];
        }

        return $model;
    }
}
