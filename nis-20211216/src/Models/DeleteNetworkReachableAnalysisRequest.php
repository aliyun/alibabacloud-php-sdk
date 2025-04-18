<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class DeleteNetworkReachableAnalysisRequest extends Model
{
    /**
     * @var string[]
     */
    public $networkReachableAnalysisIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'networkReachableAnalysisIds' => 'NetworkReachableAnalysisIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->networkReachableAnalysisIds)) {
            Model::validateArray($this->networkReachableAnalysisIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkReachableAnalysisIds) {
            if (\is_array($this->networkReachableAnalysisIds)) {
                $res['NetworkReachableAnalysisIds'] = [];
                $n1 = 0;
                foreach ($this->networkReachableAnalysisIds as $item1) {
                    $res['NetworkReachableAnalysisIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['NetworkReachableAnalysisIds'])) {
            if (!empty($map['NetworkReachableAnalysisIds'])) {
                $model->networkReachableAnalysisIds = [];
                $n1 = 0;
                foreach ($map['NetworkReachableAnalysisIds'] as $item1) {
                    $model->networkReachableAnalysisIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
