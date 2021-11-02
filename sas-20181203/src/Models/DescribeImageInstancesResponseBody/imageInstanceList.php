<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class imageInstanceList extends Model
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
    public $digest;

    /**
     * @var string
     */
    public $endpoints;

    /**
     * @var int
     */
    public $hcCount;

    /**
     * @var string
     */
    public $hcStatus;

    /**
     * @var string
     */
    public $imageCreate;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageSize;

    /**
     * @var string
     */
    public $imageUpdate;

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
    public $repoType;

    /**
     * @var string
     */
    public $riskStatus;

    /**
     * @var int
     */
    public $scaProgress;

    /**
     * @var string
     */
    public $scaResult;

    /**
     * @var string
     */
    public $scaStatus;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var int
     */
    public $vulCount;

    /**
     * @var string
     */
    public $vulStatus;
    protected $_name = [
        'alarmCount'    => 'AlarmCount',
        'alarmStatus'   => 'AlarmStatus',
        'digest'        => 'Digest',
        'endpoints'     => 'Endpoints',
        'hcCount'       => 'HcCount',
        'hcStatus'      => 'HcStatus',
        'imageCreate'   => 'ImageCreate',
        'imageId'       => 'ImageId',
        'imageSize'     => 'ImageSize',
        'imageUpdate'   => 'ImageUpdate',
        'instanceId'    => 'InstanceId',
        'regionId'      => 'RegionId',
        'registryType'  => 'RegistryType',
        'repoId'        => 'RepoId',
        'repoName'      => 'RepoName',
        'repoNamespace' => 'RepoNamespace',
        'repoType'      => 'RepoType',
        'riskStatus'    => 'RiskStatus',
        'scaProgress'   => 'ScaProgress',
        'scaResult'     => 'ScaResult',
        'scaStatus'     => 'ScaStatus',
        'status'        => 'Status',
        'tag'           => 'Tag',
        'uuid'          => 'Uuid',
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
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
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
        if (null !== $this->imageCreate) {
            $res['ImageCreate'] = $this->imageCreate;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
        }
        if (null !== $this->imageUpdate) {
            $res['ImageUpdate'] = $this->imageUpdate;
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
        if (null !== $this->repoType) {
            $res['RepoType'] = $this->repoType;
        }
        if (null !== $this->riskStatus) {
            $res['RiskStatus'] = $this->riskStatus;
        }
        if (null !== $this->scaProgress) {
            $res['ScaProgress'] = $this->scaProgress;
        }
        if (null !== $this->scaResult) {
            $res['ScaResult'] = $this->scaResult;
        }
        if (null !== $this->scaStatus) {
            $res['ScaStatus'] = $this->scaStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
     * @return imageInstanceList
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
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
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
        if (isset($map['ImageCreate'])) {
            $model->imageCreate = $map['ImageCreate'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }
        if (isset($map['ImageUpdate'])) {
            $model->imageUpdate = $map['ImageUpdate'];
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
        if (isset($map['RepoType'])) {
            $model->repoType = $map['RepoType'];
        }
        if (isset($map['RiskStatus'])) {
            $model->riskStatus = $map['RiskStatus'];
        }
        if (isset($map['ScaProgress'])) {
            $model->scaProgress = $map['ScaProgress'];
        }
        if (isset($map['ScaResult'])) {
            $model->scaResult = $map['ScaResult'];
        }
        if (isset($map['ScaStatus'])) {
            $model->scaStatus = $map['ScaStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
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
