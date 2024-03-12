<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListEnvironmentsShrinkRequest extends Model
{
    /**
     * @description The add-on name. You must specify at least one of the AddonName and EnvironmentType parameters.
     *
     * @example trace-java
     *
     * @var string
     */
    public $addonName;

    /**
     * @description 绑定的资源ID。
     *
     * @example cff30f0d67d7542dfb05bd114b4b1d7af
     *
     * @var string
     */
    public $bindResourceId;

    /**
     * @description The environment type. You must specify at least one of the AddonName and EnvironmentType parameters.
     *
     * Valid values:
     *
     *   CS
     *
     * <!-- -->
     *
     *   ECS
     *
     * <!-- -->
     *
     *   Cloud
     *
     * <!-- -->
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
     * @description The tags.
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
