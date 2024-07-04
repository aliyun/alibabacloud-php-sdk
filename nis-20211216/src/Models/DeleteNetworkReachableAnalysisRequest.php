<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class DeleteNetworkReachableAnalysisRequest extends Model
{
    /**
     * @description The IDs of the tasks for analyzing network reachability.
     *
     * This parameter is required.
     * @var string[]
     */
    public $networkReachableAnalysisIds;

    /**
     * @description The ID of the region for which you want to delete a task for analyzing network reachability.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'networkReachableAnalysisIds' => 'NetworkReachableAnalysisIds',
        'regionId'                    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkReachableAnalysisIds) {
            $res['NetworkReachableAnalysisIds'] = $this->networkReachableAnalysisIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNetworkReachableAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkReachableAnalysisIds'])) {
            if (!empty($map['NetworkReachableAnalysisIds'])) {
                $model->networkReachableAnalysisIds = $map['NetworkReachableAnalysisIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
