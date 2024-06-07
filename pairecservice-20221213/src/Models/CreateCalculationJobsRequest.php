<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateCalculationJobsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2,3,4
     *
     * @var string
     */
    public $ABMetricIds;

    /**
     * @description This parameter is required.
     *
     * @example 2023-01-03
     *
     * @var string
     */
    public $endDate;

    /**
     * @description This parameter is required.
     *
     * @example pairec-cn-test1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example 2023-01-01
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'ABMetricIds' => 'ABMetricIds',
        'endDate'     => 'EndDate',
        'instanceId'  => 'InstanceId',
        'startDate'   => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ABMetricIds) {
            $res['ABMetricIds'] = $this->ABMetricIds;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCalculationJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ABMetricIds'])) {
            $model->ABMetricIds = $map['ABMetricIds'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
