<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\Tea\Model;

class UpdateStoreRequest extends Model
{
    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $comments;

    /**
     * @var string
     */
    public $groups;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var string
     */
    public $phone;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $storeId;

    /**
     * @var string
     */
    public $storeName;
    protected $_name = [
        'brand'     => 'Brand',
        'comments'  => 'Comments',
        'groups'    => 'Groups',
        'outId'     => 'OutId',
        'phone'     => 'Phone',
        'storeId'   => 'StoreId',
        'storeName' => 'StoreName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->groups) {
            $res['Groups'] = $this->groups;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStoreRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['Groups'])) {
            $model->groups = $map['Groups'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }

        return $model;
    }
}
