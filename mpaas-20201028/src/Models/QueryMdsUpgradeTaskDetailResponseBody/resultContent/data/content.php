<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMdsUpgradeTaskDetailResponseBody\resultContent\data;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMdsUpgradeTaskDetailResponseBody\resultContent\data\content\ruleJsonList;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMdsUpgradeTaskDetailResponseBody\resultContent\data\content\whitelist;
use AlibabaCloud\Tea\Model;

class content extends Model
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
     * @var string
     */
    public $appstoreurl;

    /**
     * @var string
     */
    public $channelContains;

    /**
     * @var string
     */
    public $channelExcludes;

    /**
     * @var string
     */
    public $cityContains;

    /**
     * @var string
     */
    public $cityExcludes;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var int
     */
    public $deviceGreyNum;

    /**
     * @var int
     */
    public $devicePercent;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var int
     */
    public $executionOrder;

    /**
     * @var string
     */
    public $gmtCreateStr;

    /**
     * @var string
     */
    public $greyConfigInfo;

    /**
     * @var string
     */
    public $greyEndtimeData;

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
    public $greyUv;

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
    public $isRc;

    /**
     * @var int
     */
    public $isRelease;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var string
     */
    public $mobileModelContains;

    /**
     * @var string
     */
    public $mobileModelExcludes;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $osVersion;

    /**
     * @var int
     */
    public $packageInfoId;

    /**
     * @var string
     */
    public $packageType;

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
    public $qrcodeUrl;

    /**
     * @var string
     */
    public $releaseType;

    /**
     * @var ruleJsonList[]
     */
    public $ruleJsonList;

    /**
     * @var int
     */
    public $silentType;

    /**
     * @var string
     */
    public $syncMode;

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
     * @var whitelist[]
     */
    public $whitelist;

    /**
     * @var string
     */
    public $whitelistIds;
    protected $_name = [
        'appCode'             => 'AppCode',
        'appId'               => 'AppId',
        'appstoreurl'         => 'Appstoreurl',
        'channelContains'     => 'ChannelContains',
        'channelExcludes'     => 'ChannelExcludes',
        'cityContains'        => 'CityContains',
        'cityExcludes'        => 'CityExcludes',
        'creator'             => 'Creator',
        'deviceGreyNum'       => 'DeviceGreyNum',
        'devicePercent'       => 'DevicePercent',
        'downloadUrl'         => 'DownloadUrl',
        'executionOrder'      => 'ExecutionOrder',
        'gmtCreateStr'        => 'GmtCreateStr',
        'greyConfigInfo'      => 'GreyConfigInfo',
        'greyEndtimeData'     => 'GreyEndtimeData',
        'greyNotice'          => 'GreyNotice',
        'greyNum'             => 'GreyNum',
        'greyUv'              => 'GreyUv',
        'id'                  => 'Id',
        'innerVersion'        => 'InnerVersion',
        'isEnterprise'        => 'IsEnterprise',
        'isOfficial'          => 'IsOfficial',
        'isPush'              => 'IsPush',
        'isRc'                => 'IsRc',
        'isRelease'           => 'IsRelease',
        'memo'                => 'Memo',
        'mobileModelContains' => 'MobileModelContains',
        'mobileModelExcludes' => 'MobileModelExcludes',
        'modifier'            => 'Modifier',
        'netType'             => 'NetType',
        'osVersion'           => 'OsVersion',
        'packageInfoId'       => 'PackageInfoId',
        'packageType'         => 'PackageType',
        'platform'            => 'Platform',
        'productId'           => 'ProductId',
        'productVersion'      => 'ProductVersion',
        'publishMode'         => 'PublishMode',
        'publishType'         => 'PublishType',
        'pushContent'         => 'PushContent',
        'qrcodeUrl'           => 'QrcodeUrl',
        'releaseType'         => 'ReleaseType',
        'ruleJsonList'        => 'RuleJsonList',
        'silentType'          => 'SilentType',
        'syncMode'            => 'SyncMode',
        'syncResult'          => 'SyncResult',
        'taskStatus'          => 'TaskStatus',
        'upgradeContent'      => 'UpgradeContent',
        'upgradeType'         => 'UpgradeType',
        'upgradeValidTime'    => 'UpgradeValidTime',
        'whitelist'           => 'Whitelist',
        'whitelistIds'        => 'WhitelistIds',
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
        if (null !== $this->appstoreurl) {
            $res['Appstoreurl'] = $this->appstoreurl;
        }
        if (null !== $this->channelContains) {
            $res['ChannelContains'] = $this->channelContains;
        }
        if (null !== $this->channelExcludes) {
            $res['ChannelExcludes'] = $this->channelExcludes;
        }
        if (null !== $this->cityContains) {
            $res['CityContains'] = $this->cityContains;
        }
        if (null !== $this->cityExcludes) {
            $res['CityExcludes'] = $this->cityExcludes;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->deviceGreyNum) {
            $res['DeviceGreyNum'] = $this->deviceGreyNum;
        }
        if (null !== $this->devicePercent) {
            $res['DevicePercent'] = $this->devicePercent;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->executionOrder) {
            $res['ExecutionOrder'] = $this->executionOrder;
        }
        if (null !== $this->gmtCreateStr) {
            $res['GmtCreateStr'] = $this->gmtCreateStr;
        }
        if (null !== $this->greyConfigInfo) {
            $res['GreyConfigInfo'] = $this->greyConfigInfo;
        }
        if (null !== $this->greyEndtimeData) {
            $res['GreyEndtimeData'] = $this->greyEndtimeData;
        }
        if (null !== $this->greyNotice) {
            $res['GreyNotice'] = $this->greyNotice;
        }
        if (null !== $this->greyNum) {
            $res['GreyNum'] = $this->greyNum;
        }
        if (null !== $this->greyUv) {
            $res['GreyUv'] = $this->greyUv;
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
        if (null !== $this->isRc) {
            $res['IsRc'] = $this->isRc;
        }
        if (null !== $this->isRelease) {
            $res['IsRelease'] = $this->isRelease;
        }
        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
        }
        if (null !== $this->mobileModelContains) {
            $res['MobileModelContains'] = $this->mobileModelContains;
        }
        if (null !== $this->mobileModelExcludes) {
            $res['MobileModelExcludes'] = $this->mobileModelExcludes;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }
        if (null !== $this->packageInfoId) {
            $res['PackageInfoId'] = $this->packageInfoId;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
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
        if (null !== $this->qrcodeUrl) {
            $res['QrcodeUrl'] = $this->qrcodeUrl;
        }
        if (null !== $this->releaseType) {
            $res['ReleaseType'] = $this->releaseType;
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
        if (null !== $this->silentType) {
            $res['SilentType'] = $this->silentType;
        }
        if (null !== $this->syncMode) {
            $res['SyncMode'] = $this->syncMode;
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
        if (null !== $this->whitelist) {
            $res['Whitelist'] = [];
            if (null !== $this->whitelist && \is_array($this->whitelist)) {
                $n = 0;
                foreach ($this->whitelist as $item) {
                    $res['Whitelist'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->whitelistIds) {
            $res['WhitelistIds'] = $this->whitelistIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
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
        if (isset($map['Appstoreurl'])) {
            $model->appstoreurl = $map['Appstoreurl'];
        }
        if (isset($map['ChannelContains'])) {
            $model->channelContains = $map['ChannelContains'];
        }
        if (isset($map['ChannelExcludes'])) {
            $model->channelExcludes = $map['ChannelExcludes'];
        }
        if (isset($map['CityContains'])) {
            $model->cityContains = $map['CityContains'];
        }
        if (isset($map['CityExcludes'])) {
            $model->cityExcludes = $map['CityExcludes'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DeviceGreyNum'])) {
            $model->deviceGreyNum = $map['DeviceGreyNum'];
        }
        if (isset($map['DevicePercent'])) {
            $model->devicePercent = $map['DevicePercent'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['ExecutionOrder'])) {
            $model->executionOrder = $map['ExecutionOrder'];
        }
        if (isset($map['GmtCreateStr'])) {
            $model->gmtCreateStr = $map['GmtCreateStr'];
        }
        if (isset($map['GreyConfigInfo'])) {
            $model->greyConfigInfo = $map['GreyConfigInfo'];
        }
        if (isset($map['GreyEndtimeData'])) {
            $model->greyEndtimeData = $map['GreyEndtimeData'];
        }
        if (isset($map['GreyNotice'])) {
            $model->greyNotice = $map['GreyNotice'];
        }
        if (isset($map['GreyNum'])) {
            $model->greyNum = $map['GreyNum'];
        }
        if (isset($map['GreyUv'])) {
            $model->greyUv = $map['GreyUv'];
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
        if (isset($map['IsRc'])) {
            $model->isRc = $map['IsRc'];
        }
        if (isset($map['IsRelease'])) {
            $model->isRelease = $map['IsRelease'];
        }
        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }
        if (isset($map['MobileModelContains'])) {
            $model->mobileModelContains = $map['MobileModelContains'];
        }
        if (isset($map['MobileModelExcludes'])) {
            $model->mobileModelExcludes = $map['MobileModelExcludes'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }
        if (isset($map['PackageInfoId'])) {
            $model->packageInfoId = $map['PackageInfoId'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
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
        if (isset($map['QrcodeUrl'])) {
            $model->qrcodeUrl = $map['QrcodeUrl'];
        }
        if (isset($map['ReleaseType'])) {
            $model->releaseType = $map['ReleaseType'];
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
        if (isset($map['SilentType'])) {
            $model->silentType = $map['SilentType'];
        }
        if (isset($map['SyncMode'])) {
            $model->syncMode = $map['SyncMode'];
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
        if (isset($map['Whitelist'])) {
            if (!empty($map['Whitelist'])) {
                $model->whitelist = [];
                $n                = 0;
                foreach ($map['Whitelist'] as $item) {
                    $model->whitelist[$n++] = null !== $item ? whitelist::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WhitelistIds'])) {
            $model->whitelistIds = $map['WhitelistIds'];
        }

        return $model;
    }
}
