<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class LiveUpstreamQosDataShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $cdnDomainsShrink;

    /**
     * @var string
     */
    public $cdnIspsShrink;

    /**
     * @var string
     */
    public $cdnProvincesShrink;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $kwaiSidcsShrink;

    /**
     * @var string
     */
    public $kwaiTscShrink;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $upstreamDomainsShrink;
    protected $_name = [
        'cdnDomainsShrink' => 'CdnDomains',
        'cdnIspsShrink' => 'CdnIsps',
        'cdnProvincesShrink' => 'CdnProvinces',
        'endTime' => 'EndTime',
        'kwaiSidcsShrink' => 'KwaiSidcs',
        'kwaiTscShrink' => 'KwaiTsc',
        'ownerId' => 'OwnerId',
        'region' => 'Region',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
        'upstreamDomainsShrink' => 'UpstreamDomains',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdnDomainsShrink) {
            $res['CdnDomains'] = $this->cdnDomainsShrink;
        }

        if (null !== $this->cdnIspsShrink) {
            $res['CdnIsps'] = $this->cdnIspsShrink;
        }

        if (null !== $this->cdnProvincesShrink) {
            $res['CdnProvinces'] = $this->cdnProvincesShrink;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->kwaiSidcsShrink) {
            $res['KwaiSidcs'] = $this->kwaiSidcsShrink;
        }

        if (null !== $this->kwaiTscShrink) {
            $res['KwaiTsc'] = $this->kwaiTscShrink;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->upstreamDomainsShrink) {
            $res['UpstreamDomains'] = $this->upstreamDomainsShrink;
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
        if (isset($map['CdnDomains'])) {
            $model->cdnDomainsShrink = $map['CdnDomains'];
        }

        if (isset($map['CdnIsps'])) {
            $model->cdnIspsShrink = $map['CdnIsps'];
        }

        if (isset($map['CdnProvinces'])) {
            $model->cdnProvincesShrink = $map['CdnProvinces'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['KwaiSidcs'])) {
            $model->kwaiSidcsShrink = $map['KwaiSidcs'];
        }

        if (isset($map['KwaiTsc'])) {
            $model->kwaiTscShrink = $map['KwaiTsc'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UpstreamDomains'])) {
            $model->upstreamDomainsShrink = $map['UpstreamDomains'];
        }

        return $model;
    }
}
