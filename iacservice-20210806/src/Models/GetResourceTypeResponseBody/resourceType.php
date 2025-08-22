<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceTypeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceTypeResponseBody\resourceType\operations;

class resourceType extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var operations[]
     */
    public $operations;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productNameEn;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var string
     */
    public $resourceDetailPageUrl;

    /**
     * @var string
     */
    public $resourceListPageUrl;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusStartVersion;

    /**
     * @var string
     */
    public $subcategory;

    /**
     * @var bool
     */
    public $supportExported;

    /**
     * @var string
     */
    public $terraformProviderVersion;

    /**
     * @var string
     */
    public $terraformResourceType;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'description' => 'description',
        'operations' => 'operations',
        'product' => 'product',
        'productName' => 'productName',
        'productNameEn' => 'productNameEn',
        'properties' => 'properties',
        'resourceDetailPageUrl' => 'resourceDetailPageUrl',
        'resourceListPageUrl' => 'resourceListPageUrl',
        'status' => 'status',
        'statusStartVersion' => 'statusStartVersion',
        'subcategory' => 'subcategory',
        'supportExported' => 'supportExported',
        'terraformProviderVersion' => 'terraformProviderVersion',
        'terraformResourceType' => 'terraformResourceType',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->operations)) {
            Model::validateArray($this->operations);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->operations) {
            if (\is_array($this->operations)) {
                $res['operations'] = [];
                $n1 = 0;
                foreach ($this->operations as $item1) {
                    $res['operations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->product) {
            $res['product'] = $this->product;
        }

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }

        if (null !== $this->productNameEn) {
            $res['productNameEn'] = $this->productNameEn;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['properties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resourceDetailPageUrl) {
            $res['resourceDetailPageUrl'] = $this->resourceDetailPageUrl;
        }

        if (null !== $this->resourceListPageUrl) {
            $res['resourceListPageUrl'] = $this->resourceListPageUrl;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusStartVersion) {
            $res['statusStartVersion'] = $this->statusStartVersion;
        }

        if (null !== $this->subcategory) {
            $res['subcategory'] = $this->subcategory;
        }

        if (null !== $this->supportExported) {
            $res['supportExported'] = $this->supportExported;
        }

        if (null !== $this->terraformProviderVersion) {
            $res['terraformProviderVersion'] = $this->terraformProviderVersion;
        }

        if (null !== $this->terraformResourceType) {
            $res['terraformResourceType'] = $this->terraformResourceType;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['operations'])) {
            if (!empty($map['operations'])) {
                $model->operations = [];
                $n1 = 0;
                foreach ($map['operations'] as $item1) {
                    $model->operations[$n1] = operations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        if (isset($map['productNameEn'])) {
            $model->productNameEn = $map['productNameEn'];
        }

        if (isset($map['properties'])) {
            if (!empty($map['properties'])) {
                $model->properties = [];
                foreach ($map['properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        if (isset($map['resourceDetailPageUrl'])) {
            $model->resourceDetailPageUrl = $map['resourceDetailPageUrl'];
        }

        if (isset($map['resourceListPageUrl'])) {
            $model->resourceListPageUrl = $map['resourceListPageUrl'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusStartVersion'])) {
            $model->statusStartVersion = $map['statusStartVersion'];
        }

        if (isset($map['subcategory'])) {
            $model->subcategory = $map['subcategory'];
        }

        if (isset($map['supportExported'])) {
            $model->supportExported = $map['supportExported'];
        }

        if (isset($map['terraformProviderVersion'])) {
            $model->terraformProviderVersion = $map['terraformProviderVersion'];
        }

        if (isset($map['terraformResourceType'])) {
            $model->terraformResourceType = $map['terraformResourceType'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
