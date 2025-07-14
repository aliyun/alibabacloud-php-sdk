<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeIntentStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class processIntents extends Model
{
    /**
     * @example 0c3f352f-d045-491d-9ce7-11f2d2b7775d
     *
     * @var string
     */
    public $groupId;

    /**
     * @example 1
     *
     * @var int
     */
    public $hitAfterNoAnswer;

    /**
     * @example 10
     *
     * @var int
     */
    public $hitNum;

    /**
     * @example a4274627-265f-4e14-b2d6-4ee7d4f8593e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 12343
     *
     * @var string
     */
    public $intentId;

    /**
     * @var string
     */
    public $intentName;

    /**
     * @var string
     */
    public $rateDisplay;

    /**
     * @example ProcessIntent
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'groupId' => 'GroupId',
        'hitAfterNoAnswer' => 'HitAfterNoAnswer',
        'hitNum' => 'HitNum',
        'instanceId' => 'InstanceId',
        'intentId' => 'IntentId',
        'intentName' => 'IntentName',
        'rateDisplay' => 'RateDisplay',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->hitAfterNoAnswer) {
            $res['HitAfterNoAnswer'] = $this->hitAfterNoAnswer;
        }
        if (null !== $this->hitNum) {
            $res['HitNum'] = $this->hitNum;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }
        if (null !== $this->intentName) {
            $res['IntentName'] = $this->intentName;
        }
        if (null !== $this->rateDisplay) {
            $res['RateDisplay'] = $this->rateDisplay;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return processIntents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['HitAfterNoAnswer'])) {
            $model->hitAfterNoAnswer = $map['HitAfterNoAnswer'];
        }
        if (isset($map['HitNum'])) {
            $model->hitNum = $map['HitNum'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }
        if (isset($map['IntentName'])) {
            $model->intentName = $map['IntentName'];
        }
        if (isset($map['RateDisplay'])) {
            $model->rateDisplay = $map['RateDisplay'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
