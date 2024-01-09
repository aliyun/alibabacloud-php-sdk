<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeTrailsResponseBody;

use AlibabaCloud\Tea\Model;

class trailList extends Model
{
    /**
     * @description The time when the trail was created.
     *
     * @example 2021-03-01T06:27:28Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The read/write type of the events that are delivered. Valid values:
     *
     *   Write: write events. This is the default value.
     *   Read: read events.
     *   All: read and write events.
     *
     * @example All
     *
     * @var string
     */
    public $eventRW;

    /**
     * @description The home region of the trail.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $homeRegion;

    /**
     * @description Indicates whether the trail is a multi-account trail. Valid values:
     *
     *   false (default)
     *   true
     *
     * @example false
     *
     * @var bool
     */
    public $isOrganizationTrail;

    /**
     * @var string
     */
    public $maxComputeProjectArn;

    /**
     * @var string
     */
    public $maxComputeWriteRoleArn;

    /**
     * @description The name of the trail.
     *
     * @example test-4
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the resource directory.
     *
     * >  This parameter is returned only when the trail is a multi-account trail.
     * @example rd-EV****
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description The region where the OSS bucket resides.
     *
     * @example oss-cn-hangzhou
     *
     * @var string
     */
    public $ossBucketLocation;

    /**
     * @description The name of the OSS bucket to which events are delivered.
     *
     * @example secloud
     *
     * @var string
     */
    public $ossBucketName;

    /**
     * @description The prefix of the files that are stored in the Object Storage Service (OSS) bucket.
     *
     * @example trail1
     *
     * @var string
     */
    public $ossKeyPrefix;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the RAM role that is assumed by ActionTrail to deliver events to the OSS bucket.
     *
     * @example acs:ram::***:role/aliyunserviceroleforactiontrail
     *
     * @var string
     */
    public $ossWriteRoleArn;

    /**
     * @description The region where the trail resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The ARN of the Log Service project to which events are delivered.
     *
     * @example acs:log:cn-qingdao:159498693826****:project/zhengze-audit-log
     *
     * @var string
     */
    public $slsProjectArn;

    /**
     * @description The ARN of the RAM role that is assumed by ActionTrail to deliver events to the Log Service project.
     *
     * @example acs:ram::159498693826****:role/aliyunserviceroleforactiontrail
     *
     * @var string
     */
    public $slsWriteRoleArn;

    /**
     * @description The time when the trail was last enabled.
     *
     * @example 2021-04-06T02:08:38Z
     *
     * @var string
     */
    public $startLoggingTime;

    /**
     * @description The status of the trail. Valid values:
     *
     *   Disable: disabled.
     *   Enable: enabled.
     *   Fresh: The trail is created but is not enabled.
     *
     * @example Enable
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the trail was last disabled.
     *
     * @example 2021-04-06T02:09:04Z
     *
     * @var string
     */
    public $stopLoggingTime;

    /**
     * @description The ARN of the trail.
     *
     * @example acs:actiontrail:cn-hangzhou:159498693826****:trail/test-delivery-other
     *
     * @var string
     */
    public $trailArn;

    /**
     * @description The region of the trail.
     *
     * @example All
     *
     * @var string
     */
    public $trailRegion;

    /**
     * @description The time when the configurations of the trail were last updated.
     *
     * @example 2021-04-06T02:16:24Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'             => 'CreateTime',
        'eventRW'                => 'EventRW',
        'homeRegion'             => 'HomeRegion',
        'isOrganizationTrail'    => 'IsOrganizationTrail',
        'maxComputeProjectArn'   => 'MaxComputeProjectArn',
        'maxComputeWriteRoleArn' => 'MaxComputeWriteRoleArn',
        'name'                   => 'Name',
        'organizationId'         => 'OrganizationId',
        'ossBucketLocation'      => 'OssBucketLocation',
        'ossBucketName'          => 'OssBucketName',
        'ossKeyPrefix'           => 'OssKeyPrefix',
        'ossWriteRoleArn'        => 'OssWriteRoleArn',
        'region'                 => 'Region',
        'slsProjectArn'          => 'SlsProjectArn',
        'slsWriteRoleArn'        => 'SlsWriteRoleArn',
        'startLoggingTime'       => 'StartLoggingTime',
        'status'                 => 'Status',
        'stopLoggingTime'        => 'StopLoggingTime',
        'trailArn'               => 'TrailArn',
        'trailRegion'            => 'TrailRegion',
        'updateTime'             => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->eventRW) {
            $res['EventRW'] = $this->eventRW;
        }
        if (null !== $this->homeRegion) {
            $res['HomeRegion'] = $this->homeRegion;
        }
        if (null !== $this->isOrganizationTrail) {
            $res['IsOrganizationTrail'] = $this->isOrganizationTrail;
        }
        if (null !== $this->maxComputeProjectArn) {
            $res['MaxComputeProjectArn'] = $this->maxComputeProjectArn;
        }
        if (null !== $this->maxComputeWriteRoleArn) {
            $res['MaxComputeWriteRoleArn'] = $this->maxComputeWriteRoleArn;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->ossBucketLocation) {
            $res['OssBucketLocation'] = $this->ossBucketLocation;
        }
        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }
        if (null !== $this->ossKeyPrefix) {
            $res['OssKeyPrefix'] = $this->ossKeyPrefix;
        }
        if (null !== $this->ossWriteRoleArn) {
            $res['OssWriteRoleArn'] = $this->ossWriteRoleArn;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->slsProjectArn) {
            $res['SlsProjectArn'] = $this->slsProjectArn;
        }
        if (null !== $this->slsWriteRoleArn) {
            $res['SlsWriteRoleArn'] = $this->slsWriteRoleArn;
        }
        if (null !== $this->startLoggingTime) {
            $res['StartLoggingTime'] = $this->startLoggingTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stopLoggingTime) {
            $res['StopLoggingTime'] = $this->stopLoggingTime;
        }
        if (null !== $this->trailArn) {
            $res['TrailArn'] = $this->trailArn;
        }
        if (null !== $this->trailRegion) {
            $res['TrailRegion'] = $this->trailRegion;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EventRW'])) {
            $model->eventRW = $map['EventRW'];
        }
        if (isset($map['HomeRegion'])) {
            $model->homeRegion = $map['HomeRegion'];
        }
        if (isset($map['IsOrganizationTrail'])) {
            $model->isOrganizationTrail = $map['IsOrganizationTrail'];
        }
        if (isset($map['MaxComputeProjectArn'])) {
            $model->maxComputeProjectArn = $map['MaxComputeProjectArn'];
        }
        if (isset($map['MaxComputeWriteRoleArn'])) {
            $model->maxComputeWriteRoleArn = $map['MaxComputeWriteRoleArn'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['OssBucketLocation'])) {
            $model->ossBucketLocation = $map['OssBucketLocation'];
        }
        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }
        if (isset($map['OssKeyPrefix'])) {
            $model->ossKeyPrefix = $map['OssKeyPrefix'];
        }
        if (isset($map['OssWriteRoleArn'])) {
            $model->ossWriteRoleArn = $map['OssWriteRoleArn'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SlsProjectArn'])) {
            $model->slsProjectArn = $map['SlsProjectArn'];
        }
        if (isset($map['SlsWriteRoleArn'])) {
            $model->slsWriteRoleArn = $map['SlsWriteRoleArn'];
        }
        if (isset($map['StartLoggingTime'])) {
            $model->startLoggingTime = $map['StartLoggingTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StopLoggingTime'])) {
            $model->stopLoggingTime = $map['StopLoggingTime'];
        }
        if (isset($map['TrailArn'])) {
            $model->trailArn = $map['TrailArn'];
        }
        if (isset($map['TrailRegion'])) {
            $model->trailRegion = $map['TrailRegion'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
