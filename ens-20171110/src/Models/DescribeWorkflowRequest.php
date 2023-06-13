<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeWorkflowRequest extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $businessId;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $pageNum;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $workFlowId;

    /**
     * @var string
     */
    public $workFlowName;
    protected $_name = [
        'aliUid'       => 'AliUid',
        'businessId'   => 'BusinessId',
        'endDate'      => 'EndDate',
        'ensRegionId'  => 'EnsRegionId',
        'id'           => 'Id',
        'instanceId'   => 'InstanceId',
        'pageNum'      => 'PageNum',
        'pageSize'     => 'PageSize',
        'startDate'    => 'StartDate',
        'status'       => 'Status',
        'workFlowId'   => 'WorkFlowId',
        'workFlowName' => 'WorkFlowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->workFlowId) {
            $res['WorkFlowId'] = $this->workFlowId;
        }
        if (null !== $this->workFlowName) {
            $res['WorkFlowName'] = $this->workFlowName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWorkflowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WorkFlowId'])) {
            $model->workFlowId = $map['WorkFlowId'];
        }
        if (isset($map['WorkFlowName'])) {
            $model->workFlowName = $map['WorkFlowName'];
        }

        return $model;
    }
}
