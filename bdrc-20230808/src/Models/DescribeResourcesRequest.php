<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourcesRequest extends Model
{
    /**
     * @example LRS
     *
     * @var string
     */
    public $dataRedundancyType;

    /**
     * @example rule-000c***yc9
     *
     * @var string
     */
    public $failedRuleTemplate;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example cae**********699
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example i-0003***110
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example protectionScore
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example ASC
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @example ARCHIVE
     *
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'dataRedundancyType' => 'DataRedundancyType',
        'failedRuleTemplate' => 'FailedRuleTemplate',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'resourceId'         => 'ResourceId',
        'resourceType'       => 'ResourceType',
        'sortBy'             => 'SortBy',
        'sortOrder'          => 'SortOrder',
        'storageClass'       => 'StorageClass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataRedundancyType) {
            $res['DataRedundancyType'] = $this->dataRedundancyType;
        }
        if (null !== $this->failedRuleTemplate) {
            $res['FailedRuleTemplate'] = $this->failedRuleTemplate;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataRedundancyType'])) {
            $model->dataRedundancyType = $map['DataRedundancyType'];
        }
        if (isset($map['FailedRuleTemplate'])) {
            $model->failedRuleTemplate = $map['FailedRuleTemplate'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}
