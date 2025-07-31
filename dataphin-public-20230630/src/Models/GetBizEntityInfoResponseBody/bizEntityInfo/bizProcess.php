<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizEntityInfoResponseBody\bizEntityInfo;

use AlibabaCloud\Tea\Model;

class bizProcess extends Model
{
    /**
     * @example 221323121212
     *
     * @var string
     */
    public $approvalId;

    /**
     * @example APPROVING
     *
     * @var string
     */
    public $approvalStatus;

    /**
     * @var int[]
     */
    public $bizEventEntityIdList;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 业务活动测试
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 2024-10-10 10:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-10-10 10:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $hasDependent;

    /**
     * @example 1011
     *
     * @var int
     */
    public $id;

    /**
     * @example 30010010
     *
     * @var string
     */
    public $lastModifier;

    /**
     * @example 张三
     *
     * @var string
     */
    public $lastModifierName;

    /**
     * @example create_process_code_name
     *
     * @var string
     */
    public $name;

    /**
     * @example SUBMITTED
     *
     * @var string
     */
    public $onlineStatus;

    /**
     * @example 张三
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example 30010010
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @var int[]
     */
    public $preBizProcessIdList;

    /**
     * @var int[]
     */
    public $refBizEntityIdList;

    /**
     * @example 1
     *
     * @var int
     */
    public $refFactTableCount;

    /**
     * @example SUBMITTED
     *
     * @var string
     */
    public $status;

    /**
     * @example BIZ_EVENT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'approvalId' => 'ApprovalId',
        'approvalStatus' => 'ApprovalStatus',
        'bizEventEntityIdList' => 'BizEventEntityIdList',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'hasDependent' => 'HasDependent',
        'id' => 'Id',
        'lastModifier' => 'LastModifier',
        'lastModifierName' => 'LastModifierName',
        'name' => 'Name',
        'onlineStatus' => 'OnlineStatus',
        'ownerName' => 'OwnerName',
        'ownerUserId' => 'OwnerUserId',
        'preBizProcessIdList' => 'PreBizProcessIdList',
        'refBizEntityIdList' => 'RefBizEntityIdList',
        'refFactTableCount' => 'RefFactTableCount',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvalId) {
            $res['ApprovalId'] = $this->approvalId;
        }
        if (null !== $this->approvalStatus) {
            $res['ApprovalStatus'] = $this->approvalStatus;
        }
        if (null !== $this->bizEventEntityIdList) {
            $res['BizEventEntityIdList'] = $this->bizEventEntityIdList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hasDependent) {
            $res['HasDependent'] = $this->hasDependent;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastModifier) {
            $res['LastModifier'] = $this->lastModifier;
        }
        if (null !== $this->lastModifierName) {
            $res['LastModifierName'] = $this->lastModifierName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->onlineStatus) {
            $res['OnlineStatus'] = $this->onlineStatus;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->preBizProcessIdList) {
            $res['PreBizProcessIdList'] = $this->preBizProcessIdList;
        }
        if (null !== $this->refBizEntityIdList) {
            $res['RefBizEntityIdList'] = $this->refBizEntityIdList;
        }
        if (null !== $this->refFactTableCount) {
            $res['RefFactTableCount'] = $this->refFactTableCount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizProcess
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovalId'])) {
            $model->approvalId = $map['ApprovalId'];
        }
        if (isset($map['ApprovalStatus'])) {
            $model->approvalStatus = $map['ApprovalStatus'];
        }
        if (isset($map['BizEventEntityIdList'])) {
            if (!empty($map['BizEventEntityIdList'])) {
                $model->bizEventEntityIdList = $map['BizEventEntityIdList'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HasDependent'])) {
            $model->hasDependent = $map['HasDependent'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastModifier'])) {
            $model->lastModifier = $map['LastModifier'];
        }
        if (isset($map['LastModifierName'])) {
            $model->lastModifierName = $map['LastModifierName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OnlineStatus'])) {
            $model->onlineStatus = $map['OnlineStatus'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['PreBizProcessIdList'])) {
            if (!empty($map['PreBizProcessIdList'])) {
                $model->preBizProcessIdList = $map['PreBizProcessIdList'];
            }
        }
        if (isset($map['RefBizEntityIdList'])) {
            if (!empty($map['RefBizEntityIdList'])) {
                $model->refBizEntityIdList = $map['RefBizEntityIdList'];
            }
        }
        if (isset($map['RefFactTableCount'])) {
            $model->refFactTableCount = $map['RefFactTableCount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
