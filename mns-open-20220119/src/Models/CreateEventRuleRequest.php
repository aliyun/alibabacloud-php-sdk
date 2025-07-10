<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateEventRuleRequest\endpoints;

class CreateEventRuleRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $deliveryMode;

    /**
     * @var endpoints[]
     */
    public $endpoints;

    /**
     * @var string[]
     */
    public $eventTypes;

    /**
     * @var EventMatchRule[][]
     */
    public $matchRules;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'deliveryMode' => 'DeliveryMode',
        'endpoints' => 'Endpoints',
        'eventTypes' => 'EventTypes',
        'matchRules' => 'MatchRules',
        'productName' => 'ProductName',
        'ruleName' => 'RuleName',
    ];

    public function validate()
    {
        if (\is_array($this->endpoints)) {
            Model::validateArray($this->endpoints);
        }
        if (\is_array($this->eventTypes)) {
            Model::validateArray($this->eventTypes);
        }
        if (\is_array($this->matchRules)) {
            Model::validateArray($this->matchRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->deliveryMode) {
            $res['DeliveryMode'] = $this->deliveryMode;
        }

        if (null !== $this->endpoints) {
            if (\is_array($this->endpoints)) {
                $res['Endpoints'] = [];
                $n1 = 0;
                foreach ($this->endpoints as $item1) {
                    $res['Endpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->eventTypes) {
            if (\is_array($this->eventTypes)) {
                $res['EventTypes'] = [];
                $n1 = 0;
                foreach ($this->eventTypes as $item1) {
                    $res['EventTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->matchRules) {
            if (\is_array($this->matchRules)) {
                $res['MatchRules'] = [];
                $n1 = 0;
                foreach ($this->matchRules as $item1) {
                    if (\is_array($item1)) {
                        $res['MatchRules'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['MatchRules'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DeliveryMode'])) {
            $model->deliveryMode = $map['DeliveryMode'];
        }

        if (isset($map['Endpoints'])) {
            if (!empty($map['Endpoints'])) {
                $model->endpoints = [];
                $n1 = 0;
                foreach ($map['Endpoints'] as $item1) {
                    $model->endpoints[$n1] = endpoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EventTypes'])) {
            if (!empty($map['EventTypes'])) {
                $model->eventTypes = [];
                $n1 = 0;
                foreach ($map['EventTypes'] as $item1) {
                    $model->eventTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MatchRules'])) {
            if (!empty($map['MatchRules'])) {
                $model->matchRules = [];
                $n1 = 0;
                foreach ($map['MatchRules'] as $item1) {
                    if (!empty($item1)) {
                        $model->matchRules[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->matchRules[$n1][$n2] = EventMatchRule::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
