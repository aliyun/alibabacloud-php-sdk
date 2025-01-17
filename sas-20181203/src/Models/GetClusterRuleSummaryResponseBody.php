<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetClusterRuleSummaryResponseBody\clusterRuleSummary;

class GetClusterRuleSummaryResponseBody extends Model
{
    /**
     * @var clusterRuleSummary
     */
    public $clusterRuleSummary;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterRuleSummary' => 'ClusterRuleSummary',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->clusterRuleSummary) {
            $this->clusterRuleSummary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterRuleSummary) {
            $res['ClusterRuleSummary'] = null !== $this->clusterRuleSummary ? $this->clusterRuleSummary->toArray($noStream) : $this->clusterRuleSummary;
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
        if (isset($map['ClusterRuleSummary'])) {
            $model->clusterRuleSummary = clusterRuleSummary::fromMap($map['ClusterRuleSummary']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
