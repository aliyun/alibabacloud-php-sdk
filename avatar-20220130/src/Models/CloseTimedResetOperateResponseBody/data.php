<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\CloseTimedResetOperateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example avatar_operation_public_cn-7pp2****802
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example xxxxx
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'tenantId'   => 'TenantId',
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
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
