<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyRulesResponseBody\egressProxyRules;

use AlibabaCloud\Dara\Model;

class preDns extends Model
{
    /**
     * @var string
     */
    public $egressProxyRuleId;

    /**
     * @var int
     */
    public $priority;
    protected $_name = [
        'egressProxyRuleId' => 'EgressProxyRuleId',
        'priority' => 'Priority',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->egressProxyRuleId) {
            $res['EgressProxyRuleId'] = $this->egressProxyRuleId;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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
        if (isset($map['EgressProxyRuleId'])) {
            $model->egressProxyRuleId = $map['EgressProxyRuleId'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
