<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizEntitiesResponseBody\pageResult;

use AlibabaCloud\Dara\Model;

class bizEntityList extends Model
{
    /**
     * @var int[]
     */
    public $belongToBizEntityIdList;

    /**
     * @var int
     */
    public $bizUnitId;

    /**
     * @var int[]
     */
    public $childBizEntityIdList;

    /**
     * @var int
     */
    public $dataDomainId;

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
    public $hasChildBizEntity;

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
     * @var bool
     */
    public $levelSubBizObject;

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
    public $refBizEntityIdList;

    /**
     * @var int
     */
    public $refTableCount;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var int[]
     */
    public $suffixBizEntityIdList;

    /**
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

    public function validate()
    {
        if (\is_array($this->belongToBizEntityIdList)) {
            Model::validateArray($this->belongToBizEntityIdList);
        }
        if (\is_array($this->childBizEntityIdList)) {
            Model::validateArray($this->childBizEntityIdList);
        }
        if (\is_array($this->refBizEntityIdList)) {
            Model::validateArray($this->refBizEntityIdList);
        }
        if (\is_array($this->suffixBizEntityIdList)) {
            Model::validateArray($this->suffixBizEntityIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->belongToBizEntityIdList) {
            if (\is_array($this->belongToBizEntityIdList)) {
                $res['BelongToBizEntityIdList'] = [];
                $n1 = 0;
                foreach ($this->belongToBizEntityIdList as $item1) {
                    $res['BelongToBizEntityIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }

        if (null !== $this->childBizEntityIdList) {
            if (\is_array($this->childBizEntityIdList)) {
                $res['ChildBizEntityIdList'] = [];
                $n1 = 0;
                foreach ($this->childBizEntityIdList as $item1) {
                    $res['ChildBizEntityIdList'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->refBizEntityIdList)) {
                $res['RefBizEntityIdList'] = [];
                $n1 = 0;
                foreach ($this->refBizEntityIdList as $item1) {
                    $res['RefBizEntityIdList'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->suffixBizEntityIdList)) {
                $res['SuffixBizEntityIdList'] = [];
                $n1 = 0;
                foreach ($this->suffixBizEntityIdList as $item1) {
                    $res['SuffixBizEntityIdList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['BelongToBizEntityIdList'])) {
            if (!empty($map['BelongToBizEntityIdList'])) {
                $model->belongToBizEntityIdList = [];
                $n1 = 0;
                foreach ($map['BelongToBizEntityIdList'] as $item1) {
                    $model->belongToBizEntityIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }

        if (isset($map['ChildBizEntityIdList'])) {
            if (!empty($map['ChildBizEntityIdList'])) {
                $model->childBizEntityIdList = [];
                $n1 = 0;
                foreach ($map['ChildBizEntityIdList'] as $item1) {
                    $model->childBizEntityIdList[$n1++] = $item1;
                }
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
                $model->refBizEntityIdList = [];
                $n1 = 0;
                foreach ($map['RefBizEntityIdList'] as $item1) {
                    $model->refBizEntityIdList[$n1++] = $item1;
                }
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
                $model->suffixBizEntityIdList = [];
                $n1 = 0;
                foreach ($map['SuffixBizEntityIdList'] as $item1) {
                    $model->suffixBizEntityIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
