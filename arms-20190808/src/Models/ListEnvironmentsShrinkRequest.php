<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListEnvironmentsShrinkRequest extends Model
{
    /**
     * @description Name of Addon.
     *
     * @example trace-java
     *
     * @var string
     */
    public $addonName;

    /**
     * @var string
     */
    public $bindResourceId;

    /**
     * @description Environment type, AddonName or EnvironmentType must be at least one.
     *
     * @example CS
     *
     * @var string
     */
    public $environmentType;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzfurdatohtka
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Resource tag list.
     *
     * @var string
     */
    public $tagShrink;
    protected $_name = [
        'addonName'       => 'AddonName',
        'bindResourceId'  => 'BindResourceId',
        'environmentType' => 'EnvironmentType',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tagShrink'       => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListEnvironmentsShrinkRequest
     */
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
