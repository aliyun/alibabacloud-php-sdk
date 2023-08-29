<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeNebulaTasksResponseBody\listMcubeNebulaTaskResult;

use AlibabaCloud\Tea\Model;

class nebulaTaskInfo extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $gmtModifiedStr;

    /**
     * @var string
     */
    public $greyConfigInfo;

    /**
     * @var string
     */
    public $greyEndtime;

    /**
     * @var string
     */
    public $greyEndtimeData;

    /**
     * @var string
     */
    public $greyEndtimeStr;

    /**
     * @var int
     */
    public $greyNum;

    /**
     * @var string
     */
    public $greyUrl;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var int
     */
    public $packageId;

    /**
     * @var int
     */
    public $percent;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productVersion;

    /**
     * @var int
     */
    public $publishMode;

    /**
     * @var int
     */
    public $publishType;

    /**
     * @var string
     */
    public $releaseVersion;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $syncResult;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $taskType;

    /**
     * @var int
     */
    public $taskVersion;

    /**
     * @var int
     */
    public $upgradeNoticeNum;

    /**
     * @var string
     */
    public $upgradeProgress;

    /**
     * @var string
     */
    public $whitelistIds;
    protected $_name = [
        'appCode'          => 'AppCode',
        'bizType'          => 'BizType',
        'creator'          => 'Creator',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'gmtModifiedStr'   => 'GmtModifiedStr',
        'greyConfigInfo'   => 'GreyConfigInfo',
        'greyEndtime'      => 'GreyEndtime',
        'greyEndtimeData'  => 'GreyEndtimeData',
        'greyEndtimeStr'   => 'GreyEndtimeStr',
        'greyNum'          => 'GreyNum',
        'greyUrl'          => 'GreyUrl',
        'id'               => 'Id',
        'memo'             => 'Memo',
        'modifier'         => 'Modifier',
        'packageId'        => 'PackageId',
        'percent'          => 'Percent',
        'platform'         => 'Platform',
        'productId'        => 'ProductId',
        'productVersion'   => 'ProductVersion',
        'publishMode'      => 'PublishMode',
        'publishType'      => 'PublishType',
        'releaseVersion'   => 'ReleaseVersion',
        'status'           => 'Status',
        'syncResult'       => 'SyncResult',
        'taskName'         => 'TaskName',
        'taskStatus'       => 'TaskStatus',
        'taskType'         => 'TaskType',
        'taskVersion'      => 'TaskVersion',
        'upgradeNoticeNum' => 'UpgradeNoticeNum',
        'upgradeProgress'  => 'UpgradeProgress',
        'whitelistIds'     => 'WhitelistIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtModifiedStr) {
            $res['GmtModifiedStr'] = $this->gmtModifiedStr;
        }
        if (null !== $this->greyConfigInfo) {
            $res['GreyConfigInfo'] = $this->greyConfigInfo;
        }
        if (null !== $this->greyEndtime) {
            $res['GreyEndtime'] = $this->greyEndtime;
        }
        if (null !== $this->greyEndtimeData) {
            $res['GreyEndtimeData'] = $this->greyEndtimeData;
        }
        if (null !== $this->greyEndtimeStr) {
            $res['GreyEndtimeStr'] = $this->greyEndtimeStr;
        }
        if (null !== $this->greyNum) {
            $res['GreyNum'] = $this->greyNum;
        }
        if (null !== $this->greyUrl) {
            $res['GreyUrl'] = $this->greyUrl;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->productVersion) {
            $res['ProductVersion'] = $this->productVersion;
        }
        if (null !== $this->publishMode) {
            $res['PublishMode'] = $this->publishMode;
        }
        if (null !== $this->publishType) {
            $res['PublishType'] = $this->publishType;
        }
        if (null !== $this->releaseVersion) {
            $res['ReleaseVersion'] = $this->releaseVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->syncResult) {
            $res['SyncResult'] = $this->syncResult;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskVersion) {
            $res['TaskVersion'] = $this->taskVersion;
        }
        if (null !== $this->upgradeNoticeNum) {
            $res['UpgradeNoticeNum'] = $this->upgradeNoticeNum;
        }
        if (null !== $this->upgradeProgress) {
            $res['UpgradeProgress'] = $this->upgradeProgress;
        }
        if (null !== $this->whitelistIds) {
            $res['WhitelistIds'] = $this->whitelistIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nebulaTaskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtModifiedStr'])) {
            $model->gmtModifiedStr = $map['GmtModifiedStr'];
        }
        if (isset($map['GreyConfigInfo'])) {
            $model->greyConfigInfo = $map['GreyConfigInfo'];
        }
        if (isset($map['GreyEndtime'])) {
            $model->greyEndtime = $map['GreyEndtime'];
        }
        if (isset($map['GreyEndtimeData'])) {
            $model->greyEndtimeData = $map['GreyEndtimeData'];
        }
        if (isset($map['GreyEndtimeStr'])) {
            $model->greyEndtimeStr = $map['GreyEndtimeStr'];
        }
        if (isset($map['GreyNum'])) {
            $model->greyNum = $map['GreyNum'];
        }
        if (isset($map['GreyUrl'])) {
            $model->greyUrl = $map['GreyUrl'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductVersion'])) {
            $model->productVersion = $map['ProductVersion'];
        }
        if (isset($map['PublishMode'])) {
            $model->publishMode = $map['PublishMode'];
        }
        if (isset($map['PublishType'])) {
            $model->publishType = $map['PublishType'];
        }
        if (isset($map['ReleaseVersion'])) {
            $model->releaseVersion = $map['ReleaseVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SyncResult'])) {
            $model->syncResult = $map['SyncResult'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskVersion'])) {
            $model->taskVersion = $map['TaskVersion'];
        }
        if (isset($map['UpgradeNoticeNum'])) {
            $model->upgradeNoticeNum = $map['UpgradeNoticeNum'];
        }
        if (isset($map['UpgradeProgress'])) {
            $model->upgradeProgress = $map['UpgradeProgress'];
        }
        if (isset($map['WhitelistIds'])) {
            $model->whitelistIds = $map['WhitelistIds'];
        }

        return $model;
    }
}
