<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceTypesResponseBody;

use AlibabaCloud\Dara\Model;

class resourceTypes extends Model
{
    /**
     * @var string
     */
    public $description;

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
     * @var string
     */
    public $supportTerraformer;

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
        'product' => 'product',
        'productName' => 'productName',
        'resourceDetailPageUrl' => 'resourceDetailPageUrl',
        'resourceListPageUrl' => 'resourceListPageUrl',
        'status' => 'status',
        'statusStartVersion' => 'statusStartVersion',
        'subcategory' => 'subcategory',
        'supportTerraformer' => 'supportTerraformer',
        'terraformProviderVersion' => 'terraformProviderVersion',
        'terraformResourceType' => 'terraformResourceType',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->product) {
            $res['product'] = $this->product;
        }

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
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

        if (null !== $this->supportTerraformer) {
            $res['supportTerraformer'] = $this->supportTerraformer;
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

        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
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

        if (isset($map['supportTerraformer'])) {
            $model->supportTerraformer = $map['supportTerraformer'];
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
