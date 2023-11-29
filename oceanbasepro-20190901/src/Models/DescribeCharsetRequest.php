<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeCharsetRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @description 实例的系列  - normal（默认）：标准集群版（云盘）  - normal_ssd：标准集群版（本地盘） - history：历史库集群版。
     *
     * @example normal
     *
     * @var string
     */
    public $series;

    /**
     * @description The return result of the request.
     *
     * @example Oracle
     *
     * @var string
     */
    public $tenantMode;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'series'     => 'Series',
        'tenantMode' => 'TenantMode',
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
        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }
        if (null !== $this->tenantMode) {
            $res['TenantMode'] = $this->tenantMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCharsetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }
        if (isset($map['TenantMode'])) {
            $model->tenantMode = $map['TenantMode'];
        }

        return $model;
    }
}
