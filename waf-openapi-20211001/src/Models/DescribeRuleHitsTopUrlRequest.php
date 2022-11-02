<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeRuleHitsTopUrlRequest extends Model
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
    public $resource;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var string
     */
    public $startTimestamp;
    protected $_name = [
        'endTimestamp'   => 'EndTimestamp',
        'instanceId'     => 'InstanceId',
        'resource'       => 'Resource',
        'ruleType'       => 'RuleType',
        'startTimestamp' => 'StartTimestamp',
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
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRuleHitsTopUrlRequest
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
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }

        return $model;
    }
}
