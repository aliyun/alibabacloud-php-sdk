<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class DecreaseNodesRequest extends Model
{
    /**
     * @var int
     */
    public $batchInterval;

    /**
     * @var int
     */
    public $batchSize;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $decreaseNodeCount;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string[]
     */
    public $nodeIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'batchInterval' => 'BatchInterval',
        'batchSize' => 'BatchSize',
        'clusterId' => 'ClusterId',
        'decreaseNodeCount' => 'DecreaseNodeCount',
        'nodeGroupId' => 'NodeGroupId',
        'nodeIds' => 'NodeIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->nodeIds)) {
            Model::validateArray($this->nodeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchInterval) {
            $res['BatchInterval'] = $this->batchInterval;
        }

        if (null !== $this->batchSize) {
            $res['BatchSize'] = $this->batchSize;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->decreaseNodeCount) {
            $res['DecreaseNodeCount'] = $this->decreaseNodeCount;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->nodeIds) {
            if (\is_array($this->nodeIds)) {
                $res['NodeIds'] = [];
                $n1 = 0;
                foreach ($this->nodeIds as $item1) {
                    $res['NodeIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['BatchInterval'])) {
            $model->batchInterval = $map['BatchInterval'];
        }

        if (isset($map['BatchSize'])) {
            $model->batchSize = $map['BatchSize'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['DecreaseNodeCount'])) {
            $model->decreaseNodeCount = $map['DecreaseNodeCount'];
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = [];
                $n1 = 0;
                foreach ($map['NodeIds'] as $item1) {
                    $model->nodeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
