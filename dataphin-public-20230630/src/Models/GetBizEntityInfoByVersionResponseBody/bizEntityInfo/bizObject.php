<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizEntityInfoByVersionResponseBody\bizEntityInfo;

use AlibabaCloud\Tea\Model;

class bizObject extends Model
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
    public $childBizEntityIdList;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example create_object_name
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
     * @example create_object_code_name
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
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
     * @example 116306
     *
     * @var int
     */
    public $parentId;

    /**
     * @var int[]
     */
    public $refBizEntityIdList;

    /**
     * @example 1
     *
     * @var int
     */
    public $refDimTableCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $refSummaryTableCount;

    /**
     * @example 100
     *
     * @var string
     */
    public $status;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'approvalId'           => 'ApprovalId',
        'approvalStatus'       => 'ApprovalStatus',
        'childBizEntityIdList' => 'ChildBizEntityIdList',
        'description'          => 'Description',
        'displayName'          => 'DisplayName',
        'gmtCreate'            => 'GmtCreate',
        'gmtModified'          => 'GmtModified',
        'id'                   => 'Id',
        'lastModifier'         => 'LastModifier',
        'lastModifierName'     => 'LastModifierName',
        'name'                 => 'Name',
        'onlineStatus'         => 'OnlineStatus',
        'ownerName'            => 'OwnerName',
        'ownerUserId'          => 'OwnerUserId',
        'parentId'             => 'ParentId',
        'refBizEntityIdList'   => 'RefBizEntityIdList',
        'refDimTableCount'     => 'RefDimTableCount',
        'refSummaryTableCount' => 'RefSummaryTableCount',
        'status'               => 'Status',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvalId) {
            $res['ApprovalId'] = $this->approvalId;
        }
        if (null !== $this->approvalStatus) {
            $res['ApprovalStatus'] = $this->approvalStatus;
        }
        if (null !== $this->childBizEntityIdList) {
            $res['ChildBizEntityIdList'] = $this->childBizEntityIdList;
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
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->refBizEntityIdList) {
            $res['RefBizEntityIdList'] = $this->refBizEntityIdList;
        }
        if (null !== $this->refDimTableCount) {
            $res['RefDimTableCount'] = $this->refDimTableCount;
        }
        if (null !== $this->refSummaryTableCount) {
            $res['RefSummaryTableCount'] = $this->refSummaryTableCount;
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
     * @return bizObject
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
        if (isset($map['ChildBizEntityIdList'])) {
            if (!empty($map['ChildBizEntityIdList'])) {
                $model->childBizEntityIdList = $map['ChildBizEntityIdList'];
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
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['RefBizEntityIdList'])) {
            if (!empty($map['RefBizEntityIdList'])) {
                $model->refBizEntityIdList = $map['RefBizEntityIdList'];
            }
        }
        if (isset($map['RefDimTableCount'])) {
            $model->refDimTableCount = $map['RefDimTableCount'];
        }
        if (isset($map['RefSummaryTableCount'])) {
            $model->refSummaryTableCount = $map['RefSummaryTableCount'];
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
