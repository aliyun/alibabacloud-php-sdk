<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\UpdateDeliverableRequest;

use AlibabaCloud\Tea\Model;

class products extends Model
{
    /**
     * @var string
     */
    public $namespace;

    /**
     * @example catalog-demo
     *
     * @var string
     */
    public $productName;

    /**
     * @example own
     *
     * @var string
     */
    public $productType;

    /**
     * @example cf509b6f-fb35-428c-af8d-8c3feac4a868
     *
     * @var string
     */
    public $productUID;

    /**
     * @example 0.1.11
     *
     * @var string
     */
    public $productVersion;

    /**
     * @var string
     */
    public $productVersionSpecName;

    /**
     * @example a3ebabac-5249-47b7-9d9f-969e9b284f1c
     *
     * @var string
     */
    public $productVersionSpecUID;

    /**
     * @example 244e3507-cc73-4709-b547-a72f41245d9a
     *
     * @var string
     */
    public $productVersionUID;
    protected $_name = [
        'namespace'              => 'namespace',
        'productName'            => 'productName',
        'productType'            => 'productType',
        'productUID'             => 'productUID',
        'productVersion'         => 'productVersion',
        'productVersionSpecName' => 'productVersionSpecName',
        'productVersionSpecUID'  => 'productVersionSpecUID',
        'productVersionUID'      => 'productVersionUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }
        if (null !== $this->productType) {
            $res['productType'] = $this->productType;
        }
        if (null !== $this->productUID) {
            $res['productUID'] = $this->productUID;
        }
        if (null !== $this->productVersion) {
            $res['productVersion'] = $this->productVersion;
        }
        if (null !== $this->productVersionSpecName) {
            $res['productVersionSpecName'] = $this->productVersionSpecName;
        }
        if (null !== $this->productVersionSpecUID) {
            $res['productVersionSpecUID'] = $this->productVersionSpecUID;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return products
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }
        if (isset($map['productType'])) {
            $model->productType = $map['productType'];
        }
        if (isset($map['productUID'])) {
            $model->productUID = $map['productUID'];
        }
        if (isset($map['productVersion'])) {
            $model->productVersion = $map['productVersion'];
        }
        if (isset($map['productVersionSpecName'])) {
            $model->productVersionSpecName = $map['productVersionSpecName'];
        }
        if (isset($map['productVersionSpecUID'])) {
            $model->productVersionSpecUID = $map['productVersionSpecUID'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }

        return $model;
    }
}
