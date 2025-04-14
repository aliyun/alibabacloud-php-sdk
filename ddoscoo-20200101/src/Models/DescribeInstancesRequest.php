<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstancesRequest\tag;

class DescribeInstancesRequest extends Model
{
    /**
     * @var int
     */
    public $edition;

    /**
     * @var int
     */
    public $enabled;

    /**
     * @var int
     */
    public $expireEndTime;

    /**
     * @var int
     */
    public $expireStartTime;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int[]
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'edition' => 'Edition',
        'enabled' => 'Enabled',
        'expireEndTime' => 'ExpireEndTime',
        'expireStartTime' => 'ExpireStartTime',
        'instanceIds' => 'InstanceIds',
        'ip' => 'Ip',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'remark' => 'Remark',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->expireEndTime) {
            $res['ExpireEndTime'] = $this->expireEndTime;
        }

        if (null !== $this->expireStartTime) {
            $res['ExpireStartTime'] = $this->expireStartTime;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            if (\is_array($this->status)) {
                $res['Status'] = [];
                $n1 = 0;
                foreach ($this->status as $item1) {
                    $res['Status'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['ExpireEndTime'])) {
            $model->expireEndTime = $map['ExpireEndTime'];
        }

        if (isset($map['ExpireStartTime'])) {
            $model->expireStartTime = $map['ExpireStartTime'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = [];
                $n1 = 0;
                foreach ($map['Status'] as $item1) {
                    $model->status[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
