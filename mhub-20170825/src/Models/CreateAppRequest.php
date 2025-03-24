<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models;

use AlibabaCloud\Tea\Model;

class CreateAppRequest extends Model
{
    /**
     * @example com.test.ios
     *
     * @var string
     */
    public $bundleId;

    /**
     * @var string
     */
    public $encodedIcon;

    /**
     * @example 1
     *
     * @var string
     */
    public $industryId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @example com.test.android
     *
     * @var string
     */
    public $packageName;

    /**
     * @description This parameter is required.
     *
     * @example 123456
     *
     * @var string
     */
    public $productId;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'bundleId' => 'BundleId',
        'encodedIcon' => 'EncodedIcon',
        'industryId' => 'IndustryId',
        'name' => 'Name',
        'packageName' => 'PackageName',
        'productId' => 'ProductId',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->encodedIcon) {
            $res['EncodedIcon'] = $this->encodedIcon;
        }
        if (null !== $this->industryId) {
            $res['IndustryId'] = $this->industryId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['EncodedIcon'])) {
            $model->encodedIcon = $map['EncodedIcon'];
        }
        if (isset($map['IndustryId'])) {
            $model->industryId = $map['IndustryId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
