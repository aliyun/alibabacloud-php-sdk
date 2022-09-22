<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisesResponseBody\networkInsightsAnalysisSets;

use AlibabaCloud\Tea\Model;

class networkInsightsAnalysisSet extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $networkInsightsAnalysisId;

    /**
     * @var string
     */
    public $networkInsightsPathId;

    /**
     * @var string
     */
    public $networkPathFound;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime'              => 'CreationTime',
        'networkInsightsAnalysisId' => 'NetworkInsightsAnalysisId',
        'networkInsightsPathId'     => 'NetworkInsightsPathId',
        'networkPathFound'          => 'NetworkPathFound',
        'status'                    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->networkInsightsAnalysisId) {
            $res['NetworkInsightsAnalysisId'] = $this->networkInsightsAnalysisId;
        }
        if (null !== $this->networkInsightsPathId) {
            $res['NetworkInsightsPathId'] = $this->networkInsightsPathId;
        }
        if (null !== $this->networkPathFound) {
            $res['NetworkPathFound'] = $this->networkPathFound;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInsightsAnalysisSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['NetworkInsightsAnalysisId'])) {
            $model->networkInsightsAnalysisId = $map['NetworkInsightsAnalysisId'];
        }
        if (isset($map['NetworkInsightsPathId'])) {
            $model->networkInsightsPathId = $map['NetworkInsightsPathId'];
        }
        if (isset($map['NetworkPathFound'])) {
            $model->networkPathFound = $map['NetworkPathFound'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
