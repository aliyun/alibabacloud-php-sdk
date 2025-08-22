<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class ListResourceTypesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subcategory;

    /**
     * @var bool
     */
    public $supportTerraformer;

    /**
     * @var string
     */
    public $terraformProviderVersion;

    /**
     * @var string
     */
    public $terraformResourceTypesShrink;
    protected $_name = [
        'acceptLanguage' => 'acceptLanguage',
        'keyword' => 'keyword',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'product' => 'product',
        'sort' => 'sort',
        'status' => 'status',
        'subcategory' => 'subcategory',
        'supportTerraformer' => 'supportTerraformer',
        'terraformProviderVersion' => 'terraformProviderVersion',
        'terraformResourceTypesShrink' => 'terraformResourceTypes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['acceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->product) {
            $res['product'] = $this->product;
        }

        if (null !== $this->sort) {
            $res['sort'] = $this->sort;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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

        if (null !== $this->terraformResourceTypesShrink) {
            $res['terraformResourceTypes'] = $this->terraformResourceTypesShrink;
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
        if (isset($map['acceptLanguage'])) {
            $model->acceptLanguage = $map['acceptLanguage'];
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        if (isset($map['sort'])) {
            $model->sort = $map['sort'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
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

        if (isset($map['terraformResourceTypes'])) {
            $model->terraformResourceTypesShrink = $map['terraformResourceTypes'];
        }

        return $model;
    }
}
