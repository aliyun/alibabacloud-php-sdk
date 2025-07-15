<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLivePrivateLineAvailGARequest extends Model
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
     * @description The name of the application.
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
     * @description Specifies whether to query Global Accelerator (GA) instances. Valid values:
     *
     *   yes: queries the status of GA instances.
     *   no: queries the binding information between GA instances and acceleration circuits.
     *
     * This parameter is required.
     *
     * @example no
     *
     * @var string
     */
    public $isGaInstance;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the live stream.
     *
     * @example testStream
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The live center. Valid values: cn-beijing, cn-shanghai, cn-shenzhen, cn-qingdao, ap-northeast-1, ap-southeast-5, eu-central-1, ap-southeast-1, and ap-south-1. cn-beijing indicates China (Beijing). cn-shanghai indicates China (Shanghai). cn-shenzhen indicates China (Shenzhen). cn-qingdao indicates China (Qingdao). ap-northeast-1 indicates Japan (Tokyo). ap-southeast-5 indicates Indonesia (Jakarta). eu-central-1 indicates Germany (Frankfurt). ap-southeast-1 indicates Singapore.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $videoCenter;
    protected $_name = [
        'accelerationArea' => 'AccelerationArea',
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'isGaInstance' => 'IsGaInstance',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->isGaInstance) {
            $res['IsGaInstance'] = $this->isGaInstance;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return DescribeLivePrivateLineAvailGARequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerationArea'])) {
            $model->accelerationArea = $map['AccelerationArea'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['IsGaInstance'])) {
            $model->isGaInstance = $map['IsGaInstance'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
