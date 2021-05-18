<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetCustomerInfoRequest extends Model
{
    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 会员ID
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
