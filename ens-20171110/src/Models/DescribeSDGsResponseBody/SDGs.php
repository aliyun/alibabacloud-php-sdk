<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGsResponseBody\SDGs\avaliableRegionIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGsResponseBody\SDGs\deployedInstanceIds;

class SDGs extends Model
{
    /**
     * @var avaliableRegionIds[]
     */
    public $avaliableRegionIds;

    /**
     * @var string
     */
    public $billingCycle;

    /**
     * @var string
     */
    public $billingType;

    /**
     * @var string
     */
    public $creationDiskType;

    /**
     * @var string
     */
    public $creationInstanceId;

    /**
     * @var string
     */
    public $creationRegionId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var deployedInstanceIds[]
     */
    public $deployedInstanceIds;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $parentSDGId;

    /**
     * @var int
     */
    public $performanceLevel;

    /**
     * @var string
     */
    public $SDGId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'avaliableRegionIds' => 'AvaliableRegionIds',
        'billingCycle' => 'BillingCycle',
        'billingType' => 'BillingType',
        'creationDiskType' => 'CreationDiskType',
        'creationInstanceId' => 'CreationInstanceId',
        'creationRegionId' => 'CreationRegionId',
        'creationTime' => 'CreationTime',
        'deployedInstanceIds' => 'DeployedInstanceIds',
        'description' => 'Description',
        'parentSDGId' => 'ParentSDGId',
        'performanceLevel' => 'PerformanceLevel',
        'SDGId' => 'SDGId',
        'size' => 'Size',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->avaliableRegionIds)) {
            Model::validateArray($this->avaliableRegionIds);
        }
        if (\is_array($this->deployedInstanceIds)) {
            Model::validateArray($this->deployedInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avaliableRegionIds) {
            if (\is_array($this->avaliableRegionIds)) {
                $res['AvaliableRegionIds'] = [];
                $n1 = 0;
                foreach ($this->avaliableRegionIds as $item1) {
                    $res['AvaliableRegionIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }

        if (null !== $this->billingType) {
            $res['BillingType'] = $this->billingType;
        }

        if (null !== $this->creationDiskType) {
            $res['CreationDiskType'] = $this->creationDiskType;
        }

        if (null !== $this->creationInstanceId) {
            $res['CreationInstanceId'] = $this->creationInstanceId;
        }

        if (null !== $this->creationRegionId) {
            $res['CreationRegionId'] = $this->creationRegionId;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->deployedInstanceIds) {
            if (\is_array($this->deployedInstanceIds)) {
                $res['DeployedInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->deployedInstanceIds as $item1) {
                    $res['DeployedInstanceIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->parentSDGId) {
            $res['ParentSDGId'] = $this->parentSDGId;
        }

        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }

        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AvaliableRegionIds'])) {
            if (!empty($map['AvaliableRegionIds'])) {
                $model->avaliableRegionIds = [];
                $n1 = 0;
                foreach ($map['AvaliableRegionIds'] as $item1) {
                    $model->avaliableRegionIds[$n1] = avaliableRegionIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }

        if (isset($map['BillingType'])) {
            $model->billingType = $map['BillingType'];
        }

        if (isset($map['CreationDiskType'])) {
            $model->creationDiskType = $map['CreationDiskType'];
        }

        if (isset($map['CreationInstanceId'])) {
            $model->creationInstanceId = $map['CreationInstanceId'];
        }

        if (isset($map['CreationRegionId'])) {
            $model->creationRegionId = $map['CreationRegionId'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DeployedInstanceIds'])) {
            if (!empty($map['DeployedInstanceIds'])) {
                $model->deployedInstanceIds = [];
                $n1 = 0;
                foreach ($map['DeployedInstanceIds'] as $item1) {
                    $model->deployedInstanceIds[$n1] = deployedInstanceIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ParentSDGId'])) {
            $model->parentSDGId = $map['ParentSDGId'];
        }

        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }

        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
