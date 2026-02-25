<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class ModifyDiskTypeRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string
     */
    public $promotionOptionNo;

    /**
     * @var string
     */
    public $targetDiskType;

    /**
     * @var string
     */
    public $targetPerformanceLevel;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'nodeGroupId' => 'NodeGroupId',
        'promotionOptionNo' => 'PromotionOptionNo',
        'targetDiskType' => 'TargetDiskType',
        'targetPerformanceLevel' => 'TargetPerformanceLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->promotionOptionNo) {
            $res['PromotionOptionNo'] = $this->promotionOptionNo;
        }

        if (null !== $this->targetDiskType) {
            $res['TargetDiskType'] = $this->targetDiskType;
        }

        if (null !== $this->targetPerformanceLevel) {
            $res['TargetPerformanceLevel'] = $this->targetPerformanceLevel;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['PromotionOptionNo'])) {
            $model->promotionOptionNo = $map['PromotionOptionNo'];
        }

        if (isset($map['TargetDiskType'])) {
            $model->targetDiskType = $map['TargetDiskType'];
        }

        if (isset($map['TargetPerformanceLevel'])) {
            $model->targetPerformanceLevel = $map['TargetPerformanceLevel'];
        }

        return $model;
    }
}
