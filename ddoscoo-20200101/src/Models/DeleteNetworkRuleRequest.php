<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkRule) {
            $res['NetworkRule'] = $this->networkRule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNetworkRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkRule'])) {
            $model->networkRule = $map['NetworkRule'];
        }

        return $model;
    }
}
