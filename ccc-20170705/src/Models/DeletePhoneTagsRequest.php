<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class DeletePhoneTagsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $phoneNumberList;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'phoneNumberList' => 'PhoneNumberList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->phoneNumberList) {
            $res['PhoneNumberList'] = $this->phoneNumberList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePhoneTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PhoneNumberList'])) {
            if (!empty($map['PhoneNumberList'])) {
                $model->phoneNumberList = $map['PhoneNumberList'];
            }
        }

        return $model;
    }
}
