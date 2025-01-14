<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListDataAssetsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dataAssetIdsShrink;

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
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'dataAssetIdsShrink' => 'DataAssetIds',
        'dataAssetType'      => 'DataAssetType',
        'envType'            => 'EnvType',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'projectId'          => 'ProjectId',
        'tagsShrink'         => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataAssetIdsShrink) {
            $res['DataAssetIds'] = $this->dataAssetIdsShrink;
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
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataAssetsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataAssetIds'])) {
            $model->dataAssetIdsShrink = $map['DataAssetIds'];
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
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
