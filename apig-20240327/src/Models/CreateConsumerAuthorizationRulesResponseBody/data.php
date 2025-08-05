<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRulesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $consumerAuthorizationRuleIds;
    protected $_name = [
        'consumerAuthorizationRuleIds' => 'consumerAuthorizationRuleIds',
    ];

    public function validate()
    {
        if (\is_array($this->consumerAuthorizationRuleIds)) {
            Model::validateArray($this->consumerAuthorizationRuleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerAuthorizationRuleIds) {
            if (\is_array($this->consumerAuthorizationRuleIds)) {
                $res['consumerAuthorizationRuleIds'] = [];
                $n1 = 0;
                foreach ($this->consumerAuthorizationRuleIds as $item1) {
                    $res['consumerAuthorizationRuleIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['consumerAuthorizationRuleIds'])) {
            if (!empty($map['consumerAuthorizationRuleIds'])) {
                $model->consumerAuthorizationRuleIds = [];
                $n1 = 0;
                foreach ($map['consumerAuthorizationRuleIds'] as $item1) {
                    $model->consumerAuthorizationRuleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
