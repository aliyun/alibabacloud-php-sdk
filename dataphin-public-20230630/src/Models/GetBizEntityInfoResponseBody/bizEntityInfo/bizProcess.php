<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizEntityInfoResponseBody\bizEntityInfo;

use AlibabaCloud\Dara\Model;

class bizProcess extends Model
{
    /**
     * @var string
     */
    public $approvalId;

    /**
     * @var string
     */
    public $approvalStatus;

    /**
     * @var int[]
     */
    public $bizEventEntityIdList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $hasDependent;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $lastModifier;

    /**
     * @var string
     */
    public $lastModifierName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $onlineStatus;

    /**
     * @var string
     */
    public $ownerName;

    /**
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
     * @var int
     */
    public $refFactTableCount;

    /**
     * @var string
     */
    public $status;

    /**
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

    public function validate()
    {
        if (\is_array($this->bizEventEntityIdList)) {
            Model::validateArray($this->bizEventEntityIdList);
        }
        if (\is_array($this->preBizProcessIdList)) {
            Model::validateArray($this->preBizProcessIdList);
        }
        if (\is_array($this->refBizEntityIdList)) {
            Model::validateArray($this->refBizEntityIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalId) {
            $res['ApprovalId'] = $this->approvalId;
        }

        if (null !== $this->approvalStatus) {
            $res['ApprovalStatus'] = $this->approvalStatus;
        }

        if (null !== $this->bizEventEntityIdList) {
            if (\is_array($this->bizEventEntityIdList)) {
                $res['BizEventEntityIdList'] = [];
                $n1 = 0;
                foreach ($this->bizEventEntityIdList as $item1) {
                    $res['BizEventEntityIdList'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->preBizProcessIdList)) {
                $res['PreBizProcessIdList'] = [];
                $n1 = 0;
                foreach ($this->preBizProcessIdList as $item1) {
                    $res['PreBizProcessIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->refBizEntityIdList) {
            if (\is_array($this->refBizEntityIdList)) {
                $res['RefBizEntityIdList'] = [];
                $n1 = 0;
                foreach ($this->refBizEntityIdList as $item1) {
                    $res['RefBizEntityIdList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->bizEventEntityIdList = [];
                $n1 = 0;
                foreach ($map['BizEventEntityIdList'] as $item1) {
                    $model->bizEventEntityIdList[$n1++] = $item1;
                }
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
                $model->preBizProcessIdList = [];
                $n1 = 0;
                foreach ($map['PreBizProcessIdList'] as $item1) {
                    $model->preBizProcessIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RefBizEntityIdList'])) {
            if (!empty($map['RefBizEntityIdList'])) {
                $model->refBizEntityIdList = [];
                $n1 = 0;
                foreach ($map['RefBizEntityIdList'] as $item1) {
                    $model->refBizEntityIdList[$n1++] = $item1;
                }
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
