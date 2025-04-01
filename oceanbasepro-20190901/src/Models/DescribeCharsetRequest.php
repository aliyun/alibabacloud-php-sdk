<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class DescribeCharsetRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $series;

    /**
     * @var string
     */
    public $tenantMode;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'series' => 'Series',
        'tenantMode' => 'TenantMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
