<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Dara\Model;

class AcceptFulfillmentDecisionRequest extends Model
{
    /**
     * @var string
     */
    public $decisionConclusion;

    /**
     * @var string
     */
    public $decisionType;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'decisionConclusion' => 'DecisionConclusion',
        'decisionType' => 'DecisionType',
        'orderId' => 'OrderId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->decisionConclusion) {
            $res['DecisionConclusion'] = $this->decisionConclusion;
        }

        if (null !== $this->decisionType) {
            $res['DecisionType'] = $this->decisionType;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
        if (isset($map['DecisionConclusion'])) {
            $model->decisionConclusion = $map['DecisionConclusion'];
        }

        if (isset($map['DecisionType'])) {
            $model->decisionType = $map['DecisionType'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
