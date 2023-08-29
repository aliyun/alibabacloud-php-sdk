<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeUpgradeTaskInfoResponseBody\getTaskResult;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeUpgradeTaskInfoResponseBody\getTaskResult\taskInfo\ruleJsonList;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeUpgradeTaskInfoResponseBody\getTaskResult\taskInfo\whitelist;
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
    public $appId;

    /**
     * @var string
     */
    public $appstoreUrl;

    /**
     * @var string
     */
    public $creater;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $downloadUrl;

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
    public $greyNum;

    /**
     * @var int
     */
    public $historyForce;

    /**
     * @var int
     */
    public $id;

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
     * @var ruleJsonList[]
     */
    public $ruleJsonList;

    /**
     * @var int
     */
    public $silentType;

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

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appCode'          => 'AppCode',
        'appId'            => 'AppId',
        'appstoreUrl'      => 'AppstoreUrl',
        'creater'          => 'Creater',
        'creator'          => 'Creator',
        'downloadUrl'      => 'DownloadUrl',
        'greyConfigInfo'   => 'GreyConfigInfo',
        'greyEndtimeData'  => 'GreyEndtimeData',
        'greyNum'          => 'GreyNum',
        'historyForce'     => 'HistoryForce',
        'id'               => 'Id',
        'isEnterprise'     => 'IsEnterprise',
        'isOfficial'       => 'IsOfficial',
        'isRc'             => 'IsRc',
        'isRelease'        => 'IsRelease',
        'memo'             => 'Memo',
        'modifier'         => 'Modifier',
        'netType'          => 'NetType',
        'osVersion'        => 'OsVersion',
        'packageInfoId'    => 'PackageInfoId',
        'packageType'      => 'PackageType',
        'platform'         => 'Platform',
        'productId'        => 'ProductId',
        'publishMode'      => 'PublishMode',
        'publishType'      => 'PublishType',
        'pushContent'      => 'PushContent',
        'qrcodeUrl'        => 'QrcodeUrl',
        'ruleJsonList'     => 'RuleJsonList',
        'silentType'       => 'SilentType',
        'taskStatus'       => 'TaskStatus',
        'upgradeContent'   => 'UpgradeContent',
        'upgradeType'      => 'UpgradeType',
        'upgradeValidTime' => 'UpgradeValidTime',
        'whitelist'        => 'Whitelist',
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
        if (null !== $this->appstoreUrl) {
            $res['AppstoreUrl'] = $this->appstoreUrl;
        }
        if (null !== $this->creater) {
            $res['Creater'] = $this->creater;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->greyConfigInfo) {
            $res['GreyConfigInfo'] = $this->greyConfigInfo;
        }
        if (null !== $this->greyEndtimeData) {
            $res['GreyEndtimeData'] = $this->greyEndtimeData;
        }
        if (null !== $this->greyNum) {
            $res['GreyNum'] = $this->greyNum;
        }
        if (null !== $this->historyForce) {
            $res['HistoryForce'] = $this->historyForce;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isEnterprise) {
            $res['IsEnterprise'] = $this->isEnterprise;
        }
        if (null !== $this->isOfficial) {
            $res['IsOfficial'] = $this->isOfficial;
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
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppstoreUrl'])) {
            $model->appstoreUrl = $map['AppstoreUrl'];
        }
        if (isset($map['Creater'])) {
            $model->creater = $map['Creater'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['GreyConfigInfo'])) {
            $model->greyConfigInfo = $map['GreyConfigInfo'];
        }
        if (isset($map['GreyEndtimeData'])) {
            $model->greyEndtimeData = $map['GreyEndtimeData'];
        }
        if (isset($map['GreyNum'])) {
            $model->greyNum = $map['GreyNum'];
        }
        if (isset($map['HistoryForce'])) {
            $model->historyForce = $map['HistoryForce'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsEnterprise'])) {
            $model->isEnterprise = $map['IsEnterprise'];
        }
        if (isset($map['IsOfficial'])) {
            $model->isOfficial = $map['IsOfficial'];
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
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
