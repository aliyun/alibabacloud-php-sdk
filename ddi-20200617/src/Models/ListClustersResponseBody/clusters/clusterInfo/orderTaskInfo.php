<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListClustersResponseBody\clusters\clusterInfo;

use AlibabaCloud\Tea\Model;

class orderTaskInfo extends Model
{
    /**
     * @var int
     */
    public $targetCount;

    /**
     * @var int
     */
    public $currentCount;

    /**
     * @var string
     */
    public $orderIdList;
    protected $_name = [
        'targetCount'  => 'TargetCount',
        'currentCount' => 'CurrentCount',
        'orderIdList'  => 'OrderIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetCount) {
            $res['TargetCount'] = $this->targetCount;
        }
        if (null !== $this->currentCount) {
            $res['CurrentCount'] = $this->currentCount;
        }
        if (null !== $this->orderIdList) {
            $res['OrderIdList'] = $this->orderIdList;
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
        if (isset($map['TargetCount'])) {
            $model->targetCount = $map['TargetCount'];
        }
        if (isset($map['CurrentCount'])) {
            $model->currentCount = $map['CurrentCount'];
        }
        if (isset($map['OrderIdList'])) {
            $model->orderIdList = $map['OrderIdList'];
        }

        return $model;
    }
}
