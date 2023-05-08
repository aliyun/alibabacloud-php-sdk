<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageInfoListResponseBody;

use AlibabaCloud\Tea\Model;

class imageInfos extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $alarmCount;

    /**
     * @example YES
     *
     * @var string
     */
    public $alarmStatus;

    /**
     * @example a3521b04dfdd1361a24be6263f2983cf12ba910989f4d9f7324da7e1e89f****
     *
     * @var string
     */
    public $digest;

    /**
     * @example cn-hangzhou-x7
     *
     * @var string
     */
    public $endpoints;

    /**
     * @example 1636962328000
     *
     * @var int
     */
    public $imageCreate;

    /**
     * @example bb0175afea16138815a8900adeeb0315d88a83a2376eeffa14db1d693a15****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example 157408623
     *
     * @var int
     */
    public $imageSize;

    /**
     * @example 1636974116000
     *
     * @var int
     */
    public $imageUpdate;

    /**
     * @example i-wz95abw6pa7y79ve****
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
     * @example harbor
     *
     * @var string
     */
    public $registryType;

    /**
     * @example crr-5qk9v2rdt0s****
     *
     * @var string
     */
    public $repoId;

    /**
     * @example opa-test
     *
     * @var string
     */
    public $repoName;

    /**
     * @example libssh2
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $repoType;

    /**
     * @example YES
     *
     * @var string
     */
    public $riskStatus;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
     * @example v1
     *
     * @var string
     */
    public $tag;

    /**
     * @example 0
     *
     * @var int
     */
    public $tagImmutable;

    /**
     * @example ff9ca084-7faa-4ab2-8728-69024755****
     *
     * @var string
     */
    public $uuid;

    /**
     * @example 1
     *
     * @var int
     */
    public $vulCount;

    /**
     * @example YES
     *
     * @var string
     */
    public $vulStatus;
    protected $_name = [
        'alarmCount'    => 'AlarmCount',
        'alarmStatus'   => 'AlarmStatus',
        'digest'        => 'Digest',
        'endpoints'     => 'Endpoints',
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
        'status'        => 'Status',
        'tag'           => 'Tag',
        'tagImmutable'  => 'TagImmutable',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->tagImmutable) {
            $res['TagImmutable'] = $this->tagImmutable;
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
     * @return imageInfos
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TagImmutable'])) {
            $model->tagImmutable = $map['TagImmutable'];
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
