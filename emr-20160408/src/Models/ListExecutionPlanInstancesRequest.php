<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ListExecutionPlanInstancesRequest extends Model
{
    /**
     * @var string[]
     */
    public $executionPlanIdList;

    /**
     * @var bool
     */
    public $isDesc;

    /**
     * @var bool
     */
    public $onlyLastInstance;

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
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string[]
     */
    public $statusList;
    protected $_name = [
        'executionPlanIdList' => 'ExecutionPlanIdList',
        'isDesc'              => 'IsDesc',
        'onlyLastInstance'    => 'OnlyLastInstance',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'regionId'            => 'RegionId',
        'resourceOwnerId'     => 'ResourceOwnerId',
        'statusList'          => 'StatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionPlanIdList) {
            $res['ExecutionPlanIdList'] = $this->executionPlanIdList;
        }
        if (null !== $this->isDesc) {
            $res['IsDesc'] = $this->isDesc;
        }
        if (null !== $this->onlyLastInstance) {
            $res['OnlyLastInstance'] = $this->onlyLastInstance;
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
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExecutionPlanInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionPlanIdList'])) {
            if (!empty($map['ExecutionPlanIdList'])) {
                $model->executionPlanIdList = $map['ExecutionPlanIdList'];
            }
        }
        if (isset($map['IsDesc'])) {
            $model->isDesc = $map['IsDesc'];
        }
        if (isset($map['OnlyLastInstance'])) {
            $model->onlyLastInstance = $map['OnlyLastInstance'];
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
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }

        return $model;
    }
}
