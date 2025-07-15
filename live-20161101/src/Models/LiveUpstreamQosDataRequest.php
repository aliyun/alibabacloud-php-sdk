<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class LiveUpstreamQosDataRequest extends Model
{
    /**
     * @var string[]
     */
    public $cdnDomains;

    /**
     * @var string[]
     */
    public $cdnIsps;

    /**
     * @var string[]
     */
    public $cdnProvinces;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $kwaiSidcs;

    /**
     * @var int[]
     */
    public $kwaiTsc;

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
     * @description This parameter is required.
     *
     * @var string
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $upstreamDomains;
    protected $_name = [
        'cdnDomains' => 'CdnDomains',
        'cdnIsps' => 'CdnIsps',
        'cdnProvinces' => 'CdnProvinces',
        'endTime' => 'EndTime',
        'kwaiSidcs' => 'KwaiSidcs',
        'kwaiTsc' => 'KwaiTsc',
        'ownerId' => 'OwnerId',
        'region' => 'Region',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
        'upstreamDomains' => 'UpstreamDomains',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdnDomains) {
            $res['CdnDomains'] = $this->cdnDomains;
        }
        if (null !== $this->cdnIsps) {
            $res['CdnIsps'] = $this->cdnIsps;
        }
        if (null !== $this->cdnProvinces) {
            $res['CdnProvinces'] = $this->cdnProvinces;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->kwaiSidcs) {
            $res['KwaiSidcs'] = $this->kwaiSidcs;
        }
        if (null !== $this->kwaiTsc) {
            $res['KwaiTsc'] = $this->kwaiTsc;
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
        if (null !== $this->upstreamDomains) {
            $res['UpstreamDomains'] = $this->upstreamDomains;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LiveUpstreamQosDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdnDomains'])) {
            if (!empty($map['CdnDomains'])) {
                $model->cdnDomains = $map['CdnDomains'];
            }
        }
        if (isset($map['CdnIsps'])) {
            if (!empty($map['CdnIsps'])) {
                $model->cdnIsps = $map['CdnIsps'];
            }
        }
        if (isset($map['CdnProvinces'])) {
            if (!empty($map['CdnProvinces'])) {
                $model->cdnProvinces = $map['CdnProvinces'];
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['KwaiSidcs'])) {
            if (!empty($map['KwaiSidcs'])) {
                $model->kwaiSidcs = $map['KwaiSidcs'];
            }
        }
        if (isset($map['KwaiTsc'])) {
            if (!empty($map['KwaiTsc'])) {
                $model->kwaiTsc = $map['KwaiTsc'];
            }
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
            if (!empty($map['UpstreamDomains'])) {
                $model->upstreamDomains = $map['UpstreamDomains'];
            }
        }

        return $model;
    }
}
