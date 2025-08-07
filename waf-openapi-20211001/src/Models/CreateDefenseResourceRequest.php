<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseResourceRequest\tag;

class CreateDefenseResourceRequest extends Model
{
    /**
     * @var string[]
     */
    public $customHeaders;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ownerUserId;

    /**
     * @var string
     */
    public $pattern;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @var string
     */
    public $resourceOrigin;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var int
     */
    public $xffStatus;
    protected $_name = [
        'customHeaders' => 'CustomHeaders',
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

    public function validate()
    {
        if (\is_array($this->customHeaders)) {
            Model::validateArray($this->customHeaders);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customHeaders) {
            if (\is_array($this->customHeaders)) {
                $res['CustomHeaders'] = [];
                $n1 = 0;
                foreach ($this->customHeaders as $item1) {
                    $res['CustomHeaders'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->xffStatus) {
            $res['XffStatus'] = $this->xffStatus;
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
        if (isset($map['CustomHeaders'])) {
            if (!empty($map['CustomHeaders'])) {
                $model->customHeaders = [];
                $n1 = 0;
                foreach ($map['CustomHeaders'] as $item1) {
                    $model->customHeaders[$n1] = $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['XffStatus'])) {
            $model->xffStatus = $map['XffStatus'];
        }

        return $model;
    }
}
