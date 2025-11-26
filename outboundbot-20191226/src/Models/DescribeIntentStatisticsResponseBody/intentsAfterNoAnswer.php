<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeIntentStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class intentsAfterNoAnswer extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $hitAfterNoAnswer;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $intentId;

    /**
     * @var string
     */
    public $intentName;
    protected $_name = [
        'groupId' => 'GroupId',
        'hitAfterNoAnswer' => 'HitAfterNoAnswer',
        'instanceId' => 'InstanceId',
        'intentId' => 'IntentId',
        'intentName' => 'IntentName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->hitAfterNoAnswer) {
            $res['HitAfterNoAnswer'] = $this->hitAfterNoAnswer;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['HitAfterNoAnswer'])) {
            $model->hitAfterNoAnswer = $map['HitAfterNoAnswer'];
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

        return $model;
    }
}
