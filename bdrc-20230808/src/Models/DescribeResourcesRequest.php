<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Dara\Model;

class DescribeResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $dataRedundancyType;

    /**
     * @var string
     */
    public $failedRuleTemplate;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $resourceArn;

    /**
     * @var string
     */
    public $resourceCategoryId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int[]
     */
    public $resourceOwnerIds;

    /**
     * @var string
     */
    public $resourceRegionId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'dataRedundancyType' => 'DataRedundancyType',
        'failedRuleTemplate' => 'FailedRuleTemplate',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceArn' => 'ResourceArn',
        'resourceCategoryId' => 'ResourceCategoryId',
        'resourceId' => 'ResourceId',
        'resourceOwnerIds' => 'ResourceOwnerIds',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType' => 'ResourceType',
        'sortBy' => 'SortBy',
        'sortOrder' => 'SortOrder',
        'storageClass' => 'StorageClass',
    ];

    public function validate()
    {
        if (\is_array($this->resourceOwnerIds)) {
            Model::validateArray($this->resourceOwnerIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }

        if (null !== $this->resourceCategoryId) {
            $res['ResourceCategoryId'] = $this->resourceCategoryId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceOwnerIds) {
            if (\is_array($this->resourceOwnerIds)) {
                $res['ResourceOwnerIds'] = [];
                $n1 = 0;
                foreach ($this->resourceOwnerIds as $item1) {
                    $res['ResourceOwnerIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }

        if (isset($map['ResourceCategoryId'])) {
            $model->resourceCategoryId = $map['ResourceCategoryId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceOwnerIds'])) {
            if (!empty($map['ResourceOwnerIds'])) {
                $model->resourceOwnerIds = [];
                $n1 = 0;
                foreach ($map['ResourceOwnerIds'] as $item1) {
                    $model->resourceOwnerIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
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
