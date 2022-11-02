<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeResponseCodeTrendGraphRequest extends Model
{
    /**
     * @var string
     */
    public $endTimestamp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $startTimestamp;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'endTimestamp'   => 'EndTimestamp',
        'instanceId'     => 'InstanceId',
        'interval'       => 'Interval',
        'resource'       => 'Resource',
        'startTimestamp' => 'StartTimestamp',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResponseCodeTrendGraphRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
