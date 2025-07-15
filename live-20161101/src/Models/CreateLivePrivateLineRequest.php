<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateLivePrivateLineRequest extends Model
{
    /**
     * @description The acceleration channel.
     *
     * This parameter is required.
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
     * This parameter is required.
     *
     * @example play
     *
     * @var string
     */
    public $accelerationType;

    /**
     * @description The name of the application.
     *
     * This parameter is required.
     *
     * @example live
     *
     * @var string
     */
    public $appName;

    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The acceleration channel that you want to reuse. This parameter is required if Reuse is set to yes.
     *
     * @example ga-bp1iovsdpf01ym9su****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The accelerated bandwidth. Unit: Mbit/s. This parameter is required if Reuse is set to no.
     *
     * @example 200
     *
     * @var string
     */
    public $maxBandwidth;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to reuse an existing acceleration channel. Valid values:
     *
     *   yes: reuses an existing acceleration channel.
     *   no: creates a new acceleration channel.
     *
     * This parameter is required.
     *
     * @example no
     *
     * @var string
     */
    public $reuse;

    /**
     * @description The name of the live stream.
     *
     * This parameter is required.
     *
     * @example testStream
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The live center. Valid values: cn-beijing, cn-shanghai, cn-shenzhen, cn-qingdao, ap-northeast-1, ap-southeast-5, eu-central-1, and ap-southeast-1, which indicate China (Beijing), China (Shanghai), China (Shenzhen), China (Qingdao), Japan (Tokyo), Indonesia (Jakarta), Germany (Frankfurt), and Singapore, respectively.
     *
     * This parameter is required.
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
        'domainName' => 'DomainName',
        'instanceId' => 'InstanceId',
        'maxBandwidth' => 'MaxBandwidth',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'reuse' => 'Reuse',
        'streamName' => 'StreamName',
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxBandwidth) {
            $res['MaxBandwidth'] = $this->maxBandwidth;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reuse) {
            $res['Reuse'] = $this->reuse;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->videoCenter) {
            $res['VideoCenter'] = $this->videoCenter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLivePrivateLineRequest
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxBandwidth'])) {
            $model->maxBandwidth = $map['MaxBandwidth'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Reuse'])) {
            $model->reuse = $map['Reuse'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['VideoCenter'])) {
            $model->videoCenter = $map['VideoCenter'];
        }

        return $model;
    }
}
