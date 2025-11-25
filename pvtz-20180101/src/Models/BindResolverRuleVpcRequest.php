<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\BindResolverRuleVpcRequest\vpc;

class BindResolverRuleVpcRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var vpc[]
     */
    public $vpc;
    protected $_name = [
        'lang' => 'Lang',
        'ruleId' => 'RuleId',
        'vpc' => 'Vpc',
    ];

    public function validate()
    {
        if (\is_array($this->vpc)) {
            Model::validateArray($this->vpc);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->vpc) {
            if (\is_array($this->vpc)) {
                $res['Vpc'] = [];
                $n1 = 0;
                foreach ($this->vpc as $item1) {
                    $res['Vpc'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['Vpc'])) {
            if (!empty($map['Vpc'])) {
                $model->vpc = [];
                $n1 = 0;
                foreach ($map['Vpc'] as $item1) {
                    $model->vpc[$n1] = vpc::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
