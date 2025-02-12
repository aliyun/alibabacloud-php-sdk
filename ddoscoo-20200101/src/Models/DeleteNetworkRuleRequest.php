<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DeleteNetworkRuleRequest extends Model
{
    /**
     * @var string
     */
    public $networkRule;
    protected $_name = [
        'networkRule' => 'NetworkRule',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkRule) {
            $res['NetworkRule'] = $this->networkRule;
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
            $model->networkRule = $map['NetworkRule'];
        }

        return $model;
    }
}
