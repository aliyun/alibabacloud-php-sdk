<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeUpgradeTasksResponseBody\listTaskResult;

use AlibabaCloud\Tea\Model;

class taskInfo extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var int
     */
    public $devicePercent;

    /**
     * @var int
     */
    public $executionOrder;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtCreateStr;

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
     * @var int
     */
    public $greyNotice;

    /**
     * @var int
     */
    public $greyNum;

    /**
     * @var int
     */
    public $greyPausePoint;

    /**
     * @var int
     */
    public $greyPauseType;

    /**
     * @var int
     */
    public $greyUv;

    /**
     * @var int
     */
    public $historyForce;

    /**
     * @var string
     */
    public $huobanNoticeId;

    /**
     * @var string
     */
    public $huobanUrl;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $innerVersion;

    /**
     * @var int
     */
    public $isEnterprise;

    /**
     * @var int
     */
    public $isOfficial;

    /**
     * @var int
     */
    public $isPush;

    /**
     * @var int
     */
    public $isRelease;

    /**
     * @var string
     */
    public $maxVersion;

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
    public $packageInfoId;

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
    public $pushContent;

    /**
     * @var string
     */
    public $realGreyEndtime;

    /**
     * @var string
     */
    public $realGreyEndtimeStr;

    /**
     * @var int
     */
    public $realGreyEndtype;

    /**
     * @var int
     */
    public $realGreyNum;

    /**
     * @var int
     */
    public $realGreyUv;

    /**
     * @var int
     */
    public $silentType;

    /**
     * @var string
     */
    public $syncResult;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $upgradeContent;

    /**
     * @var int
     */
    public $upgradeType;

    /**
     * @var int
     */
    public $upgradeValidTime;

    /**
     * @var string
     */
    public $whitelistIds;
    protected $_name = [
        'appCode'            => 'AppCode',
        'creator'            => 'Creator',
        'devicePercent'      => 'DevicePercent',
        'executionOrder'     => 'ExecutionOrder',
        'gmtCreate'          => 'GmtCreate',
        'gmtCreateStr'       => 'GmtCreateStr',
        'gmtModified'        => 'GmtModified',
        'gmtModifiedStr'     => 'GmtModifiedStr',
        'greyConfigInfo'     => 'GreyConfigInfo',
        'greyEndtime'        => 'GreyEndtime',
        'greyNotice'         => 'GreyNotice',
        'greyNum'            => 'GreyNum',
        'greyPausePoint'     => 'GreyPausePoint',
        'greyPauseType'      => 'GreyPauseType',
        'greyUv'             => 'GreyUv',
        'historyForce'       => 'HistoryForce',
        'huobanNoticeId'     => 'HuobanNoticeId',
        'huobanUrl'          => 'HuobanUrl',
        'id'                 => 'Id',
        'innerVersion'       => 'InnerVersion',
        'isEnterprise'       => 'IsEnterprise',
        'isOfficial'         => 'IsOfficial',
        'isPush'             => 'IsPush',
        'isRelease'          => 'IsRelease',
        'maxVersion'         => 'MaxVersion',
        'memo'               => 'Memo',
        'modifier'           => 'Modifier',
        'packageInfoId'      => 'PackageInfoId',
        'platform'           => 'Platform',
        'productId'          => 'ProductId',
        'productVersion'     => 'ProductVersion',
        'publishMode'        => 'PublishMode',
        'publishType'        => 'PublishType',
        'pushContent'        => 'PushContent',
        'realGreyEndtime'    => 'RealGreyEndtime',
        'realGreyEndtimeStr' => 'RealGreyEndtimeStr',
        'realGreyEndtype'    => 'RealGreyEndtype',
        'realGreyNum'        => 'RealGreyNum',
        'realGreyUv'         => 'RealGreyUv',
        'silentType'         => 'SilentType',
        'syncResult'         => 'SyncResult',
        'taskStatus'         => 'TaskStatus',
        'upgradeContent'     => 'UpgradeContent',
        'upgradeType'        => 'UpgradeType',
        'upgradeValidTime'   => 'UpgradeValidTime',
        'whitelistIds'       => 'WhitelistIds',
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
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->devicePercent) {
            $res['DevicePercent'] = $this->devicePercent;
        }
        if (null !== $this->executionOrder) {
            $res['ExecutionOrder'] = $this->executionOrder;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtCreateStr) {
            $res['GmtCreateStr'] = $this->gmtCreateStr;
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
        if (null !== $this->greyNotice) {
            $res['GreyNotice'] = $this->greyNotice;
        }
        if (null !== $this->greyNum) {
            $res['GreyNum'] = $this->greyNum;
        }
        if (null !== $this->greyPausePoint) {
            $res['GreyPausePoint'] = $this->greyPausePoint;
        }
        if (null !== $this->greyPauseType) {
            $res['GreyPauseType'] = $this->greyPauseType;
        }
        if (null !== $this->greyUv) {
            $res['GreyUv'] = $this->greyUv;
        }
        if (null !== $this->historyForce) {
            $res['HistoryForce'] = $this->historyForce;
        }
        if (null !== $this->huobanNoticeId) {
            $res['HuobanNoticeId'] = $this->huobanNoticeId;
        }
        if (null !== $this->huobanUrl) {
            $res['HuobanUrl'] = $this->huobanUrl;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->innerVersion) {
            $res['InnerVersion'] = $this->innerVersion;
        }
        if (null !== $this->isEnterprise) {
            $res['IsEnterprise'] = $this->isEnterprise;
        }
        if (null !== $this->isOfficial) {
            $res['IsOfficial'] = $this->isOfficial;
        }
        if (null !== $this->isPush) {
            $res['IsPush'] = $this->isPush;
        }
        if (null !== $this->isRelease) {
            $res['IsRelease'] = $this->isRelease;
        }
        if (null !== $this->maxVersion) {
            $res['MaxVersion'] = $this->maxVersion;
        }
        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->packageInfoId) {
            $res['PackageInfoId'] = $this->packageInfoId;
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
        if (null !== $this->pushContent) {
            $res['PushContent'] = $this->pushContent;
        }
        if (null !== $this->realGreyEndtime) {
            $res['RealGreyEndtime'] = $this->realGreyEndtime;
        }
        if (null !== $this->realGreyEndtimeStr) {
            $res['RealGreyEndtimeStr'] = $this->realGreyEndtimeStr;
        }
        if (null !== $this->realGreyEndtype) {
            $res['RealGreyEndtype'] = $this->realGreyEndtype;
        }
        if (null !== $this->realGreyNum) {
            $res['RealGreyNum'] = $this->realGreyNum;
        }
        if (null !== $this->realGreyUv) {
            $res['RealGreyUv'] = $this->realGreyUv;
        }
        if (null !== $this->silentType) {
            $res['SilentType'] = $this->silentType;
        }
        if (null !== $this->syncResult) {
            $res['SyncResult'] = $this->syncResult;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->upgradeContent) {
            $res['UpgradeContent'] = $this->upgradeContent;
        }
        if (null !== $this->upgradeType) {
            $res['UpgradeType'] = $this->upgradeType;
        }
        if (null !== $this->upgradeValidTime) {
            $res['UpgradeValidTime'] = $this->upgradeValidTime;
        }
        if (null !== $this->whitelistIds) {
            $res['WhitelistIds'] = $this->whitelistIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DevicePercent'])) {
            $model->devicePercent = $map['DevicePercent'];
        }
        if (isset($map['ExecutionOrder'])) {
            $model->executionOrder = $map['ExecutionOrder'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtCreateStr'])) {
            $model->gmtCreateStr = $map['GmtCreateStr'];
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
        if (isset($map['GreyNotice'])) {
            $model->greyNotice = $map['GreyNotice'];
        }
        if (isset($map['GreyNum'])) {
            $model->greyNum = $map['GreyNum'];
        }
        if (isset($map['GreyPausePoint'])) {
            $model->greyPausePoint = $map['GreyPausePoint'];
        }
        if (isset($map['GreyPauseType'])) {
            $model->greyPauseType = $map['GreyPauseType'];
        }
        if (isset($map['GreyUv'])) {
            $model->greyUv = $map['GreyUv'];
        }
        if (isset($map['HistoryForce'])) {
            $model->historyForce = $map['HistoryForce'];
        }
        if (isset($map['HuobanNoticeId'])) {
            $model->huobanNoticeId = $map['HuobanNoticeId'];
        }
        if (isset($map['HuobanUrl'])) {
            $model->huobanUrl = $map['HuobanUrl'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InnerVersion'])) {
            $model->innerVersion = $map['InnerVersion'];
        }
        if (isset($map['IsEnterprise'])) {
            $model->isEnterprise = $map['IsEnterprise'];
        }
        if (isset($map['IsOfficial'])) {
            $model->isOfficial = $map['IsOfficial'];
        }
        if (isset($map['IsPush'])) {
            $model->isPush = $map['IsPush'];
        }
        if (isset($map['IsRelease'])) {
            $model->isRelease = $map['IsRelease'];
        }
        if (isset($map['MaxVersion'])) {
            $model->maxVersion = $map['MaxVersion'];
        }
        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['PackageInfoId'])) {
            $model->packageInfoId = $map['PackageInfoId'];
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
        if (isset($map['PushContent'])) {
            $model->pushContent = $map['PushContent'];
        }
        if (isset($map['RealGreyEndtime'])) {
            $model->realGreyEndtime = $map['RealGreyEndtime'];
        }
        if (isset($map['RealGreyEndtimeStr'])) {
            $model->realGreyEndtimeStr = $map['RealGreyEndtimeStr'];
        }
        if (isset($map['RealGreyEndtype'])) {
            $model->realGreyEndtype = $map['RealGreyEndtype'];
        }
        if (isset($map['RealGreyNum'])) {
            $model->realGreyNum = $map['RealGreyNum'];
        }
        if (isset($map['RealGreyUv'])) {
            $model->realGreyUv = $map['RealGreyUv'];
        }
        if (isset($map['SilentType'])) {
            $model->silentType = $map['SilentType'];
        }
        if (isset($map['SyncResult'])) {
            $model->syncResult = $map['SyncResult'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['UpgradeContent'])) {
            $model->upgradeContent = $map['UpgradeContent'];
        }
        if (isset($map['UpgradeType'])) {
            $model->upgradeType = $map['UpgradeType'];
        }
        if (isset($map['UpgradeValidTime'])) {
            $model->upgradeValidTime = $map['UpgradeValidTime'];
        }
        if (isset($map['WhitelistIds'])) {
            $model->whitelistIds = $map['WhitelistIds'];
        }

        return $model;
    }
}
