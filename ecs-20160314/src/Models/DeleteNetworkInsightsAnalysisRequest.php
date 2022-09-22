<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\Tea\Model;

class DeleteNetworkInsightsAnalysisRequest extends Model
{
    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string[]
     */
    public $networkInsightsAnalysisId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'dryRun'                    => 'DryRun',
        'networkInsightsAnalysisId' => 'NetworkInsightsAnalysisId',
        'regionId'                  => 'RegionId',
        'resourceOwnerId'           => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->networkInsightsAnalysisId) {
            $res['NetworkInsightsAnalysisId'] = $this->networkInsightsAnalysisId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNetworkInsightsAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['NetworkInsightsAnalysisId'])) {
            if (!empty($map['NetworkInsightsAnalysisId'])) {
                $model->networkInsightsAnalysisId = $map['NetworkInsightsAnalysisId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
