<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AdvanceSecurityEventOperationsRequest extends Model
{
    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example 123
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'eventName'       => 'EventName',
        'eventType'       => 'EventType',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ruleId'          => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AdvanceSecurityEventOperationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
