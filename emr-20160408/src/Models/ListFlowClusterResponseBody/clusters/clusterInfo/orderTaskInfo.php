<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterResponseBody\clusters\clusterInfo;

use AlibabaCloud\Tea\Model;

class orderTaskInfo extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $currentCount;

    /**
     * @example 1,2
     *
     * @var string
     */
    public $orderIdList;

    /**
     * @example 2
     *
     * @var int
     */
    public $targetCount;
    protected $_name = [
        'currentCount' => 'CurrentCount',
        'orderIdList'  => 'OrderIdList',
        'targetCount'  => 'TargetCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentCount) {
            $res['CurrentCount'] = $this->currentCount;
        }
        if (null !== $this->orderIdList) {
            $res['OrderIdList'] = $this->orderIdList;
        }
        if (null !== $this->targetCount) {
            $res['TargetCount'] = $this->targetCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderTaskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentCount'])) {
            $model->currentCount = $map['CurrentCount'];
        }
        if (isset($map['OrderIdList'])) {
            $model->orderIdList = $map['OrderIdList'];
        }
        if (isset($map['TargetCount'])) {
            $model->targetCount = $map['TargetCount'];
        }

        return $model;
    }
}
