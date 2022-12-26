<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoDetailListResponseBody;

use AlibabaCloud\Tea\Model;

class imageRepoResponses extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $alarmCount;

    /**
     * @example NO
     *
     * @var string
     */
    public $alarmStatus;

    /**
     * @example [{"domains":["mucfc-test-registry-registry.cn-shenzhen.cr.aliyuncs.com"],"type":"internet"},{"domains":["mucfc-test-registry-registry-intranet.cn-shenzhen.cr.aliyuncs.com"],"type":"intranet"},{"domains":["mucfc-test-registry-registry-vpc.cn-shenzhen.cr.aliyuncs.com"],"type":"vpc"}]
     *
     * @var string
     */
    public $endpoints;

    /**
     * @example 0
     *
     * @var int
     */
    public $hcCount;

    /**
     * @example NO
     *
     * @var string
     */
    public $hcStatus;

    /**
     * @example 3
     *
     * @var int
     */
    public $imageCount;

    /**
     * @example i-uf6fsg6xlmorug5****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example acr
     *
     * @var string
     */
    public $registryType;

    /**
     * @example crr-2chlzf47w2rk****
     *
     * @var string
     */
    public $repoId;

    /**
     * @example zeus
     *
     * @var string
     */
    public $repoName;

    /**
     * @example test-dev
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @example NO
     *
     * @var string
     */
    public $riskStatus;

    /**
     * @example 0
     *
     * @var int
     */
    public $vulCount;

    /**
     * @example NO
     *
     * @var string
     */
    public $vulStatus;
    protected $_name = [
        'alarmCount'    => 'AlarmCount',
        'alarmStatus'   => 'AlarmStatus',
        'endpoints'     => 'Endpoints',
        'hcCount'       => 'HcCount',
        'hcStatus'      => 'HcStatus',
        'imageCount'    => 'ImageCount',
        'instanceId'    => 'InstanceId',
        'regionId'      => 'RegionId',
        'registryType'  => 'RegistryType',
        'repoId'        => 'RepoId',
        'repoName'      => 'RepoName',
        'repoNamespace' => 'RepoNamespace',
        'riskStatus'    => 'RiskStatus',
        'vulCount'      => 'VulCount',
        'vulStatus'     => 'VulStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return imageRepoResponses
     */
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
