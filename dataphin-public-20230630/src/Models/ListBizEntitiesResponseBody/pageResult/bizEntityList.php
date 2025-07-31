<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizEntitiesResponseBody\pageResult;

use AlibabaCloud\Tea\Model;

class bizEntityList extends Model
{
    /**
     * @var int[]
     */
    public $belongToBizEntityIdList;

    /**
     * @example 6798087749072704
     *
     * @var int
     */
    public $bizUnitId;

    /**
     * @var int[]
     */
    public $childBizEntityIdList;

    /**
     * @example 20101011
     *
     * @var int
     */
    public $dataDomainId;

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
    public $hasChildBizEntity;

    /**
     * @example 12121111
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
     * @var bool
     */
    public $levelSubBizObject;

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
    public $refBizEntityIdList;

    /**
     * @example 1
     *
     * @var int
     */
    public $refTableCount;

    /**
     * @example SUBMITTED
     *
     * @var string
     */
    public $status;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $subType;

    /**
     * @var int[]
     */
    public $suffixBizEntityIdList;

    /**
     * @example BIZ_OBJECT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'belongToBizEntityIdList' => 'BelongToBizEntityIdList',
        'bizUnitId' => 'BizUnitId',
        'childBizEntityIdList' => 'ChildBizEntityIdList',
        'dataDomainId' => 'DataDomainId',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'hasChildBizEntity' => 'HasChildBizEntity',
        'id' => 'Id',
        'lastModifier' => 'LastModifier',
        'lastModifierName' => 'LastModifierName',
        'levelSubBizObject' => 'LevelSubBizObject',
        'name' => 'Name',
        'onlineStatus' => 'OnlineStatus',
        'ownerName' => 'OwnerName',
        'ownerUserId' => 'OwnerUserId',
        'refBizEntityIdList' => 'RefBizEntityIdList',
        'refTableCount' => 'RefTableCount',
        'status' => 'Status',
        'subType' => 'SubType',
        'suffixBizEntityIdList' => 'SuffixBizEntityIdList',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->belongToBizEntityIdList) {
            $res['BelongToBizEntityIdList'] = $this->belongToBizEntityIdList;
        }
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }
        if (null !== $this->childBizEntityIdList) {
            $res['ChildBizEntityIdList'] = $this->childBizEntityIdList;
        }
        if (null !== $this->dataDomainId) {
            $res['DataDomainId'] = $this->dataDomainId;
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
        if (null !== $this->hasChildBizEntity) {
            $res['HasChildBizEntity'] = $this->hasChildBizEntity;
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
        if (null !== $this->levelSubBizObject) {
            $res['LevelSubBizObject'] = $this->levelSubBizObject;
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
        if (null !== $this->refBizEntityIdList) {
            $res['RefBizEntityIdList'] = $this->refBizEntityIdList;
        }
        if (null !== $this->refTableCount) {
            $res['RefTableCount'] = $this->refTableCount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->suffixBizEntityIdList) {
            $res['SuffixBizEntityIdList'] = $this->suffixBizEntityIdList;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BelongToBizEntityIdList'])) {
            if (!empty($map['BelongToBizEntityIdList'])) {
                $model->belongToBizEntityIdList = $map['BelongToBizEntityIdList'];
            }
        }
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }
        if (isset($map['ChildBizEntityIdList'])) {
            if (!empty($map['ChildBizEntityIdList'])) {
                $model->childBizEntityIdList = $map['ChildBizEntityIdList'];
            }
        }
        if (isset($map['DataDomainId'])) {
            $model->dataDomainId = $map['DataDomainId'];
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
        if (isset($map['HasChildBizEntity'])) {
            $model->hasChildBizEntity = $map['HasChildBizEntity'];
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
        if (isset($map['LevelSubBizObject'])) {
            $model->levelSubBizObject = $map['LevelSubBizObject'];
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
        if (isset($map['RefBizEntityIdList'])) {
            if (!empty($map['RefBizEntityIdList'])) {
                $model->refBizEntityIdList = $map['RefBizEntityIdList'];
            }
        }
        if (isset($map['RefTableCount'])) {
            $model->refTableCount = $map['RefTableCount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['SuffixBizEntityIdList'])) {
            if (!empty($map['SuffixBizEntityIdList'])) {
                $model->suffixBizEntityIdList = $map['SuffixBizEntityIdList'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
