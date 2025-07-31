<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServicePublishedApisResponseBody\pageResult;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServicePublishedApisResponseBody\pageResult\apiList\appInfoList;
use AlibabaCloud\Tea\Model;

class apiList extends Model
{
    /**
     * @example 1022
     *
     * @var int
     */
    public $apiId;

    /**
     * @example test
     *
     * @var string
     */
    public $apiName;

    /**
     * @example 1
     *
     * @var int
     */
    public $appCount;

    /**
     * @var appInfoList[]
     */
    public $appInfoList;

    /**
     * @example 1
     *
     * @var int
     */
    public $applyStatus;

    /**
     * @example 21
     *
     * @var int
     */
    public $callCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $createType;

    /**
     * @example 0 0 0/1 * * *
     *
     * @var string
     */
    public $customUpdateRate;

    /**
     * @example 2025-06-30 08:00:00
     *
     * @var string
     */
    public $deployTime;

    /**
     * @example test xx
     *
     * @var string
     */
    public $description;

    /**
     * @example 1
     *
     * @var int
     */
    public $executeMode;

    /**
     * @example 102131
     *
     * @var int
     */
    public $groupId;

    /**
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @example 1022
     *
     * @var int
     */
    public $logicUnitNo;

    /**
     * @example 1
     *
     * @var int
     */
    public $mode;

    /**
     * @example 30012011
     *
     * @var string
     */
    public $owner;

    /**
     * @example 张三
     *
     * @var string
     */
    public $ownerUserName;

    /**
     * @example 102101
     *
     * @var int
     */
    public $projectId;

    /**
     * @example test
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 1
     *
     * @var int
     */
    public $updateRate;

    /**
     * @example 2025-06-30 08:00:00
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'apiId' => 'ApiId',
        'apiName' => 'ApiName',
        'appCount' => 'AppCount',
        'appInfoList' => 'AppInfoList',
        'applyStatus' => 'ApplyStatus',
        'callCount' => 'CallCount',
        'createType' => 'CreateType',
        'customUpdateRate' => 'CustomUpdateRate',
        'deployTime' => 'DeployTime',
        'description' => 'Description',
        'executeMode' => 'ExecuteMode',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'logicUnitNo' => 'LogicUnitNo',
        'mode' => 'Mode',
        'owner' => 'Owner',
        'ownerUserName' => 'OwnerUserName',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'updateRate' => 'UpdateRate',
        'updateTime' => 'UpdateTime',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->appCount) {
            $res['AppCount'] = $this->appCount;
        }
        if (null !== $this->appInfoList) {
            $res['AppInfoList'] = [];
            if (null !== $this->appInfoList && \is_array($this->appInfoList)) {
                $n = 0;
                foreach ($this->appInfoList as $item) {
                    $res['AppInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->applyStatus) {
            $res['ApplyStatus'] = $this->applyStatus;
        }
        if (null !== $this->callCount) {
            $res['CallCount'] = $this->callCount;
        }
        if (null !== $this->createType) {
            $res['CreateType'] = $this->createType;
        }
        if (null !== $this->customUpdateRate) {
            $res['CustomUpdateRate'] = $this->customUpdateRate;
        }
        if (null !== $this->deployTime) {
            $res['DeployTime'] = $this->deployTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->executeMode) {
            $res['ExecuteMode'] = $this->executeMode;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->logicUnitNo) {
            $res['LogicUnitNo'] = $this->logicUnitNo;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->ownerUserName) {
            $res['OwnerUserName'] = $this->ownerUserName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->updateRate) {
            $res['UpdateRate'] = $this->updateRate;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['AppCount'])) {
            $model->appCount = $map['AppCount'];
        }
        if (isset($map['AppInfoList'])) {
            if (!empty($map['AppInfoList'])) {
                $model->appInfoList = [];
                $n = 0;
                foreach ($map['AppInfoList'] as $item) {
                    $model->appInfoList[$n++] = null !== $item ? appInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ApplyStatus'])) {
            $model->applyStatus = $map['ApplyStatus'];
        }
        if (isset($map['CallCount'])) {
            $model->callCount = $map['CallCount'];
        }
        if (isset($map['CreateType'])) {
            $model->createType = $map['CreateType'];
        }
        if (isset($map['CustomUpdateRate'])) {
            $model->customUpdateRate = $map['CustomUpdateRate'];
        }
        if (isset($map['DeployTime'])) {
            $model->deployTime = $map['DeployTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExecuteMode'])) {
            $model->executeMode = $map['ExecuteMode'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['LogicUnitNo'])) {
            $model->logicUnitNo = $map['LogicUnitNo'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['OwnerUserName'])) {
            $model->ownerUserName = $map['OwnerUserName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['UpdateRate'])) {
            $model->updateRate = $map['UpdateRate'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
