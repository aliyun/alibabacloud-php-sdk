<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageListByBuildRiskResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The digest value of the image.
     *
     * @example a5ccdd9b166b67e02954aa9b618fe19b7968bd56a15463d2ad7f2643ba5b****
     *
     * @var string
     */
    public $digest;

    /**
     * @description The timestamp generated when the first scan was performed. Unit: milliseconds.
     *
     * @example 1723710827000
     *
     * @var int
     */
    public $firstScanTime;

    /**
     * @description The instance ID of the image repository.
     *
     * @example 39010****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The timestamp generated when the last scan was performed. Unit: milliseconds.
     *
     * @example 1723710827999
     *
     * @var int
     */
    public $lastScanTime;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the image repository.
     *
     * @example test-tepo
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The namespace to which the image repository belongs.
     *
     * @example namespace
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @description The risk level. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example medium
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The status of the alert event. Valid values:
     *
     *   **0**: unhandled.
     *   **1**: ignored.
     *   **2**: false positive.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The tag of the image.
     *
     * @example v1
     *
     * @var string
     */
    public $tag;

    /**
     * @description The UUID of the image.
     *
     * @example 6ec898e6274f942e0e4a053eff1c****
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
        'status'        => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return list_
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
