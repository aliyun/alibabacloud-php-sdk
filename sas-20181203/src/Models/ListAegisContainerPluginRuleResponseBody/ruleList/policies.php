<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAegisContainerPluginRuleResponseBody\ruleList;

use AlibabaCloud\Dara\Model;

class policies extends Model
{
    /**
     * @var string
     */
    public $policyKey;

    /**
     * @var string
     */
    public $policyName;
    protected $_name = [
        'policyKey' => 'PolicyKey',
        'policyName' => 'PolicyName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyKey) {
            $res['PolicyKey'] = $this->policyKey;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
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
        if (isset($map['PolicyKey'])) {
            $model->policyKey = $map['PolicyKey'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        return $model;
    }
}
