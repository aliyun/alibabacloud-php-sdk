<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class CreateProductRequest extends Model
{
    /**
     * @var string[]
     */
    public $categories;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example 796f9044-8684-4de5-9b12-xxxxxxxxxxxx
     *
     * @var string
     */
    public $foundationVersionUID;

    /**
     * @example product-name
     *
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var bool
     */
    public $withoutProductVersion;
    protected $_name = [
        'categories'            => 'categories',
        'description'           => 'description',
        'displayName'           => 'displayName',
        'foundationVersionUID'  => 'foundationVersionUID',
        'productName'           => 'productName',
        'vendor'                => 'vendor',
        'withoutProductVersion' => 'withoutProductVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['categories'] = $this->categories;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->foundationVersionUID) {
            $res['foundationVersionUID'] = $this->foundationVersionUID;
        }
        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }
        if (null !== $this->vendor) {
            $res['vendor'] = $this->vendor;
        }
        if (null !== $this->withoutProductVersion) {
            $res['withoutProductVersion'] = $this->withoutProductVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['categories'])) {
            if (!empty($map['categories'])) {
                $model->categories = $map['categories'];
            }
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['foundationVersionUID'])) {
            $model->foundationVersionUID = $map['foundationVersionUID'];
        }
        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }
        if (isset($map['vendor'])) {
            $model->vendor = $map['vendor'];
        }
        if (isset($map['withoutProductVersion'])) {
            $model->withoutProductVersion = $map['withoutProductVersion'];
        }

        return $model;
    }
}
