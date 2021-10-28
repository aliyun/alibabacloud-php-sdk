<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class ListPublicDatasetEntityItemsRequest extends Model
{
    /**
     * @description 数据集名称
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description 实体类型
     *
     * @var string
     */
    public $entityType;

    /**
     * @description 是否反转
     *
     * @var bool
     */
    public $isReversed;

    /**
     * @description 公共数据集所在区域
     *
     * @var string
     */
    public $location;

    /**
     * @description 分页数量
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 翻页Token用来标记当前开始读取的位置，置空表示从头开始
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 排序字段
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description 实体名中搜索的关键字
     *
     * @var string
     */
    public $search;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'entityType'  => 'EntityType',
        'isReversed'  => 'IsReversed',
        'location'    => 'Location',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'orderBy'     => 'OrderBy',
        'search'      => 'Search',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->isReversed) {
            $res['IsReversed'] = $this->isReversed;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPublicDatasetEntityItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['IsReversed'])) {
            $model->isReversed = $map['IsReversed'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }

        return $model;
    }
}
