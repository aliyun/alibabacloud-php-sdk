<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeUpgradeTasksResponseBody\listTaskResult;

use AlibabaCloud\Dara\Model;

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
    public $greyConfigInfo;

    /**
     * @var string
     */
    public $greyEndtime;

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
     * @var string
     */
    public $whitelistIds;
    protected $_name = [
        'appCode' => 'AppCode',
        'creator' => 'Creator',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'greyConfigInfo' => 'GreyConfigInfo',
        'greyEndtime' => 'GreyEndtime',
        'greyNum' => 'GreyNum',
        'historyForce' => 'HistoryForce',
        'id' => 'Id',
        'isEnterprise' => 'IsEnterprise',
        'memo' => 'Memo',
        'modifier' => 'Modifier',
        'packageInfoId' => 'PackageInfoId',
        'platform' => 'Platform',
        'productId' => 'ProductId',
        'productVersion' => 'ProductVersion',
        'publishMode' => 'PublishMode',
        'publishType' => 'PublishType',
        'pushContent' => 'PushContent',
        'taskStatus' => 'TaskStatus',
        'upgradeContent' => 'UpgradeContent',
        'upgradeType' => 'UpgradeType',
        'whitelistIds' => 'WhitelistIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
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

        if (null !== $this->greyConfigInfo) {
            $res['GreyConfigInfo'] = $this->greyConfigInfo;
        }

        if (null !== $this->greyEndtime) {
            $res['GreyEndtime'] = $this->greyEndtime;
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

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->upgradeContent) {
            $res['UpgradeContent'] = $this->upgradeContent;
        }

        if (null !== $this->upgradeType) {
            $res['UpgradeType'] = $this->upgradeType;
        }

        if (null !== $this->whitelistIds) {
            $res['WhitelistIds'] = $this->whitelistIds;
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

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['GreyConfigInfo'])) {
            $model->greyConfigInfo = $map['GreyConfigInfo'];
        }

        if (isset($map['GreyEndtime'])) {
            $model->greyEndtime = $map['GreyEndtime'];
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

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['UpgradeContent'])) {
            $model->upgradeContent = $map['UpgradeContent'];
        }

        if (isset($map['UpgradeType'])) {
            $model->upgradeType = $map['UpgradeType'];
        }

        if (isset($map['WhitelistIds'])) {
            $model->whitelistIds = $map['WhitelistIds'];
        }

        return $model;
    }
}
