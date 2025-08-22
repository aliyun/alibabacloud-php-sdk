<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class ListEnvironmentsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $addonName;

    /**
     * @var string
     */
    public $bindResourceId;

    /**
     * @var string
     */
    public $environmentType;

    /**
     * @var string
     */
    public $feePackage;

    /**
     * @var string
     */
    public $filterRegionIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $tagShrink;
    protected $_name = [
        'addonName' => 'AddonName',
        'bindResourceId' => 'BindResourceId',
        'environmentType' => 'EnvironmentType',
        'feePackage' => 'FeePackage',
        'filterRegionIds' => 'FilterRegionIds',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tagShrink' => 'Tag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonName) {
            $res['AddonName'] = $this->addonName;
        }

        if (null !== $this->bindResourceId) {
            $res['BindResourceId'] = $this->bindResourceId;
        }

        if (null !== $this->environmentType) {
            $res['EnvironmentType'] = $this->environmentType;
        }

        if (null !== $this->feePackage) {
            $res['FeePackage'] = $this->feePackage;
        }

        if (null !== $this->filterRegionIds) {
            $res['FilterRegionIds'] = $this->filterRegionIds;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tagShrink) {
            $res['Tag'] = $this->tagShrink;
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
        if (isset($map['AddonName'])) {
            $model->addonName = $map['AddonName'];
        }

        if (isset($map['BindResourceId'])) {
            $model->bindResourceId = $map['BindResourceId'];
        }

        if (isset($map['EnvironmentType'])) {
            $model->environmentType = $map['EnvironmentType'];
        }

        if (isset($map['FeePackage'])) {
            $model->feePackage = $map['FeePackage'];
        }

        if (isset($map['FilterRegionIds'])) {
            $model->filterRegionIds = $map['FilterRegionIds'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tag'])) {
            $model->tagShrink = $map['Tag'];
        }

        return $model;
    }
}
