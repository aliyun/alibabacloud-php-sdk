<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class EnableMetricRulesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $ruleId;
    protected $_name = [
        'regionId' => 'RegionId',
        'ruleId' => 'RuleId',
    ];

    public function validate()
    {
        if (\is_array($this->ruleId)) {
            Model::validateArray($this->ruleId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->ruleId) {
            if (\is_array($this->ruleId)) {
                $res['RuleId'] = [];
                $n1 = 0;
                foreach ($this->ruleId as $item1) {
                    $res['RuleId'][$n1] = $item1;
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

        if (isset($map['RuleId'])) {
            if (!empty($map['RuleId'])) {
                $model->ruleId = [];
                $n1 = 0;
                foreach ($map['RuleId'] as $item1) {
                    $model->ruleId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
