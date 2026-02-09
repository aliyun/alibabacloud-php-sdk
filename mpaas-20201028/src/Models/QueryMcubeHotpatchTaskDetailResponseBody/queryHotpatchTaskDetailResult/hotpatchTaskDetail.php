<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeHotpatchTaskDetailResponseBody\queryHotpatchTaskDetailResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeHotpatchTaskDetailResponseBody\queryHotpatchTaskDetailResult\hotpatchTaskDetail\ruleJsonList;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeHotpatchTaskDetailResponseBody\queryHotpatchTaskDetailResult\hotpatchTaskDetail\whitelist;

class hotpatchTaskDetail extends Model
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
    public $baseInfoId;

    /**
     * @var string[]
     */
    public $bundles;

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
    public $fileSize;

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
    public $greyEndtimeData;

    /**
     * @var int
     */
    public $greyNum;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $md5;

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
    public $sourceName;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $taskVersion;

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
        'appCode' => 'AppCode',
        'appId' => 'AppId',
        'baseInfoId' => 'BaseInfoId',
        'bundles' => 'Bundles',
        'creator' => 'Creator',
        'downloadUrl' => 'DownloadUrl',
        'fileSize' => 'FileSize',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'gmtModifiedStr' => 'GmtModifiedStr',
        'greyConfigInfo' => 'GreyConfigInfo',
        'greyEndtimeData' => 'GreyEndtimeData',
        'greyNum' => 'GreyNum',
        'id' => 'Id',
        'md5' => 'Md5',
        'memo' => 'Memo',
        'modifier' => 'Modifier',
        'packageId' => 'PackageId',
        'platform' => 'Platform',
        'productId' => 'ProductId',
        'productVersion' => 'ProductVersion',
        'publishMode' => 'PublishMode',
        'publishPeriod' => 'PublishPeriod',
        'publishType' => 'PublishType',
        'quickRollback' => 'QuickRollback',
        'releaseVersion' => 'ReleaseVersion',
        'ruleJsonList' => 'RuleJsonList',
        'sourceName' => 'SourceName',
        'taskStatus' => 'TaskStatus',
        'taskVersion' => 'TaskVersion',
        'whitelist' => 'Whitelist',
        'whitelistIds' => 'WhitelistIds',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->bundles)) {
            Model::validateArray($this->bundles);
        }
        if (\is_array($this->ruleJsonList)) {
            Model::validateArray($this->ruleJsonList);
        }
        if (\is_array($this->whitelist)) {
            Model::validateArray($this->whitelist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->baseInfoId) {
            $res['BaseInfoId'] = $this->baseInfoId;
        }

        if (null !== $this->bundles) {
            if (\is_array($this->bundles)) {
                $res['Bundles'] = [];
                $n1 = 0;
                foreach ($this->bundles as $item1) {
                    $res['Bundles'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
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

        if (null !== $this->greyEndtimeData) {
            $res['GreyEndtimeData'] = $this->greyEndtimeData;
        }

        if (null !== $this->greyNum) {
            $res['GreyNum'] = $this->greyNum;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
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
            if (\is_array($this->ruleJsonList)) {
                $res['RuleJsonList'] = [];
                $n1 = 0;
                foreach ($this->ruleJsonList as $item1) {
                    $res['RuleJsonList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceName) {
            $res['SourceName'] = $this->sourceName;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->taskVersion) {
            $res['TaskVersion'] = $this->taskVersion;
        }

        if (null !== $this->whitelist) {
            if (\is_array($this->whitelist)) {
                $res['Whitelist'] = [];
                $n1 = 0;
                foreach ($this->whitelist as $item1) {
                    $res['Whitelist'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['BaseInfoId'])) {
            $model->baseInfoId = $map['BaseInfoId'];
        }

        if (isset($map['Bundles'])) {
            if (!empty($map['Bundles'])) {
                $model->bundles = [];
                $n1 = 0;
                foreach ($map['Bundles'] as $item1) {
                    $model->bundles[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
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

        if (isset($map['GreyEndtimeData'])) {
            $model->greyEndtimeData = $map['GreyEndtimeData'];
        }

        if (isset($map['GreyNum'])) {
            $model->greyNum = $map['GreyNum'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
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
                $n1 = 0;
                foreach ($map['RuleJsonList'] as $item1) {
                    $model->ruleJsonList[$n1] = ruleJsonList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceName'])) {
            $model->sourceName = $map['SourceName'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TaskVersion'])) {
            $model->taskVersion = $map['TaskVersion'];
        }

        if (isset($map['Whitelist'])) {
            if (!empty($map['Whitelist'])) {
                $model->whitelist = [];
                $n1 = 0;
                foreach ($map['Whitelist'] as $item1) {
                    $model->whitelist[$n1] = whitelist::fromMap($item1);
                    ++$n1;
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
