<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class ListInstancesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $filter;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $seriesCodesShrink;

    /**
     * @var string
     */
    public $storageSecretKey;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'filter' => 'filter',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'resourceGroupId' => 'resourceGroupId',
        'seriesCodesShrink' => 'seriesCodes',
        'storageSecretKey' => 'storageSecretKey',
        'tags' => 'tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filter) {
            $res['filter'] = $this->filter;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->seriesCodesShrink) {
            $res['seriesCodes'] = $this->seriesCodesShrink;
        }

        if (null !== $this->storageSecretKey) {
            $res['storageSecretKey'] = $this->storageSecretKey;
        }

        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
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
        if (isset($map['filter'])) {
            $model->filter = $map['filter'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['seriesCodes'])) {
            $model->seriesCodesShrink = $map['seriesCodes'];
        }

        if (isset($map['storageSecretKey'])) {
            $model->storageSecretKey = $map['storageSecretKey'];
        }

        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }

        return $model;
    }
}
