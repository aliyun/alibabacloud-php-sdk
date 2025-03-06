<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\clusterState;

use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\clusterState\clusterStage\totalStageWithWeight;
use AlibabaCloud\Tea\Model;

class clusterStage extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $currentStage;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $status;

    /**
     * @var totalStageWithWeight[]
     */
    public $totalStageWithWeight;
    protected $_name = [
        'clusterId'            => 'ClusterId',
        'currentStage'         => 'CurrentStage',
        'message'              => 'Message',
        'status'               => 'Status',
        'totalStageWithWeight' => 'TotalStageWithWeight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->currentStage) {
            $res['CurrentStage'] = $this->currentStage;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalStageWithWeight) {
            $res['TotalStageWithWeight'] = [];
            if (null !== $this->totalStageWithWeight && \is_array($this->totalStageWithWeight)) {
                $n = 0;
                foreach ($this->totalStageWithWeight as $item) {
                    $res['TotalStageWithWeight'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterStage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CurrentStage'])) {
            $model->currentStage = $map['CurrentStage'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalStageWithWeight'])) {
            if (!empty($map['TotalStageWithWeight'])) {
                $model->totalStageWithWeight = [];
                $n                           = 0;
                foreach ($map['TotalStageWithWeight'] as $item) {
                    $model->totalStageWithWeight[$n++] = null !== $item ? totalStageWithWeight::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
