<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClusterRuleResponseBody\clusterRule;

class DescribeHybridCloudClusterRuleResponseBody extends Model
{
    /**
     * @var clusterRule
     */
    public $clusterRule;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterRule' => 'ClusterRule',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->clusterRule) {
            $this->clusterRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterRule) {
            $res['ClusterRule'] = null !== $this->clusterRule ? $this->clusterRule->toArray($noStream) : $this->clusterRule;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ClusterRule'])) {
            $model->clusterRule = clusterRule::fromMap($map['ClusterRule']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
