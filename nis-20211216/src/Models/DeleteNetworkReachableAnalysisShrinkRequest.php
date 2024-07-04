<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class DeleteNetworkReachableAnalysisShrinkRequest extends Model
{
    /**
     * @description The IDs of the tasks for analyzing network reachability.
     *
     * This parameter is required.
     * @var string
     */
    public $networkReachableAnalysisIdsShrink;

    /**
     * @description The ID of the region for which you want to delete a task for analyzing network reachability.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'networkReachableAnalysisIdsShrink' => 'NetworkReachableAnalysisIds',
        'regionId'                          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkReachableAnalysisIdsShrink) {
            $res['NetworkReachableAnalysisIds'] = $this->networkReachableAnalysisIdsShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNetworkReachableAnalysisShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkReachableAnalysisIds'])) {
            $model->networkReachableAnalysisIdsShrink = $map['NetworkReachableAnalysisIds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
