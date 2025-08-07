<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class CreateHybridCloudClusterRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterRuleResourceId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterRuleResourceId' => 'ClusterRuleResourceId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
