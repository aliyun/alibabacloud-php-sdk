<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsRequest\tag;

class DescribeReplicationJobsRequest extends Model
{
    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string[]
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $jobId;

    /**
     * @var int
     */
    public $jobType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

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
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string[]
     */
    public $sourceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'businessStatus' => 'BusinessStatus',
        'instanceId' => 'InstanceId',
        'jobId' => 'JobId',
        'jobType' => 'JobType',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'sourceId' => 'SourceId',
        'status' => 'Status',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->instanceId)) {
            Model::validateArray($this->instanceId);
        }
        if (\is_array($this->jobId)) {
            Model::validateArray($this->jobId);
        }
        if (\is_array($this->sourceId)) {
            Model::validateArray($this->sourceId);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }

        if (null !== $this->instanceId) {
            if (\is_array($this->instanceId)) {
                $res['InstanceId'] = [];
                $n1 = 0;
                foreach ($this->instanceId as $item1) {
                    $res['InstanceId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobId) {
            if (\is_array($this->jobId)) {
                $res['JobId'] = [];
                $n1 = 0;
                foreach ($this->jobId as $item1) {
                    $res['JobId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->sourceId) {
            if (\is_array($this->sourceId)) {
                $res['SourceId'] = [];
                $n1 = 0;
                foreach ($this->sourceId as $item1) {
                    $res['SourceId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }

        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = [];
                $n1 = 0;
                foreach ($map['InstanceId'] as $item1) {
                    $model->instanceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['JobId'])) {
            if (!empty($map['JobId'])) {
                $model->jobId = [];
                $n1 = 0;
                foreach ($map['JobId'] as $item1) {
                    $model->jobId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['SourceId'])) {
            if (!empty($map['SourceId'])) {
                $model->sourceId = [];
                $n1 = 0;
                foreach ($map['SourceId'] as $item1) {
                    $model->sourceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

        return $model;
    }
}
