<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class DescribeLivePrivateLineAvailGARequest extends Model
{
    /**
     * @var string
     */
    public $accelerationArea;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $domainName;

    /**
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
     * @var string
     */
    public $streamName;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
