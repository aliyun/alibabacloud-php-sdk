<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListSceneItemsResponseBody\result;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @var string
     */
    public $author;

    /**
     * @var string
     */
    public $brandId;

    /**
     * @var string
     */
    public $categoryPath;

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
    public $expireTime;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var string
     */
    public $pubTime;

    /**
     * @var string
     */
    public $shopId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'author'       => 'author',
        'brandId'      => 'brandId',
        'categoryPath' => 'categoryPath',
        'channel'      => 'channel',
        'duration'     => 'duration',
        'expireTime'   => 'expireTime',
        'itemId'       => 'itemId',
        'itemType'     => 'itemType',
        'pubTime'      => 'pubTime',
        'shopId'       => 'shopId',
        'status'       => 'status',
        'title'        => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->author) {
            $res['author'] = $this->author;
        }
        if (null !== $this->brandId) {
            $res['brandId'] = $this->brandId;
        }
        if (null !== $this->categoryPath) {
            $res['categoryPath'] = $this->categoryPath;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }
        if (null !== $this->itemId) {
            $res['itemId'] = $this->itemId;
        }
        if (null !== $this->itemType) {
            $res['itemType'] = $this->itemType;
        }
        if (null !== $this->pubTime) {
            $res['pubTime'] = $this->pubTime;
        }
        if (null !== $this->shopId) {
            $res['shopId'] = $this->shopId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['author'])) {
            $model->author = $map['author'];
        }
        if (isset($map['brandId'])) {
            $model->brandId = $map['brandId'];
        }
        if (isset($map['categoryPath'])) {
            $model->categoryPath = $map['categoryPath'];
        }
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }
        if (isset($map['itemId'])) {
            $model->itemId = $map['itemId'];
        }
        if (isset($map['itemType'])) {
            $model->itemType = $map['itemType'];
        }
        if (isset($map['pubTime'])) {
            $model->pubTime = $map['pubTime'];
        }
        if (isset($map['shopId'])) {
            $model->shopId = $map['shopId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
