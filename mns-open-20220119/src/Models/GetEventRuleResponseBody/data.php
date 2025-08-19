<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetEventRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\EventMatchRule;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetEventRuleResponseBody\data\endpoint;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetEventRuleResponseBody\data\subscriptions;

class data extends Model
{
    /**
     * @var string
     */
    public $deliveryMode;

    /**
     * @var endpoint
     */
    public $endpoint;

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
    public $ruleName;

    /**
     * @var subscriptions[]
     */
    public $subscriptions;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'deliveryMode' => 'DeliveryMode',
        'endpoint' => 'Endpoint',
        'eventTypes' => 'EventTypes',
        'matchRules' => 'MatchRules',
        'ruleName' => 'RuleName',
        'subscriptions' => 'Subscriptions',
        'topicName' => 'TopicName',
    ];

    public function validate()
    {
        if (null !== $this->endpoint) {
            $this->endpoint->validate();
        }
        if (\is_array($this->eventTypes)) {
            Model::validateArray($this->eventTypes);
        }
        if (\is_array($this->matchRules)) {
            Model::validateArray($this->matchRules);
        }
        if (\is_array($this->subscriptions)) {
            Model::validateArray($this->subscriptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryMode) {
            $res['DeliveryMode'] = $this->deliveryMode;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = null !== $this->endpoint ? $this->endpoint->toArray($noStream) : $this->endpoint;
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

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->subscriptions) {
            if (\is_array($this->subscriptions)) {
                $res['Subscriptions'] = [];
                $n1 = 0;
                foreach ($this->subscriptions as $item1) {
                    $res['Subscriptions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
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
        if (isset($map['DeliveryMode'])) {
            $model->deliveryMode = $map['DeliveryMode'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = endpoint::fromMap($map['Endpoint']);
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

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['Subscriptions'])) {
            if (!empty($map['Subscriptions'])) {
                $model->subscriptions = [];
                $n1 = 0;
                foreach ($map['Subscriptions'] as $item1) {
                    $model->subscriptions[$n1] = subscriptions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
