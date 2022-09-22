<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayRequest\templateTag;
use AlibabaCloud\Tea\Model;

class DescribeResourceDisplayRequest extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $firstBizLevel;

    /**
     * @var string[]
     */
    public $instanceCategoryType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $secondBizLevel;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var templateTag[]
     */
    public $templateTag;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'chargeType'           => 'ChargeType',
        'firstBizLevel'        => 'FirstBizLevel',
        'instanceCategoryType' => 'InstanceCategoryType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'secondBizLevel'       => 'SecondBizLevel',
        'spotStrategy'         => 'SpotStrategy',
        'templateTag'          => 'TemplateTag',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->firstBizLevel) {
            $res['FirstBizLevel'] = $this->firstBizLevel;
        }
        if (null !== $this->instanceCategoryType) {
            $res['InstanceCategoryType'] = $this->instanceCategoryType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->secondBizLevel) {
            $res['SecondBizLevel'] = $this->secondBizLevel;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->templateTag) {
            $res['TemplateTag'] = [];
            if (null !== $this->templateTag && \is_array($this->templateTag)) {
                $n = 0;
                foreach ($this->templateTag as $item) {
                    $res['TemplateTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceDisplayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['FirstBizLevel'])) {
            $model->firstBizLevel = $map['FirstBizLevel'];
        }
        if (isset($map['InstanceCategoryType'])) {
            if (!empty($map['InstanceCategoryType'])) {
                $model->instanceCategoryType = $map['InstanceCategoryType'];
            }
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecondBizLevel'])) {
            $model->secondBizLevel = $map['SecondBizLevel'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['TemplateTag'])) {
            if (!empty($map['TemplateTag'])) {
                $model->templateTag = [];
                $n                  = 0;
                foreach ($map['TemplateTag'] as $item) {
                    $model->templateTag[$n++] = null !== $item ? templateTag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
