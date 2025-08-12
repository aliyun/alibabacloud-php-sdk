<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class EnableEventRulesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $ruleNames;
    protected $_name = [
        'regionId' => 'RegionId',
        'ruleNames' => 'RuleNames',
    ];

    public function validate()
    {
        if (\is_array($this->ruleNames)) {
            Model::validateArray($this->ruleNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->ruleNames) {
            if (\is_array($this->ruleNames)) {
                $res['RuleNames'] = [];
                $n1 = 0;
                foreach ($this->ruleNames as $item1) {
                    $res['RuleNames'][$n1] = $item1;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RuleNames'])) {
            if (!empty($map['RuleNames'])) {
                $model->ruleNames = [];
                $n1 = 0;
                foreach ($map['RuleNames'] as $item1) {
                    $model->ruleNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
