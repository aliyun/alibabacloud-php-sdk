<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationRequest\assistant\metaData\customRuleConfig;

use AlibabaCloud\Tea\Model;

class customRules extends Model
{
    /**
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $ruleDesc;

    /**
     * @var string
     */
    public $ruleTitle;
    protected $_name = [
        'riskLevel' => 'riskLevel',
        'ruleDesc'  => 'ruleDesc',
        'ruleTitle' => 'ruleTitle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskLevel) {
            $res['riskLevel'] = $this->riskLevel;
        }
        if (null !== $this->ruleDesc) {
            $res['ruleDesc'] = $this->ruleDesc;
        }
        if (null !== $this->ruleTitle) {
            $res['ruleTitle'] = $this->ruleTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['riskLevel'])) {
            $model->riskLevel = $map['riskLevel'];
        }
        if (isset($map['ruleDesc'])) {
            $model->ruleDesc = $map['ruleDesc'];
        }
        if (isset($map['ruleTitle'])) {
            $model->ruleTitle = $map['ruleTitle'];
        }

        return $model;
    }
}
