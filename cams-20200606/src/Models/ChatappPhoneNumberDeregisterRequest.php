<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class ChatappPhoneNumberDeregisterRequest extends Model
{
    /**
     * @description The space ID of the RAM user within the independent software vendor (ISV) account.
     *
     * This parameter is required.
     * @example 939283893939
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The phone number that you want to deregister.
     *
     * This parameter is required.
     * @example 8613800000000
     *
     * @var string
     */
    public $phoneNumber;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'phoneNumber' => 'PhoneNumber',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChatappPhoneNumberDeregisterRequest
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

        return $model;
    }
}
