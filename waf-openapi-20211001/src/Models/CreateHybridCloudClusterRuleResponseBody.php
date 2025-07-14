<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class CreateHybridCloudClusterRuleResponseBody extends Model
{
    /**
     * @example hdbc-clusterrule-*******m0w
     *
     * @var string
     */
    public $clusterRuleResourceId;

    /**
     * @example 66A98669-CC6E-4F3E-*****-3014697B11AE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterRuleResourceId' => 'ClusterRuleResourceId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterRuleResourceId) {
            $res['ClusterRuleResourceId'] = $this->clusterRuleResourceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHybridCloudClusterRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterRuleResourceId'])) {
            $model->clusterRuleResourceId = $map['ClusterRuleResourceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
