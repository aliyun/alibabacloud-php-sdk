<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentsRequest\tag;
use AlibabaCloud\Tea\Model;

class ListEnvironmentsRequest extends Model
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
     * @description The ID of the resource.
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
     * @description The payable resource plan. Valid values:
     *
     *   If the EnvironmentType parameter is set to CS, set the value to CS_Basic or CS_Pro. Default value: CS_Basic.
     *   Otherwise, leave the parameter empty.
     *
     * @example CS_Pro
     *
     * @var string
     */
    public $feePackage;

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
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'addonName'       => 'AddonName',
        'bindResourceId'  => 'BindResourceId',
        'environmentType' => 'EnvironmentType',
        'feePackage'      => 'FeePackage',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tag'             => 'Tag',
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
        if (null !== $this->feePackage) {
            $res['FeePackage'] = $this->feePackage;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEnvironmentsRequest
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
        if (isset($map['FeePackage'])) {
            $model->feePackage = $map['FeePackage'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
