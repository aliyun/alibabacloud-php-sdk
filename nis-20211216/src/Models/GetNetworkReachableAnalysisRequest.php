<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class GetNetworkReachableAnalysisRequest extends Model
{
    /**
     * @description The ID of the task for analyzing network reachability. You can call the **CreateNetworkRearchableAnalysis** operation to obtain the ID of the task for analyzing network reachability.
     *
     * This parameter is required.
     * @example nra-90eef36a9e6e4662****
     *
     * @var string
     */
    public $networkReachableAnalysisId;

    /**
     * @description The ID of the region for which you want to obtain the result of network reachability analysis.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'networkReachableAnalysisId' => 'NetworkReachableAnalysisId',
        'regionId'                   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkReachableAnalysisId) {
            $res['NetworkReachableAnalysisId'] = $this->networkReachableAnalysisId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNetworkReachableAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkReachableAnalysisId'])) {
            $model->networkReachableAnalysisId = $map['NetworkReachableAnalysisId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
