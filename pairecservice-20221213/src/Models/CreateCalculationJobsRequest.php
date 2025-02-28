<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CreateCalculationJobsRequest extends Model
{
    /**
     * @var string
     */
    public $ABMetricIds;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var string
     */
    public $instanceId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
