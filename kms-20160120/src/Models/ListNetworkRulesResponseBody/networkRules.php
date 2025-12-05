<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListNetworkRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListNetworkRulesResponseBody\networkRules\networkRule;

class networkRules extends Model
{
    /**
     * @var networkRule[]
     */
    public $networkRule;
    protected $_name = [
        'networkRule' => 'NetworkRule',
    ];

    public function validate()
    {
        if (\is_array($this->networkRule)) {
            Model::validateArray($this->networkRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkRule) {
            if (\is_array($this->networkRule)) {
                $res['NetworkRule'] = [];
                $n1 = 0;
                foreach ($this->networkRule as $item1) {
                    $res['NetworkRule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NetworkRule'])) {
            if (!empty($map['NetworkRule'])) {
                $model->networkRule = [];
                $n1 = 0;
                foreach ($map['NetworkRule'] as $item1) {
                    $model->networkRule[$n1] = networkRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
