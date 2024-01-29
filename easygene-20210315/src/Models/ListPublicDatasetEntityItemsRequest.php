<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class ListPublicDatasetEntityItemsRequest extends Model
{
    /**
     * @example 西蒙斯基因组多样性计划
     *
     * @var string
     */
    public $datasetName;

    /**
     * @example sample
     *
     * @var string
     */
    public $entityType;

    /**
     * @example true
     *
     * @var bool
     */
    public $isReversed;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $location;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 0f2cc944-67db-4fb1-bb10-f136cda74bda
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example LastModified
     *
     * @var string
     */
    public $orderBy;

    /**
     * @example s1
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
