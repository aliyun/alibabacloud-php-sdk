<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClusterRuleResponseBody\clusterRule;
use AlibabaCloud\Tea\Model;

class DescribeHybridCloudClusterRuleResponseBody extends Model
{
    /**
     * @description The details of the rule.
     *
     * @var clusterRule
     */
    public $clusterRule;

    /**
     * @description The request ID.
     *
     * @example 1F29A6D2-9EB6-526D-A997-36888**99CB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterRule' => 'ClusterRule',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterRule) {
            $res['ClusterRule'] = null !== $this->clusterRule ? $this->clusterRule->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHybridCloudClusterRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterRule'])) {
            $model->clusterRule = clusterRule::fromMap($map['ClusterRule']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
