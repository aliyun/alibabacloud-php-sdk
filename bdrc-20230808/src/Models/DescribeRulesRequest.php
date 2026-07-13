<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Dara\Model;

class DescribeRulesRequest extends Model
{
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
    public $resourceCategoryId;

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
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceCategoryId' => 'ResourceCategoryId',
        'resourceOwnerIds' => 'ResourceOwnerIds',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType' => 'ResourceType',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->resourceCategoryId) {
            $res['ResourceCategoryId'] = $this->resourceCategoryId;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ResourceCategoryId'])) {
            $model->resourceCategoryId = $map['ResourceCategoryId'];
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

        return $model;
    }
}
