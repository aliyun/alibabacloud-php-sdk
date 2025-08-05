<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class BatchDeleteConsumerAuthorizationRuleRequest extends Model
{
    /**
     * @var string
     */
    public $consumerAuthorizationRuleIds;
    protected $_name = [
        'consumerAuthorizationRuleIds' => 'consumerAuthorizationRuleIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerAuthorizationRuleIds) {
            $res['consumerAuthorizationRuleIds'] = $this->consumerAuthorizationRuleIds;
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
            $model->consumerAuthorizationRuleIds = $map['consumerAuthorizationRuleIds'];
        }

        return $model;
    }
}
