<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class imageInstanceList extends Model
{
    /**
     * @description The number of alerts that are generated on the image.
     *
     * @example 0
     *
     * @var int
     */
    public $alarmCount;

    /**
     * @description Indicates whether alerts are generated for the image. Valid values:
     *
     *   **YES**
     *   **NO**
     *
     * @example NO
     *
     * @var string
     */
    public $alarmStatus;

    /**
     * @description Indicates whether the image was deployed. Valid values:
     *
     *   **0**: The image was not deployed.
     *   **1**: The image was deployed.
     *
     * @example 1
     *
     * @var int
     */
    public $deployed;

    /**
     * @description The digest value of the image.
     *
     * @example a5ccdd9b166b67e02954aa9b618fe19b7968bd56a15463d2ad7f2643ba5b****
     *
     * @var string
     */
    public $digest;

    /**
     * @description The address of the image.
     *
     * @example []
     *
     * @var string
     */
    public $endpoints;

    /**
     * @description The number of baseline risks.
     *
     * @example 0
     *
     * @var int
     */
    public $hcCount;

    /**
     * @description Indicates whether the image baseline risks exist. Valid values:
     *
     *   **NO**
     *   **YES**
     *
     * @example NO
     *
     * @var string
     */
    public $hcStatus;

    /**
     * @description The timestamp when the image was created. Unit: milliseconds.
     *
     * @example 1600069948849
     *
     * @var string
     */
    public $imageCreate;

    /**
     * @description The ID of the image.
     *
     * @example c20987f18b130f9d144c9828df630417e2a9523148930dc3963e9d0dab30****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The size of the image. Unit: MB.
     *
     * @example 1604487690
     *
     * @var string
     */
    public $imageSize;

    /**
     * @description The timestamp when the image was updated. Unit: milliseconds.
     *
     * @example 1600069948849
     *
     * @var string
     */
    public $imageUpdate;

    /**
     * @description The ID of the image instance.
     *
     * @example 39010****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the image.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the image. Valid values:
     *
     *   **acr**
     *   **harbor**
     *   **quay**
     *   **CI/CD**
     *
     * @example acr
     *
     * @var string
     */
    public $registryType;

    /**
     * @description The ID of the image repository.
     *
     * @example f2b86d20bf0855af6aa268ce90fd****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The name of the image repository.
     *
     * @example sas-script-test
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The namespace to which the image repository belongs.
     *
     * @example N/A
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @description The type of the repository. Valid values:
     *
     *   **private**
     *   **public**
     *
     * @example private
     *
     * @var string
     */
    public $repoType;

    /**
     * @description Indicates whether risks exist. Valid values:
     *
     *   **NO**: No risks exist.
     *   **YES**: Risks exist.
     *
     * @example NO
     *
     * @var string
     */
    public $riskStatus;

    /**
     * @description The scan progress of the image. Valid values: 0 to 100.
     *
     * @example 100
     *
     * @var int
     */
    public $scaProgress;

    /**
     * @description The error code of the image scan result. Valid values:
     *
     *   **TASK_NOT_EXISTS**: The image scan task does not exist.
     *   **TASK_NOT_SUPPORT_REGION**: The image scan task cannot be performed in the current region.
     *   **forbid_create_repeat_task**: The image scan task already exists.
     *
     * @example TASK_NOT_SUPPORT_REGION
     *
     * @var string
     */
    public $scaResult;

    /**
     * @description The scan status of the image. Valid values:
     *
     *   **INIT**: The image scan task is to be started.
     *   **START**: The image scan task is started.
     *   **MESSAGE_SEND**: The message about the image scan task is sent.
     *   **START_RUN**: The image scan task is started.
     *   **DOWNLOAD**: The image scan result is downloaded.
     *   **PRE_ANALYZER**: The image scan task is being processed.
     *   **WEB_SHELL_ANALYZER**: The WebShell analysis is complete.
     *   **CVE_ANALYZER**: The CVE analysis is complete.
     *   **BIN_ANALYZER**: The binary analysis of the image is complete.
     *   **OTHER_ANALYZER**: The extended analysis of the image is complete.
     *   **SUCCESS**: The image scan task is complete.
     *   **PRE_ANALYZER_SUCCESS**: The image scan task is processed.
     *   **FAIL**: The image scan task fails.
     *   **TIMEOUT**: The image scan task times out.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $scaStatus;

    /**
     * @description The status of the image. Valid values:
     *
     *   **NORMAL**: The image is normal.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag of the image.
     *
     * @example mysql_5.7
     *
     * @var string
     */
    public $tag;

    /**
     * @description The UUID of the server.
     *
     * @example 12f80307-60aa-4efa-863a-56d72fb****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The number of vulnerabilities in the image.
     *
     * @example 0
     *
     * @var int
     */
    public $vulCount;

    /**
     * @description Indicates whether vulnerabilities exist in the image. Valid values:
     *
     *   **YES**
     *   **NO**
     *
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
