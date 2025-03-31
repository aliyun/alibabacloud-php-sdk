<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListCacheReserveInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class instanceInfo extends Model
{
    /**
     * @var int
     */
    public $cacheReserveCapacity;

    /**
     * @var string
     */
    public $cacheReserveRegion;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'cacheReserveCapacity' => 'CacheReserveCapacity',
        'cacheReserveRegion' => 'CacheReserveRegion',
        'chargeType' => 'ChargeType',
        'createTime' => 'CreateTime',
        'duration' => 'Duration',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheReserveCapacity) {
            $res['CacheReserveCapacity'] = $this->cacheReserveCapacity;
        }

        if (null !== $this->cacheReserveRegion) {
            $res['CacheReserveRegion'] = $this->cacheReserveRegion;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CacheReserveCapacity'])) {
            $model->cacheReserveCapacity = $map['CacheReserveCapacity'];
        }

        if (isset($map['CacheReserveRegion'])) {
            $model->cacheReserveRegion = $map['CacheReserveRegion'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
