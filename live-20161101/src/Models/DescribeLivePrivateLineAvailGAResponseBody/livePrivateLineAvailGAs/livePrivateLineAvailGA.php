<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAvailGAResponseBody\livePrivateLineAvailGAs;

use AlibabaCloud\Tea\Model;

class livePrivateLineAvailGA extends Model
{
    /**
     * @description The acceleration channel.
     *
     * @example ap-southeast-1
     *
     * @var string
     */
    public $accelerationArea;

    /**
     * @description The acceleration type. Valid values:
     *
     *   play: streaming acceleration
     *   publish: stream ingest acceleration
     *
     * @example play
     *
     * @var string
     */
    public $accelerationType;

    /**
     * @description The name of the application.
     *
     * @example live
     *
     * @var string
     */
    public $appName;

    /**
     * @description Indicates whether the GA instance is bound to an acceleration circuit. Valid values:
     *
     *   yes
     *   no
     *
     * @example yes
     *
     * @var string
     */
    public $bindingStatus;

    /**
     * @description The main streaming domain.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The accelerated IP address.
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $IP;

    /**
     * @description The ID of the GA instance.
     *
     * @example ga-bp1iovsdpf01ym9su****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the GA instance. Valid values:
     *
     *   active: The GA instance is available.
     *   inactive: The GA instance is unavailable.
     *
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the live stream.
     *
     * @example testStream
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The user ID (UID).
     *
     * @example 1833220971116****
     *
     * @var string
     */
    public $uid;

    /**
     * @description The live center.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $videoCenter;
    protected $_name = [
        'accelerationArea' => 'AccelerationArea',
        'accelerationType' => 'AccelerationType',
        'appName' => 'AppName',
        'bindingStatus' => 'BindingStatus',
        'domainName' => 'DomainName',
        'IP' => 'IP',
        'instanceId' => 'InstanceId',
        'status' => 'Status',
        'streamName' => 'StreamName',
        'uid' => 'Uid',
        'videoCenter' => 'VideoCenter',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerationArea) {
            $res['AccelerationArea'] = $this->accelerationArea;
        }
        if (null !== $this->accelerationType) {
            $res['AccelerationType'] = $this->accelerationType;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->bindingStatus) {
            $res['BindingStatus'] = $this->bindingStatus;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->videoCenter) {
            $res['VideoCenter'] = $this->videoCenter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return livePrivateLineAvailGA
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerationArea'])) {
            $model->accelerationArea = $map['AccelerationArea'];
        }
        if (isset($map['AccelerationType'])) {
            $model->accelerationType = $map['AccelerationType'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BindingStatus'])) {
            $model->bindingStatus = $map['BindingStatus'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['VideoCenter'])) {
            $model->videoCenter = $map['VideoCenter'];
        }

        return $model;
    }
}
