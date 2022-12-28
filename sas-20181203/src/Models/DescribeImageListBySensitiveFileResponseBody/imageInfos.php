<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageListBySensitiveFileResponseBody;

use AlibabaCloud\Tea\Model;

class imageInfos extends Model
{
    /**
     * @description The image digest.
     *
     * @example v005
     *
     * @var string
     */
    public $digest;

    /**
     * @description The UNIX timestamp of when the first scan was performed. Unit: milliseconds.
     *
     * @example 1649814050000
     *
     * @var int
     */
    public $firstScanTime;

    /**
     * @description The ID of the image instance.
     *
     * @example cri-a595qp31knh9****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The UNIX timestamp of when the last scan was performed. Unit: milliseconds.
     *
     * @example 1649814050000
     *
     * @var int
     */
    public $lastScanTime;

    /**
     * @description The region ID of the image instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the image repository.
     *
     * @example opa-test
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The namespace to which the image repository belongs.
     *
     * @example libssh2
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @description The risk level. Valid values:
     * - **high**
     * - **medium**
     * - **low**
     * @example low
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The tag that is added to the image.
     *
     * @example nuxeo6
     *
     * @var string
     */
    public $tag;

    /**
     * @description The UUID of the image.
     *
     * @example f58681174f944623345379e23b7b****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'digest'        => 'Digest',
        'firstScanTime' => 'FirstScanTime',
        'instanceId'    => 'InstanceId',
        'lastScanTime'  => 'LastScanTime',
        'regionId'      => 'RegionId',
        'repoName'      => 'RepoName',
        'repoNamespace' => 'RepoNamespace',
        'riskLevel'     => 'RiskLevel',
        'tag'           => 'Tag',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->firstScanTime) {
            $res['FirstScanTime'] = $this->firstScanTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['FirstScanTime'])) {
            $model->firstScanTime = $map['FirstScanTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
