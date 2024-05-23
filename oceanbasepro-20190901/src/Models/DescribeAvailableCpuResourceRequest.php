<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailableCpuResourceRequest extends Model
{
    /**
     * @description The CPU resources available.
     *
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description ```
     * http(s)://[Endpoint]/?Action=DescribeAvailableCpuResource
     * &InstanceId=ob317v4uif****
     * &TenantId=ob2mr3oae0****
     * ```
     * @example update
     *
     * @var string
     */
    public $modifyType;

    /**
     * @description The operation that you want to perform.
     * Set the value to **DescribeAvailableCpuResource**.
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'modifyType' => 'ModifyType',
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
        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableCpuResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
