<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DeleteNetworkRuleRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $networkRule;
    protected $_name = [
        'sourceIp'    => 'SourceIp',
        'networkRule' => 'NetworkRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['NetworkRule'])) {
            $model->networkRule = $map['NetworkRule'];
        }

        return $model;
    }
}
