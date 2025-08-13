<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByConfigRequest;

use AlibabaCloud\Dara\Model;

class extGrayRules extends Model
{
    /**
     * @var string
     */
    public $grayRule;

    /**
     * @var string
     */
    public $grayRuleName;

    /**
     * @var int
     */
    public $grayRulePriority;

    /**
     * @var string
     */
    public $grayRuleType;
    protected $_name = [
        'grayRule' => 'GrayRule',
        'grayRuleName' => 'GrayRuleName',
        'grayRulePriority' => 'GrayRulePriority',
        'grayRuleType' => 'GrayRuleType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grayRule) {
            $res['GrayRule'] = $this->grayRule;
        }

        if (null !== $this->grayRuleName) {
            $res['GrayRuleName'] = $this->grayRuleName;
        }

        if (null !== $this->grayRulePriority) {
            $res['GrayRulePriority'] = $this->grayRulePriority;
        }

        if (null !== $this->grayRuleType) {
            $res['GrayRuleType'] = $this->grayRuleType;
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
        if (isset($map['GrayRule'])) {
            $model->grayRule = $map['GrayRule'];
        }

        if (isset($map['GrayRuleName'])) {
            $model->grayRuleName = $map['GrayRuleName'];
        }

        if (isset($map['GrayRulePriority'])) {
            $model->grayRulePriority = $map['GrayRulePriority'];
        }

        if (isset($map['GrayRuleType'])) {
            $model->grayRuleType = $map['GrayRuleType'];
        }

        return $model;
    }
}
