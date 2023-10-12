<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @example 100
     *
     * @var string
     */
    public $instanceDeviceMaxCount;

    /**
     * @example 2023-10-18 00:00:00
     *
     * @var string
     */
    public $instanceEndDate;

    /**
     * @example cmn-cn-7mz2mh3tj02
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @example 2023-09-18 00:00:00
     *
     * @var string
     */
    public $instanceOpenDate;

    /**
     * @example profession
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $instanceStatus;
    protected $_name = [
        'instanceDeviceMaxCount' => 'InstanceDeviceMaxCount',
        'instanceEndDate'        => 'InstanceEndDate',
        'instanceId'             => 'InstanceId',
        'instanceName'           => 'InstanceName',
        'instanceOpenDate'       => 'InstanceOpenDate',
        'instanceSpec'           => 'InstanceSpec',
        'instanceStatus'         => 'InstanceStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceDeviceMaxCount) {
            $res['InstanceDeviceMaxCount'] = $this->instanceDeviceMaxCount;
        }
        if (null !== $this->instanceEndDate) {
            $res['InstanceEndDate'] = $this->instanceEndDate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceOpenDate) {
            $res['InstanceOpenDate'] = $this->instanceOpenDate;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
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
        if (isset($map['InstanceDeviceMaxCount'])) {
            $model->instanceDeviceMaxCount = $map['InstanceDeviceMaxCount'];
        }
        if (isset($map['InstanceEndDate'])) {
            $model->instanceEndDate = $map['InstanceEndDate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceOpenDate'])) {
            $model->instanceOpenDate = $map['InstanceOpenDate'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        return $model;
    }
}
