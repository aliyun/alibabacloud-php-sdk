<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterResourceDetailResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterResourceDetailResponseBody\data\resourceGroupList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 16ACU
     *
     * @var string
     */
    public $computeResource;

    /**
     * @example amv-adbxxxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 0ACU
     *
     * @var string
     */
    public $freeComputeResource;

    /**
     * @var resourceGroupList[]
     */
    public $resourceGroupList;

    /**
     * @example 24ACU
     *
     * @var string
     */
    public $storageResource;
    protected $_name = [
        'computeResource'     => 'ComputeResource',
        'DBClusterId'         => 'DBClusterId',
        'freeComputeResource' => 'FreeComputeResource',
        'resourceGroupList'   => 'ResourceGroupList',
        'storageResource'     => 'StorageResource',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['ResourceGroupList'] = [];
            if (null !== $this->resourceGroupList && \is_array($this->resourceGroupList)) {
                $n = 0;
                foreach ($this->resourceGroupList as $item) {
                    $res['ResourceGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->storageResource) {
            $res['StorageResource'] = $this->storageResource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n                        = 0;
                foreach ($map['ResourceGroupList'] as $item) {
                    $model->resourceGroupList[$n++] = null !== $item ? resourceGroupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StorageResource'])) {
            $model->storageResource = $map['StorageResource'];
        }

        return $model;
    }
}
