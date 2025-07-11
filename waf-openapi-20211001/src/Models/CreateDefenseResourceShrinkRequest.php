<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseResourceShrinkRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDefenseResourceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $customHeadersShrink;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example {\\"domain\\": \\"zhhclb4test096-05111.test.com\\"}
     *
     * @var string
     */
    public $detail;

    /**
     * @description This parameter is required.
     *
     * @example waf_v3prepaid_public_cn-4xl*******
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 123221XXX
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @description This parameter is required.
     *
     * @example domain
     *
     * @var string
     */
    public $pattern;

    /**
     * @description This parameter is required.
     *
     * @example ecs
     *
     * @var string
     */
    public $product;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example abctest.com
     *
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description This parameter is required.
     *
     * @example custom
     *
     * @var string
     */
    public $resourceOrigin;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @example 0
     *
     * @var int
     */
    public $xffStatus;
    protected $_name = [
        'customHeadersShrink' => 'CustomHeaders',
        'description' => 'Description',
        'detail' => 'Detail',
        'instanceId' => 'InstanceId',
        'ownerUserId' => 'OwnerUserId',
        'pattern' => 'Pattern',
        'product' => 'Product',
        'regionId' => 'RegionId',
        'resource' => 'Resource',
        'resourceGroup' => 'ResourceGroup',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'resourceOrigin' => 'ResourceOrigin',
        'tag' => 'Tag',
        'xffStatus' => 'XffStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customHeadersShrink) {
            $res['CustomHeaders'] = $this->customHeadersShrink;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->resourceOrigin) {
            $res['ResourceOrigin'] = $this->resourceOrigin;
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
        if (null !== $this->xffStatus) {
            $res['XffStatus'] = $this->xffStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDefenseResourceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomHeaders'])) {
            $model->customHeadersShrink = $map['CustomHeaders'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['ResourceOrigin'])) {
            $model->resourceOrigin = $map['ResourceOrigin'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['XffStatus'])) {
            $model->xffStatus = $map['XffStatus'];
        }

        return $model;
    }
}
