<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models\ListProductsResponseBody\productInfos;

use AlibabaCloud\Tea\Model;

class productInfo extends Model
{
    /**
     * @example 2020-12-16T06:25:52Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $encodedIcon;

    /**
     * @example 1
     *
     * @var int
     */
    public $industryId;

    /**
     * @var string
     */
    public $name;

    /**
     * @example iOS
     *
     * @var string
     */
    public $platforms;

    /**
     * @example 1234
     *
     * @var int
     */
    public $productId;

    /**
     * @example false
     *
     * @var bool
     */
    public $readonly;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'encodedIcon' => 'EncodedIcon',
        'industryId' => 'IndustryId',
        'name' => 'Name',
        'platforms' => 'Platforms',
        'productId' => 'ProductId',
        'readonly' => 'Readonly',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->platforms) {
            $res['Platforms'] = $this->platforms;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->readonly) {
            $res['Readonly'] = $this->readonly;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['Platforms'])) {
            $model->platforms = $map['Platforms'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Readonly'])) {
            $model->readonly = $map['Readonly'];
        }

        return $model;
    }
}
