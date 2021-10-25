<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateFlowResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $childStatus;

    /**
     * @var string
     */
    public $applyUserId;

    /**
     * @var int
     */
    public $approveTime;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var int
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $oldData;

    /**
     * @var int
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $approveUserId;

    /**
     * @var string
     */
    public $newData;

    /**
     * @var string
     */
    public $businessKey;

    /**
     * @var string
     */
    public $reasonType;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'type'            => 'Type',
        'status'          => 'Status',
        'childStatus'     => 'ChildStatus',
        'applyUserId'     => 'ApplyUserId',
        'approveTime'     => 'ApproveTime',
        'flowId'          => 'FlowId',
        'extInfo'         => 'ExtInfo',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'oldData'         => 'OldData',
        'gmtCreateTime'   => 'GmtCreateTime',
        'approveUserId'   => 'ApproveUserId',
        'newData'         => 'NewData',
        'businessKey'     => 'BusinessKey',
        'reasonType'      => 'ReasonType',
        'tenantId'        => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->childStatus) {
            $res['ChildStatus'] = $this->childStatus;
        }
        if (null !== $this->applyUserId) {
            $res['ApplyUserId'] = $this->applyUserId;
        }
        if (null !== $this->approveTime) {
            $res['ApproveTime'] = $this->approveTime;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->oldData) {
            $res['OldData'] = $this->oldData;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->approveUserId) {
            $res['ApproveUserId'] = $this->approveUserId;
        }
        if (null !== $this->newData) {
            $res['NewData'] = $this->newData;
        }
        if (null !== $this->businessKey) {
            $res['BusinessKey'] = $this->businessKey;
        }
        if (null !== $this->reasonType) {
            $res['ReasonType'] = $this->reasonType;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ChildStatus'])) {
            $model->childStatus = $map['ChildStatus'];
        }
        if (isset($map['ApplyUserId'])) {
            $model->applyUserId = $map['ApplyUserId'];
        }
        if (isset($map['ApproveTime'])) {
            $model->approveTime = $map['ApproveTime'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['OldData'])) {
            $model->oldData = $map['OldData'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['ApproveUserId'])) {
            $model->approveUserId = $map['ApproveUserId'];
        }
        if (isset($map['NewData'])) {
            $model->newData = $map['NewData'];
        }
        if (isset($map['BusinessKey'])) {
            $model->businessKey = $map['BusinessKey'];
        }
        if (isset($map['ReasonType'])) {
            $model->reasonType = $map['ReasonType'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
