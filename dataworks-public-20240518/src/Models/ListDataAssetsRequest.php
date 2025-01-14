<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetsRequest\tags;
use AlibabaCloud\Tea\Model;

class ListDataAssetsRequest extends Model
{
    /**
     * @var string[]
     */
    public $dataAssetIds;

    /**
     * @example ACS::DataWorks::Task
     *
     * @var string
     */
    public $dataAssetType;

    /**
     * @example Prod
     *
     * @var string
     */
    public $envType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'dataAssetIds'  => 'DataAssetIds',
        'dataAssetType' => 'DataAssetType',
        'envType'       => 'EnvType',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'projectId'     => 'ProjectId',
        'tags'          => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataAssetIds) {
            $res['DataAssetIds'] = $this->dataAssetIds;
        }
        if (null !== $this->dataAssetType) {
            $res['DataAssetType'] = $this->dataAssetType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataAssetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataAssetIds'])) {
            if (!empty($map['DataAssetIds'])) {
                $model->dataAssetIds = $map['DataAssetIds'];
            }
        }
        if (isset($map['DataAssetType'])) {
            $model->dataAssetType = $map['DataAssetType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
