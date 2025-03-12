<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetClusterRuleSummaryResponseBody\clusterRuleSummary;
use AlibabaCloud\Tea\Model;

class GetClusterRuleSummaryResponseBody extends Model
{
    /**
     * @description The overall information about the cluster defense rules.
     *
     * @var clusterRuleSummary
     */
    public $clusterRuleSummary;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 291B49F9-xxx
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterRuleSummary' => 'ClusterRuleSummary',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterRuleSummary) {
            $res['ClusterRuleSummary'] = null !== $this->clusterRuleSummary ? $this->clusterRuleSummary->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClusterRuleSummaryResponseBody
     */
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
