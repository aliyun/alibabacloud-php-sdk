<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateResolverRuleRequest\forwardIp;

class UpdateResolverRuleRequest extends Model
{
    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var forwardIp[]
     */
    public $forwardIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'endpointId' => 'EndpointId',
        'forwardIp' => 'ForwardIp',
        'lang' => 'Lang',
        'name' => 'Name',
        'ruleId' => 'RuleId',
    ];

    public function validate()
    {
        if (\is_array($this->forwardIp)) {
            Model::validateArray($this->forwardIp);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->forwardIp) {
            if (\is_array($this->forwardIp)) {
                $res['ForwardIp'] = [];
                $n1 = 0;
                foreach ($this->forwardIp as $item1) {
                    $res['ForwardIp'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
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
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['ForwardIp'])) {
            if (!empty($map['ForwardIp'])) {
                $model->forwardIp = [];
                $n1 = 0;
                foreach ($map['ForwardIp'] as $item1) {
                    $model->forwardIp[$n1] = forwardIp::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
