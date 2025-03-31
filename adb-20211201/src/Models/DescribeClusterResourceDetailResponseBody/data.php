<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterResourceDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterResourceDetailResponseBody\data\resourceGroupList;

class data extends Model
{
    /**
     * @var string
     */
    public $computeResource;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $freeComputeResource;

    /**
     * @var resourceGroupList[]
     */
    public $resourceGroupList;

    /**
     * @var string
     */
    public $storageResource;
    protected $_name = [
        'computeResource' => 'ComputeResource',
        'DBClusterId' => 'DBClusterId',
        'freeComputeResource' => 'FreeComputeResource',
        'resourceGroupList' => 'ResourceGroupList',
        'storageResource' => 'StorageResource',
    ];

    public function validate()
    {
        if (\is_array($this->resourceGroupList)) {
            Model::validateArray($this->resourceGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = $this->computeResource;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->freeComputeResource) {
            $res['FreeComputeResource'] = $this->freeComputeResource;
        }

        if (null !== $this->resourceGroupList) {
            if (\is_array($this->resourceGroupList)) {
                $res['ResourceGroupList'] = [];
                $n1 = 0;
                foreach ($this->resourceGroupList as $item1) {
                    $res['ResourceGroupList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->storageResource) {
            $res['StorageResource'] = $this->storageResource;
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
        if (isset($map['ComputeResource'])) {
            $model->computeResource = $map['ComputeResource'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['FreeComputeResource'])) {
            $model->freeComputeResource = $map['FreeComputeResource'];
        }

        if (isset($map['ResourceGroupList'])) {
            if (!empty($map['ResourceGroupList'])) {
                $model->resourceGroupList = [];
                $n1 = 0;
                foreach ($map['ResourceGroupList'] as $item1) {
                    $model->resourceGroupList[$n1++] = resourceGroupList::fromMap($item1);
                }
            }
        }

        if (isset($map['StorageResource'])) {
            $model->storageResource = $map['StorageResource'];
        }

        return $model;
    }
}
