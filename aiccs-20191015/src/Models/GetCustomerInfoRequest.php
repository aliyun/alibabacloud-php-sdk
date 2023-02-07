<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetCustomerInfoRequest extends Model
{
    /**
     * @example ccc_xp_pre-cn-***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 82345678****
     *
     * @var int
     */
    public $memberId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'memberId'   => 'MemberId',
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
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCustomerInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }

        return $model;
    }
}
