<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClustersRequest\tag;
use AlibabaCloud\Tea\Model;

class ListClustersRequest extends Model
{
    /**
     * @var string[]
     */
    public $clusterTypeList;

    /**
     * @var string
     */
    public $createType;

    /**
     * @var bool
     */
    public $defaultStatus;

    /**
     * @var string
     */
    public $depositType;

    /**
     * @var string[]
     */
    public $expiredTagList;

    /**
     * @var bool
     */
    public $isDesc;

    /**
     * @var string
     */
    public $machineType;

    /**
     * @var string
     */
    public $name;

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
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clusterTypeList' => 'ClusterTypeList',
        'createType'      => 'CreateType',
        'defaultStatus'   => 'DefaultStatus',
        'depositType'     => 'DepositType',
        'expiredTagList'  => 'ExpiredTagList',
        'isDesc'          => 'IsDesc',
        'machineType'     => 'MachineType',
        'name'            => 'Name',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'statusList'      => 'StatusList',
        'tag'             => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterTypeList) {
            $res['ClusterTypeList'] = $this->clusterTypeList;
        }
        if (null !== $this->createType) {
            $res['CreateType'] = $this->createType;
        }
        if (null !== $this->defaultStatus) {
            $res['DefaultStatus'] = $this->defaultStatus;
        }
        if (null !== $this->depositType) {
            $res['DepositType'] = $this->depositType;
        }
        if (null !== $this->expiredTagList) {
            $res['ExpiredTagList'] = $this->expiredTagList;
        }
        if (null !== $this->isDesc) {
            $res['IsDesc'] = $this->isDesc;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClustersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterTypeList'])) {
            if (!empty($map['ClusterTypeList'])) {
                $model->clusterTypeList = $map['ClusterTypeList'];
            }
        }
        if (isset($map['CreateType'])) {
            $model->createType = $map['CreateType'];
        }
        if (isset($map['DefaultStatus'])) {
            $model->defaultStatus = $map['DefaultStatus'];
        }
        if (isset($map['DepositType'])) {
            $model->depositType = $map['DepositType'];
        }
        if (isset($map['ExpiredTagList'])) {
            if (!empty($map['ExpiredTagList'])) {
                $model->expiredTagList = $map['ExpiredTagList'];
            }
        }
        if (isset($map['IsDesc'])) {
            $model->isDesc = $map['IsDesc'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
