<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyConfigurationAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class ruleGroups extends Model
{
    /**
     * @var string
     */
    public $egressProxyRuleGroupId;

    /**
     * @var int
     */
    public $priority;
    protected $_name = [
        'egressProxyRuleGroupId' => 'EgressProxyRuleGroupId',
        'priority' => 'Priority',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->egressProxyRuleGroupId) {
            $res['EgressProxyRuleGroupId'] = $this->egressProxyRuleGroupId;
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
        if (isset($map['EgressProxyRuleGroupId'])) {
            $model->egressProxyRuleGroupId = $map['EgressProxyRuleGroupId'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
