<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class UpdateTrailRequest extends Model
{
    /**
     * @description The read/write type of the events to be delivered. Valid values:
     *
     *   Write: write events. It is the default value.
     *   Read: read events.
     *   All: read and write events.
     *
     * @example All
     *
     * @var string
     */
    public $eventRW;

    /**
     * @description The name of the trail whose configurations you want to update.
     *
     * >  The name must be unique within an Alibaba Cloud account.
     * @example trail-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the Object Storage Service (OSS) bucket to which you want to deliver events.
     *
     * >  Make sure that the bucket exists before you update the configuration of the trail.
     * @example audit-log
     *
     * @var string
     */
    public $ossBucketName;

    /**
     * @description The prefix of the files that are stored in the OSS bucket.
     *
     * The prefix must be 6 to 32 characters in length. The prefix must start with a letter and can contain letters, digits, hyphens (-), forward slashes (/), and underscores (\_).
     * @example at-product-account-audit-B
     *
     * @var string
     */
    public $ossKeyPrefix;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the RAM role that is assumed by ActionTrail to deliver events to the OSS bucket.
     *
     *   If you do not specify this parameter, ActionTrail creates a service-linked role to create the required resources. For more information, see [Manage the service-linked role](~~169244~~).
     *   If you specify this parameter, you must grant the permissions of the service-linked role that is assumed by ActionTrail to the RAM role before you can deliver events to your Alibaba Cloud account. If you need to deliver events to other Alibaba Cloud accounts, you must attach the permission policy that is used to grant permissions related to event delivery to the RAM role. For more information about how to deliver events across Alibaba Cloud accounts, see [Deliver events across Alibaba Cloud accounts](~~207462~~).
     *
     * @example acs:ram::***:role/aliyunserviceroleforactiontrail
     *
     * @var string
     */
    public $ossWriteRoleArn;

    /**
     * @description The ARN of the Log Service project to which you want to deliver events.
     *
     * @example acs:log:cn-shanghai::project/***
     *
     * @var string
     */
    public $slsProjectArn;

    /**
     * @description The ARN of the RAM role that is assumed by ActionTrail to deliver events to the Log Service project.
     *
     *   If you do not specify this parameter, ActionTrail creates a service-linked role to create the corresponding resource. For more information, see [Manage the service-linked role](~~169244~~).
     *   If you specify this parameter, you must grant the permissions of the service-linked role that is assumed by ActionTrail to the RAM role before you can deliver events to your Alibaba Cloud account. If you need to deliver events to other Alibaba Cloud accounts, you must attach the permission policy that is used to grant permissions related to event delivery to the RAM role. For more information about how to deliver events across Alibaba Cloud accounts, see [Deliver events across Alibaba Cloud accounts](~~207462~~).
     *
     * @example acs:ram::***:role/aliyunserviceroleforactiontrail
     *
     * @var string
     */
    public $slsWriteRoleArn;

    /**
     * @description The region of the trail.
     *
     *   The default value is All, which indicates that the trail delivers events from all regions.
     *
     * You can also specify specific regions. You can call the [DescribeRegions](~~213597~~) operation to query all the supported regions.
     * @example All
     *
     * @var string
     */
    public $trailRegion;
    protected $_name = [
        'eventRW'         => 'EventRW',
        'name'            => 'Name',
        'ossBucketName'   => 'OssBucketName',
        'ossKeyPrefix'    => 'OssKeyPrefix',
        'ossWriteRoleArn' => 'OssWriteRoleArn',
        'slsProjectArn'   => 'SlsProjectArn',
        'slsWriteRoleArn' => 'SlsWriteRoleArn',
        'trailRegion'     => 'TrailRegion',
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
     * @return UpdateTrailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventRW'])) {
            $model->eventRW = $map['EventRW'];
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
