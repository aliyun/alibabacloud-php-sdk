<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class CreateMcubeUpgradeTaskRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

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
     * @var string
     */
    public $memo;

    /**
     * @var int
     */
    public $packageInfoId;

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
    public $tenantId;

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

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId'           => 'AppId',
        'greyConfigInfo'  => 'GreyConfigInfo',
        'greyEndtimeData' => 'GreyEndtimeData',
        'greyNum'         => 'GreyNum',
        'historyForce'    => 'HistoryForce',
        'memo'            => 'Memo',
        'packageInfoId'   => 'PackageInfoId',
        'publishMode'     => 'PublishMode',
        'publishType'     => 'PublishType',
        'tenantId'        => 'TenantId',
        'upgradeContent'  => 'UpgradeContent',
        'upgradeType'     => 'UpgradeType',
        'whitelistIds'    => 'WhitelistIds',
        'workspaceId'     => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
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
        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
        }
        if (null !== $this->packageInfoId) {
            $res['PackageInfoId'] = $this->packageInfoId;
        }
        if (null !== $this->publishMode) {
            $res['PublishMode'] = $this->publishMode;
        }
        if (null !== $this->publishType) {
            $res['PublishType'] = $this->publishType;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMcubeUpgradeTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
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
        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }
        if (isset($map['PackageInfoId'])) {
            $model->packageInfoId = $map['PackageInfoId'];
        }
        if (isset($map['PublishMode'])) {
            $model->publishMode = $map['PublishMode'];
        }
        if (isset($map['PublishType'])) {
            $model->publishType = $map['PublishType'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
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
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
