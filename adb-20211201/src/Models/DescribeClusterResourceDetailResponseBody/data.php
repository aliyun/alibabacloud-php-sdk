<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterResourceDetailResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterResourceDetailResponseBody\data\resourceGroupList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The amount of reserved computing resources. Unit: AnalyticDB compute units (ACUs). Valid values: 0 to 4096. The value must be in increments of 16 ACUs. Each ACU is equivalent to 1 core and 4 GB memory.
     *
     * @example 16ACU
     *
     * @var string
     */
    public $computeResource;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-adbxxxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The amount of idle reserved computing resources. Unit: ACUs. Valid values: 0 to 4096. The value must be in increments of 16 ACUs. Each ACU is equivalent to 1 core and 4 GB memory.
     *
     * @example 0ACU
     *
     * @var string
     */
    public $freeComputeResource;

    /**
     * @description The resource groups.
     *
     * @var resourceGroupList[]
     */
    public $resourceGroupList;

    /**
     * @description The amount of reserved storage resources. Unit: ACUs. Valid values: 0 to 2064. The value must be in increments of 24 ACUs. Each ACU is equivalent to 1 core and 4 GB memory.
     *
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
