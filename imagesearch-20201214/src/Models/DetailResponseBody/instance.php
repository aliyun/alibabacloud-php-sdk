<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\DetailResponseBody;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The capacity of the plan. Unit: × 10,000 images.
     *
     * @example 10
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The name of the instance.
     *
     * @example imagesearchName
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of queries per second supported by the plan.
     *
     * @example 1
     *
     * @var int
     */
    public $qps;

    /**
     * @description The information about the region.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The Image Search model.
     *
     * 0: commodity search. 1: generic image search.
     * @example 0
     *
     * @var int
     */
    public $serviceType;

    /**
     * @description The number of images.
     *
     * @example 10063
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The time when the instance was created. Unit: milliseconds.
     *
     * @example 1620382716000
     *
     * @var string
     */
    public $utcCreate;

    /**
     * @description The time when the instance expires. Unit: milliseconds.
     *
     * @example 1623081600000
     *
     * @var string
     */
    public $utcExpireTime;
    protected $_name = [
        'capacity'      => 'Capacity',
        'name'          => 'Name',
        'qps'           => 'Qps',
        'region'        => 'Region',
        'serviceType'   => 'ServiceType',
        'totalCount'    => 'TotalCount',
        'utcCreate'     => 'UtcCreate',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->utcExpireTime) {
            $res['UtcExpireTime'] = $this->utcExpireTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['UtcExpireTime'])) {
            $model->utcExpireTime = $map['UtcExpireTime'];
        }

        return $model;
    }
}
