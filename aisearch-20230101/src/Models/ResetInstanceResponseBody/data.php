<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models\ResetInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $capacity;

    /**
     * @example imagesearch_aisearch_xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example demoinstance1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example COMMODITY
     *
     * @var string
     */
    public $serviceType;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
     * @example 1623081600000
     *
     * @var int
     */
    public $utcCreateTime;

    /**
     * @example 1620382716000
     *
     * @var int
     */
    public $utcExpireTime;
    protected $_name = [
        'capacity'      => 'Capacity',
        'instanceId'    => 'InstanceId',
        'instanceName'  => 'InstanceName',
        'serviceType'   => 'ServiceType',
        'status'        => 'Status',
        'utcCreateTime' => 'UtcCreateTime',
        'utcExpireTime' => 'UtcExpireTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->utcCreateTime) {
            $res['UtcCreateTime'] = $this->utcCreateTime;
        }
        if (null !== $this->utcExpireTime) {
            $res['UtcExpireTime'] = $this->utcExpireTime;
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
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UtcCreateTime'])) {
            $model->utcCreateTime = $map['UtcCreateTime'];
        }
        if (isset($map['UtcExpireTime'])) {
            $model->utcExpireTime = $map['UtcExpireTime'];
        }

        return $model;
    }
}
