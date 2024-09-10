<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorGroupInstancesRequest;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * This parameter is required.
     * @example ecs
     *
     * @var string
     */
    public $category;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example i-2ze26xj5wwy12****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name.
     *
     * This parameter is required.
     * @example test-instance-ecs
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The region ID of the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'category'     => 'Category',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
