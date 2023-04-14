<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskItemsResponseBody\result;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @example zhangsan
     *
     * @var string
     */
    public $author;

    /**
     * @example 12_34
     *
     * @var string
     */
    public $categoryPath;

    /**
     * @example news
     *
     * @var string
     */
    public $channel;

    /**
     * @example 18
     *
     * @var string
     */
    public $duration;

    /**
     * @example 1612687809
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example 123
     *
     * @var string
     */
    public $itemId;

    /**
     * @example video
     *
     * @var string
     */
    public $itemType;

    /**
     * @example 1662346558
     *
     * @var string
     */
    public $lastModifyTime;

    /**
     * @example 1661931487
     *
     * @var string
     */
    public $pubTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @example test
     *
     * @var string
     */
    public $title;

    /**
     * @example 10
     *
     * @var string
     */
    public $weight;
    protected $_name = [
        'author'         => 'author',
        'categoryPath'   => 'categoryPath',
        'channel'        => 'channel',
        'duration'       => 'duration',
        'expireTime'     => 'expireTime',
        'itemId'         => 'itemId',
        'itemType'       => 'itemType',
        'lastModifyTime' => 'lastModifyTime',
        'pubTime'        => 'pubTime',
        'status'         => 'status',
        'title'          => 'title',
        'weight'         => 'weight',
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
        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->pubTime) {
            $res['pubTime'] = $this->pubTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
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
        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
        }
        if (isset($map['pubTime'])) {
            $model->pubTime = $map['pubTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
