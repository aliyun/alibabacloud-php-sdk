<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class GetRiskListRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example alikafka_pre-cn-pe335pgxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 0
     *
     * @var int
     */
    public $startIndex;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'startIndex' => 'StartIndex',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startIndex) {
            $res['StartIndex'] = $this->startIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRiskListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartIndex'])) {
            $model->startIndex = $map['StartIndex'];
        }

        return $model;
    }
}
