<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class ListInstancesRequest extends Model
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
     * @var string[]
     */
    public $seriesCodes;

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
        'seriesCodes' => 'seriesCodes',
        'storageSecretKey' => 'storageSecretKey',
        'tags' => 'tags',
    ];

    public function validate()
    {
        if (\is_array($this->seriesCodes)) {
            Model::validateArray($this->seriesCodes);
        }
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

        if (null !== $this->seriesCodes) {
            if (\is_array($this->seriesCodes)) {
                $res['seriesCodes'] = [];
                $n1 = 0;
                foreach ($this->seriesCodes as $item1) {
                    $res['seriesCodes'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['seriesCodes'])) {
                $model->seriesCodes = [];
                $n1 = 0;
                foreach ($map['seriesCodes'] as $item1) {
                    $model->seriesCodes[$n1++] = $item1;
                }
            }
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
