<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Tea\Model;

class ModifyCuRequest extends Model
{
    /**
     * @description Specifies whether to restart compute nodes in quick restart mode. Default value: false. Valid values:
     *
     *   true: Compute nodes are restarted in quick restart mode in multiple batches. The batches are executed in parallel, and the nodes in each batch are restarted at the same time.
     *   false: Compute nodes are restarted in rolling restart mode.
     *
     * @example true
     *
     * @var bool
     */
    public $fastMode;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example c-b25e21e24388****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The warehouse ID.
     *
     * This parameter is required.
     *
     * @example ng-3d5ce6454354****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string
     */
    public $promotionOptionNo;

    /**
     * @description The number of CUs to which you want to change.
     *
     * Valid values:
     *
     *   4
     *   8
     *   16
     *   32
     *   64
     *
     * This parameter is required.
     *
     * @example 4
     *
     * @var int
     */
    public $target;
    protected $_name = [
        'fastMode' => 'FastMode',
        'instanceId' => 'InstanceId',
        'nodeGroupId' => 'NodeGroupId',
        'promotionOptionNo' => 'PromotionOptionNo',
        'target' => 'Target',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fastMode) {
            $res['FastMode'] = $this->fastMode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->promotionOptionNo) {
            $res['PromotionOptionNo'] = $this->promotionOptionNo;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCuRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FastMode'])) {
            $model->fastMode = $map['FastMode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['PromotionOptionNo'])) {
            $model->promotionOptionNo = $map['PromotionOptionNo'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
