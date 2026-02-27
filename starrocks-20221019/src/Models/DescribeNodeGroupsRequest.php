<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeNodeGroupsRequest\tags;

class DescribeNodeGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

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
    public $componentType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $nodeGroupIds;

    /**
     * @var string
     */
    public $nodeGroupName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'componentType' => 'componentType',
        'instanceId' => 'instanceId',
        'nodeGroupIds' => 'nodeGroupIds',
        'nodeGroupName' => 'nodeGroupName',
        'status' => 'status',
        'tags' => 'tags',
    ];

    public function validate()
    {
        if (\is_array($this->nodeGroupIds)) {
            Model::validateArray($this->nodeGroupIds);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->componentType) {
            $res['componentType'] = $this->componentType;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->nodeGroupIds) {
            if (\is_array($this->nodeGroupIds)) {
                $res['nodeGroupIds'] = [];
                $n1 = 0;
                foreach ($this->nodeGroupIds as $item1) {
                    $res['nodeGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeGroupName) {
            $res['nodeGroupName'] = $this->nodeGroupName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['componentType'])) {
            $model->componentType = $map['componentType'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['nodeGroupIds'])) {
            if (!empty($map['nodeGroupIds'])) {
                $model->nodeGroupIds = [];
                $n1 = 0;
                foreach ($map['nodeGroupIds'] as $item1) {
                    $model->nodeGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['nodeGroupName'])) {
            $model->nodeGroupName = $map['nodeGroupName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
