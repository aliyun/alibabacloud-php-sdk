<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsRequest\tag;

class ListServerGroupsRequest extends Model
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
    public $resourceGroupId;

    /**
     * @var string[]
     */
    public $serverGroupIds;

    /**
     * @var string[]
     */
    public $serverGroupNames;

    /**
     * @var string
     */
    public $serverGroupType;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceGroupId' => 'ResourceGroupId',
        'serverGroupIds' => 'ServerGroupIds',
        'serverGroupNames' => 'ServerGroupNames',
        'serverGroupType' => 'ServerGroupType',
        'tag' => 'Tag',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->serverGroupIds)) {
            Model::validateArray($this->serverGroupIds);
        }
        if (\is_array($this->serverGroupNames)) {
            Model::validateArray($this->serverGroupNames);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->serverGroupIds) {
            if (\is_array($this->serverGroupIds)) {
                $res['ServerGroupIds'] = [];
                $n1 = 0;
                foreach ($this->serverGroupIds as $item1) {
                    $res['ServerGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serverGroupNames) {
            if (\is_array($this->serverGroupNames)) {
                $res['ServerGroupNames'] = [];
                $n1 = 0;
                foreach ($this->serverGroupNames as $item1) {
                    $res['ServerGroupNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serverGroupType) {
            $res['ServerGroupType'] = $this->serverGroupType;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ServerGroupIds'])) {
            if (!empty($map['ServerGroupIds'])) {
                $model->serverGroupIds = [];
                $n1 = 0;
                foreach ($map['ServerGroupIds'] as $item1) {
                    $model->serverGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ServerGroupNames'])) {
            if (!empty($map['ServerGroupNames'])) {
                $model->serverGroupNames = [];
                $n1 = 0;
                foreach ($map['ServerGroupNames'] as $item1) {
                    $model->serverGroupNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ServerGroupType'])) {
            $model->serverGroupType = $map['ServerGroupType'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
