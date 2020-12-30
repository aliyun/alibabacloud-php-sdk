<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ModifyScalingTaskGroupRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $hostGroupId;

    /**
     * @var int
     */
    public $minSize;

    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var int
     */
    public $defaultCooldown;

    /**
     * @var string
     */
    public $activeRuleCategory;

    /**
     * @var bool
     */
    public $withGrace;

    /**
     * @var int
     */
    public $timeoutWithGrace;
    protected $_name = [
        'resourceOwnerId'    => 'ResourceOwnerId',
        'regionId'           => 'RegionId',
        'clusterId'          => 'ClusterId',
        'hostGroupId'        => 'HostGroupId',
        'minSize'            => 'MinSize',
        'maxSize'            => 'MaxSize',
        'defaultCooldown'    => 'DefaultCooldown',
        'activeRuleCategory' => 'ActiveRuleCategory',
        'withGrace'          => 'WithGrace',
        'timeoutWithGrace'   => 'TimeoutWithGrace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->minSize) {
            $res['MinSize'] = $this->minSize;
        }
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->defaultCooldown) {
            $res['DefaultCooldown'] = $this->defaultCooldown;
        }
        if (null !== $this->activeRuleCategory) {
            $res['ActiveRuleCategory'] = $this->activeRuleCategory;
        }
        if (null !== $this->withGrace) {
            $res['WithGrace'] = $this->withGrace;
        }
        if (null !== $this->timeoutWithGrace) {
            $res['TimeoutWithGrace'] = $this->timeoutWithGrace;
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
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['MinSize'])) {
            $model->minSize = $map['MinSize'];
        }
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['DefaultCooldown'])) {
            $model->defaultCooldown = $map['DefaultCooldown'];
        }
        if (isset($map['ActiveRuleCategory'])) {
            $model->activeRuleCategory = $map['ActiveRuleCategory'];
        }
        if (isset($map['WithGrace'])) {
            $model->withGrace = $map['WithGrace'];
        }
        if (isset($map['TimeoutWithGrace'])) {
            $model->timeoutWithGrace = $map['TimeoutWithGrace'];
        }

        return $model;
    }
}
