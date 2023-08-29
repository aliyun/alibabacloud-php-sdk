<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeNebulaTaskDetailResponseBody\getMcubeNebulaTaskDetailResult;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeNebulaTaskDetailResponseBody\getMcubeNebulaTaskDetailResult\nebulaTaskDetail\ruleJsonList;
use AlibabaCloud\Tea\Model;

class nebulaTaskDetail extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $atomic;

    /**
     * @var int
     */
    public $baseInfoId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var int
     */
    public $cronexpress;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $extraData;

    /**
     * @var string
     */
    public $fileSize;

    /**
     * @var int
     */
    public $fullRepair;

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
    public $issueDesc;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $ossPath;

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
    public $publishPeriod;

    /**
     * @var int
     */
    public $publishType;

    /**
     * @var int
     */
    public $quickRollback;

    /**
     * @var string
     */
    public $releaseVersion;

    /**
     * @var ruleJsonList[]
     */
    public $ruleJsonList;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceName;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $syncResult;

    /**
     * @var int
     */
    public $syncType;

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

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appCode'          => 'AppCode',
        'appId'            => 'AppId',
        'atomic'           => 'Atomic',
        'baseInfoId'       => 'BaseInfoId',
        'bizType'          => 'BizType',
        'creator'          => 'Creator',
        'cronexpress'      => 'Cronexpress',
        'downloadUrl'      => 'DownloadUrl',
        'extraData'        => 'ExtraData',
        'fileSize'         => 'FileSize',
        'fullRepair'       => 'FullRepair',
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
        'issueDesc'        => 'IssueDesc',
        'memo'             => 'Memo',
        'modifier'         => 'Modifier',
        'ossPath'          => 'OssPath',
        'packageId'        => 'PackageId',
        'percent'          => 'Percent',
        'platform'         => 'Platform',
        'productId'        => 'ProductId',
        'productVersion'   => 'ProductVersion',
        'publishMode'      => 'PublishMode',
        'publishPeriod'    => 'PublishPeriod',
        'publishType'      => 'PublishType',
        'quickRollback'    => 'QuickRollback',
        'releaseVersion'   => 'ReleaseVersion',
        'ruleJsonList'     => 'RuleJsonList',
        'sourceId'         => 'SourceId',
        'sourceName'       => 'SourceName',
        'sourceType'       => 'SourceType',
        'status'           => 'Status',
        'syncResult'       => 'SyncResult',
        'syncType'         => 'SyncType',
        'taskName'         => 'TaskName',
        'taskStatus'       => 'TaskStatus',
        'taskType'         => 'TaskType',
        'taskVersion'      => 'TaskVersion',
        'upgradeNoticeNum' => 'UpgradeNoticeNum',
        'upgradeProgress'  => 'UpgradeProgress',
        'whitelistIds'     => 'WhitelistIds',
        'workspaceId'      => 'WorkspaceId',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->atomic) {
            $res['Atomic'] = $this->atomic;
        }
        if (null !== $this->baseInfoId) {
            $res['BaseInfoId'] = $this->baseInfoId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->cronexpress) {
            $res['Cronexpress'] = $this->cronexpress;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->fullRepair) {
            $res['FullRepair'] = $this->fullRepair;
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
        if (null !== $this->issueDesc) {
            $res['IssueDesc'] = $this->issueDesc;
        }
        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
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
        if (null !== $this->publishPeriod) {
            $res['PublishPeriod'] = $this->publishPeriod;
        }
        if (null !== $this->publishType) {
            $res['PublishType'] = $this->publishType;
        }
        if (null !== $this->quickRollback) {
            $res['QuickRollback'] = $this->quickRollback;
        }
        if (null !== $this->releaseVersion) {
            $res['ReleaseVersion'] = $this->releaseVersion;
        }
        if (null !== $this->ruleJsonList) {
            $res['RuleJsonList'] = [];
            if (null !== $this->ruleJsonList && \is_array($this->ruleJsonList)) {
                $n = 0;
                foreach ($this->ruleJsonList as $item) {
                    $res['RuleJsonList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceName) {
            $res['SourceName'] = $this->sourceName;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->syncResult) {
            $res['SyncResult'] = $this->syncResult;
        }
        if (null !== $this->syncType) {
            $res['SyncType'] = $this->syncType;
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
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nebulaTaskDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Atomic'])) {
            $model->atomic = $map['Atomic'];
        }
        if (isset($map['BaseInfoId'])) {
            $model->baseInfoId = $map['BaseInfoId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Cronexpress'])) {
            $model->cronexpress = $map['Cronexpress'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['FullRepair'])) {
            $model->fullRepair = $map['FullRepair'];
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
        if (isset($map['IssueDesc'])) {
            $model->issueDesc = $map['IssueDesc'];
        }
        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
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
        if (isset($map['PublishPeriod'])) {
            $model->publishPeriod = $map['PublishPeriod'];
        }
        if (isset($map['PublishType'])) {
            $model->publishType = $map['PublishType'];
        }
        if (isset($map['QuickRollback'])) {
            $model->quickRollback = $map['QuickRollback'];
        }
        if (isset($map['ReleaseVersion'])) {
            $model->releaseVersion = $map['ReleaseVersion'];
        }
        if (isset($map['RuleJsonList'])) {
            if (!empty($map['RuleJsonList'])) {
                $model->ruleJsonList = [];
                $n                   = 0;
                foreach ($map['RuleJsonList'] as $item) {
                    $model->ruleJsonList[$n++] = null !== $item ? ruleJsonList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceName'])) {
            $model->sourceName = $map['SourceName'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SyncResult'])) {
            $model->syncResult = $map['SyncResult'];
        }
        if (isset($map['SyncType'])) {
            $model->syncType = $map['SyncType'];
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
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
