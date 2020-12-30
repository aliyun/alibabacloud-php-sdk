<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListItemsResponseBody\result;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $pubTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var string
     */
    public $author;

    /**
     * @var string
     */
    public $categoryPath;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $shopId;

    /**
     * @var string
     */
    public $brandId;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'status'       => 'Status',
        'pubTime'      => 'PubTime',
        'expireTime'   => 'ExpireTime',
        'itemType'     => 'ItemType',
        'author'       => 'Author',
        'categoryPath' => 'CategoryPath',
        'itemId'       => 'ItemId',
        'shopId'       => 'ShopId',
        'brandId'      => 'BrandId',
        'channel'      => 'Channel',
        'duration'     => 'Duration',
        'title'        => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->itemType) {
            $res['ItemType'] = $this->itemType;
        }
        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }
        if (null !== $this->categoryPath) {
            $res['CategoryPath'] = $this->categoryPath;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->shopId) {
            $res['ShopId'] = $this->shopId;
        }
        if (null !== $this->brandId) {
            $res['BrandId'] = $this->brandId;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ItemType'])) {
            $model->itemType = $map['ItemType'];
        }
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }
        if (isset($map['CategoryPath'])) {
            $model->categoryPath = $map['CategoryPath'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ShopId'])) {
            $model->shopId = $map['ShopId'];
        }
        if (isset($map['BrandId'])) {
            $model->brandId = $map['BrandId'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
