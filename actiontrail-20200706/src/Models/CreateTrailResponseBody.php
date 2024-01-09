<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class CreateTrailResponseBody extends Model
{
    /**
     * @description The read/write type of the events to be delivered.
     *
     * @example Write
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
     * @example trail-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the OSS bucket to which events are to be delivered.
     *
     * @example audit-log
     *
     * @var string
     */
    public $ossBucketName;

    /**
     * @description The prefix of the log files to be stored in the destination OSS bucket.
     *
     * @example at-product-account-audit-B
     *
     * @var string
     */
    public $ossKeyPrefix;

    /**
     * @description The ARN of the service-linked role that is assumed by ActionTrail to deliver events to the destination OSS bucket.
     *
     * @example acs:ram::***:role/aliyunserviceroleforactiontrail
     *
     * @var string
     */
    public $ossWriteRoleArn;

    /**
     * @description The ID of the request.
     *
     * @example 442DDADF-DA58-4029-8E8B-82C73E9A7A70
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ARN of the Log Service project to which events are to be delivered.
     *
     * @example acs:log:cn-hangzhou:151266687691****:project/test-project
     *
     * @var string
     */
    public $slsProjectArn;

    /**
     * @description The ARN of the service-linked role that is assumed by ActionTrail to deliver events to the destination Log Service project.
     *
     * @example acs:ram::***:role/aliyunserviceroleforactiontrail
     *
     * @var string
     */
    public $slsWriteRoleArn;

    /**
     * @description The one or more regions from which the trail delivers events.
     *
     * @example All
     *
     * @var string
     */
    public $trailRegion;
    protected $_name = [
        'eventRW'                => 'EventRW',
        'homeRegion'             => 'HomeRegion',
        'maxComputeProjectArn'   => 'MaxComputeProjectArn',
        'maxComputeWriteRoleArn' => 'MaxComputeWriteRoleArn',
        'name'                   => 'Name',
        'ossBucketName'          => 'OssBucketName',
        'ossKeyPrefix'           => 'OssKeyPrefix',
        'ossWriteRoleArn'        => 'OssWriteRoleArn',
        'requestId'              => 'RequestId',
        'slsProjectArn'          => 'SlsProjectArn',
        'slsWriteRoleArn'        => 'SlsWriteRoleArn',
        'trailRegion'            => 'TrailRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventRW) {
            $res['EventRW'] = $this->eventRW;
        }
        if (null !== $this->homeRegion) {
            $res['HomeRegion'] = $this->homeRegion;
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
        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }
        if (null !== $this->ossKeyPrefix) {
            $res['OssKeyPrefix'] = $this->ossKeyPrefix;
        }
        if (null !== $this->ossWriteRoleArn) {
            $res['OssWriteRoleArn'] = $this->ossWriteRoleArn;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slsProjectArn) {
            $res['SlsProjectArn'] = $this->slsProjectArn;
        }
        if (null !== $this->slsWriteRoleArn) {
            $res['SlsWriteRoleArn'] = $this->slsWriteRoleArn;
        }
        if (null !== $this->trailRegion) {
            $res['TrailRegion'] = $this->trailRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventRW'])) {
            $model->eventRW = $map['EventRW'];
        }
        if (isset($map['HomeRegion'])) {
            $model->homeRegion = $map['HomeRegion'];
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
        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }
        if (isset($map['OssKeyPrefix'])) {
            $model->ossKeyPrefix = $map['OssKeyPrefix'];
        }
        if (isset($map['OssWriteRoleArn'])) {
            $model->ossWriteRoleArn = $map['OssWriteRoleArn'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlsProjectArn'])) {
            $model->slsProjectArn = $map['SlsProjectArn'];
        }
        if (isset($map['SlsWriteRoleArn'])) {
            $model->slsWriteRoleArn = $map['SlsWriteRoleArn'];
        }
        if (isset($map['TrailRegion'])) {
            $model->trailRegion = $map['TrailRegion'];
        }

        return $model;
    }
}
