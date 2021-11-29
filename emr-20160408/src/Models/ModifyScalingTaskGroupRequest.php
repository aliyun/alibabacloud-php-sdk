<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ModifyScalingTaskGroupRequest extends Model
{
    /**
     * @var string
     */
    public $activeRuleCategory;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $defaultCooldown;

    /**
     * @var string
     */
    public $hostGroupId;

    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var int
     */
    public $minSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $timeoutWithGrace;

    /**
     * @var bool
     */
    public $withGrace;
    protected $_name = [
        'activeRuleCategory' => 'ActiveRuleCategory',
        'clusterId'          => 'ClusterId',
        'defaultCooldown'    => 'DefaultCooldown',
        'hostGroupId'        => 'HostGroupId',
        'maxSize'            => 'MaxSize',
        'minSize'            => 'MinSize',
        'regionId'           => 'RegionId',
        'resourceOwnerId'    => 'ResourceOwnerId',
        'timeoutWithGrace'   => 'TimeoutWithGrace',
        'withGrace'          => 'WithGrace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeRuleCategory) {
            $res['ActiveRuleCategory'] = $this->activeRuleCategory;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->defaultCooldown) {
            $res['DefaultCooldown'] = $this->defaultCooldown;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->minSize) {
            $res['MinSize'] = $this->minSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->timeoutWithGrace) {
            $res['TimeoutWithGrace'] = $this->timeoutWithGrace;
        }
        if (null !== $this->withGrace) {
            $res['WithGrace'] = $this->withGrace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyScalingTaskGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveRuleCategory'])) {
            $model->activeRuleCategory = $map['ActiveRuleCategory'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DefaultCooldown'])) {
            $model->defaultCooldown = $map['DefaultCooldown'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['MinSize'])) {
            $model->minSize = $map['MinSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TimeoutWithGrace'])) {
            $model->timeoutWithGrace = $map['TimeoutWithGrace'];
        }
        if (isset($map['WithGrace'])) {
            $model->withGrace = $map['WithGrace'];
        }

        return $model;
    }
}
