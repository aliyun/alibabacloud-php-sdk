<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoDetailListResponseBody;

use AlibabaCloud\Dara\Model;

class imageRepoResponses extends Model
{
    /**
     * @var int
     */
    public $alarmCount;
    /**
     * @var string
     */
    public $alarmStatus;
    /**
     * @var string
     */
    public $endpoints;
    /**
     * @var int
     */
    public $hasRiskImageCount;
    /**
     * @var int
     */
    public $hcCount;
    /**
     * @var string
     */
    public $hcStatus;
    /**
     * @var int
     */
    public $imageCount;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $registryType;
    /**
     * @var string
     */
    public $repoId;
    /**
     * @var string
     */
    public $repoName;
    /**
     * @var string
     */
    public $repoNamespace;
    /**
     * @var string
     */
    public $riskStatus;
    /**
     * @var int
     */
    public $vulCount;
    /**
     * @var string
     */
    public $vulStatus;
    protected $_name = [
        'alarmCount'        => 'AlarmCount',
        'alarmStatus'       => 'AlarmStatus',
        'endpoints'         => 'Endpoints',
        'hasRiskImageCount' => 'HasRiskImageCount',
        'hcCount'           => 'HcCount',
        'hcStatus'          => 'HcStatus',
        'imageCount'        => 'ImageCount',
        'instanceId'        => 'InstanceId',
        'regionId'          => 'RegionId',
        'registryType'      => 'RegistryType',
        'repoId'            => 'RepoId',
        'repoName'          => 'RepoName',
        'repoNamespace'     => 'RepoNamespace',
        'riskStatus'        => 'RiskStatus',
        'vulCount'          => 'VulCount',
        'vulStatus'         => 'VulStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmCount) {
            $res['AlarmCount'] = $this->alarmCount;
        }

        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = $this->alarmStatus;
        }

        if (null !== $this->endpoints) {
            $res['Endpoints'] = $this->endpoints;
        }

        if (null !== $this->hasRiskImageCount) {
            $res['HasRiskImageCount'] = $this->hasRiskImageCount;
        }

        if (null !== $this->hcCount) {
            $res['HcCount'] = $this->hcCount;
        }

        if (null !== $this->hcStatus) {
            $res['HcStatus'] = $this->hcStatus;
        }

        if (null !== $this->imageCount) {
            $res['ImageCount'] = $this->imageCount;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->registryType) {
            $res['RegistryType'] = $this->registryType;
        }

        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }

        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }

        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }

        if (null !== $this->riskStatus) {
            $res['RiskStatus'] = $this->riskStatus;
        }

        if (null !== $this->vulCount) {
            $res['VulCount'] = $this->vulCount;
        }

        if (null !== $this->vulStatus) {
            $res['VulStatus'] = $this->vulStatus;
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
        if (isset($map['AlarmCount'])) {
            $model->alarmCount = $map['AlarmCount'];
        }

        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
        }

        if (isset($map['Endpoints'])) {
            $model->endpoints = $map['Endpoints'];
        }

        if (isset($map['HasRiskImageCount'])) {
            $model->hasRiskImageCount = $map['HasRiskImageCount'];
        }

        if (isset($map['HcCount'])) {
            $model->hcCount = $map['HcCount'];
        }

        if (isset($map['HcStatus'])) {
            $model->hcStatus = $map['HcStatus'];
        }

        if (isset($map['ImageCount'])) {
            $model->imageCount = $map['ImageCount'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RegistryType'])) {
            $model->registryType = $map['RegistryType'];
        }

        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }

        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }

        if (isset($map['RiskStatus'])) {
            $model->riskStatus = $map['RiskStatus'];
        }

        if (isset($map['VulCount'])) {
            $model->vulCount = $map['VulCount'];
        }

        if (isset($map['VulStatus'])) {
            $model->vulStatus = $map['VulStatus'];
        }

        return $model;
    }
}
