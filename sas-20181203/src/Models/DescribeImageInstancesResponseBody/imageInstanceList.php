<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class imageInstanceList extends Model
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
     * @example 1
     *
     * @var int
     */
    public $deployed;

    /**
     * @example a5ccdd9b166b67e02954aa9b618fe19b7968bd56a15463d2ad7f2643ba5b****
     *
     * @var string
     */
    public $digest;

    /**
     * @example []
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
     * @example 1600069948849
     *
     * @var string
     */
    public $imageCreate;

    /**
     * @example c20987f18b130f9d144c9828df630417e2a9523148930dc3963e9d0dab30****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example 1604487690
     *
     * @var string
     */
    public $imageSize;

    /**
     * @example 1600069948849
     *
     * @var string
     */
    public $imageUpdate;

    /**
     * @example 39010****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cn-hangzhou
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
     * @example f2b86d20bf0855af6aa268ce90fd****
     *
     * @var string
     */
    public $repoId;

    /**
     * @example sas-script-test
     *
     * @var string
     */
    public $repoName;

    /**
     * @example N/A
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @example private
     *
     * @var string
     */
    public $repoType;

    /**
     * @example NO
     *
     * @var string
     */
    public $riskStatus;

    /**
     * @example 100
     *
     * @var int
     */
    public $scaProgress;

    /**
     * @example TASK_NOT_SUPPORT_REGION
     *
     * @var string
     */
    public $scaResult;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $scaStatus;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
     * @example mysql_5.7
     *
     * @var string
     */
    public $tag;

    /**
     * @example 12f80307-60aa-4efa-863a-56d72fb****
     *
     * @var string
     */
    public $uuid;

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
        'deployed'      => 'Deployed',
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
        if (null !== $this->deployed) {
            $res['Deployed'] = $this->deployed;
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
        if (isset($map['Deployed'])) {
            $model->deployed = $map['Deployed'];
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
