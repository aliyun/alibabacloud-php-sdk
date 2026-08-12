<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models\ListAIAgentEventResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $assetName;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $checkTime;

    /**
     * @var string
     */
    public $handleTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $infraInstanceId;

    /**
     * @var string
     */
    public $infraInternetIp;

    /**
     * @var string
     */
    public $infraIntranetIp;

    /**
     * @var string
     */
    public $infraName;

    /**
     * @var string
     */
    public $infraRegionId;

    /**
     * @var string
     */
    public $infraType;

    /**
     * @var string
     */
    public $riskDesc;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $riskName;

    /**
     * @var int
     */
    public $skillId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'assetName' => 'AssetName',
        'assetType' => 'AssetType',
        'checkTime' => 'CheckTime',
        'handleTime' => 'HandleTime',
        'id' => 'Id',
        'infraInstanceId' => 'InfraInstanceId',
        'infraInternetIp' => 'InfraInternetIp',
        'infraIntranetIp' => 'InfraIntranetIp',
        'infraName' => 'InfraName',
        'infraRegionId' => 'InfraRegionId',
        'infraType' => 'InfraType',
        'riskDesc' => 'RiskDesc',
        'riskLevel' => 'RiskLevel',
        'riskName' => 'RiskName',
        'skillId' => 'SkillId',
        'source' => 'Source',
        'status' => 'Status',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->checkTime) {
            $res['CheckTime'] = $this->checkTime;
        }

        if (null !== $this->handleTime) {
            $res['HandleTime'] = $this->handleTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->infraInstanceId) {
            $res['InfraInstanceId'] = $this->infraInstanceId;
        }

        if (null !== $this->infraInternetIp) {
            $res['InfraInternetIp'] = $this->infraInternetIp;
        }

        if (null !== $this->infraIntranetIp) {
            $res['InfraIntranetIp'] = $this->infraIntranetIp;
        }

        if (null !== $this->infraName) {
            $res['InfraName'] = $this->infraName;
        }

        if (null !== $this->infraRegionId) {
            $res['InfraRegionId'] = $this->infraRegionId;
        }

        if (null !== $this->infraType) {
            $res['InfraType'] = $this->infraType;
        }

        if (null !== $this->riskDesc) {
            $res['RiskDesc'] = $this->riskDesc;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AssetName'])) {
            $model->assetName = $map['AssetName'];
        }

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['CheckTime'])) {
            $model->checkTime = $map['CheckTime'];
        }

        if (isset($map['HandleTime'])) {
            $model->handleTime = $map['HandleTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InfraInstanceId'])) {
            $model->infraInstanceId = $map['InfraInstanceId'];
        }

        if (isset($map['InfraInternetIp'])) {
            $model->infraInternetIp = $map['InfraInternetIp'];
        }

        if (isset($map['InfraIntranetIp'])) {
            $model->infraIntranetIp = $map['InfraIntranetIp'];
        }

        if (isset($map['InfraName'])) {
            $model->infraName = $map['InfraName'];
        }

        if (isset($map['InfraRegionId'])) {
            $model->infraRegionId = $map['InfraRegionId'];
        }

        if (isset($map['InfraType'])) {
            $model->infraType = $map['InfraType'];
        }

        if (isset($map['RiskDesc'])) {
            $model->riskDesc = $map['RiskDesc'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
