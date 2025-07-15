<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetLiveStreamPreloadTasksRequest extends Model
{
    /**
     * @description The acceleration region where you want to prefetch the live content. Valid values:
     *
     *   domestic: regions in the Chinese mainland.
     *   overseas: regions outside the Chinese mainland.
     *   global: regions in and outside the Chinese mainland.
     *
     * If you do not specify this parameter, the acceleration region configured for the domain name is used.
     *
     * @example domestic
     *
     * @var string
     */
    public $area;

    /**
     * @description The streaming domain name.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The streaming URL. You can specify up to 100 streaming URLs in a request. Separate multiple streaming URLs with commas (,).
     *
     * This parameter is required.
     *
     * @var string
     */
    public $playUrl;

    /**
     * @description The end time of the prefetch task. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. Example: 2016-06-30T19:00:00Z. The interval between the start time and end time cannot exceed 6 hours.
     *
     * @example 2016-06-30T19:00:00Z
     *
     * @var string
     */
    public $preloadedEndTime;

    /**
     * @description The start time of the prefetch task. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. Example: 2016-06-29T19:00:00Z. If you do not specify this parameter, the prefetch task runs for 1 hour by default.
     *
     * @example 2016-06-29T19:00:00Z
     *
     * @var string
     */
    public $preloadedStartTime;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'area' => 'Area',
        'domainName' => 'DomainName',
        'ownerId' => 'OwnerId',
        'playUrl' => 'PlayUrl',
        'preloadedEndTime' => 'PreloadedEndTime',
        'preloadedStartTime' => 'PreloadedStartTime',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->playUrl) {
            $res['PlayUrl'] = $this->playUrl;
        }
        if (null !== $this->preloadedEndTime) {
            $res['PreloadedEndTime'] = $this->preloadedEndTime;
        }
        if (null !== $this->preloadedStartTime) {
            $res['PreloadedStartTime'] = $this->preloadedStartTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLiveStreamPreloadTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PlayUrl'])) {
            $model->playUrl = $map['PlayUrl'];
        }
        if (isset($map['PreloadedEndTime'])) {
            $model->preloadedEndTime = $map['PreloadedEndTime'];
        }
        if (isset($map['PreloadedStartTime'])) {
            $model->preloadedStartTime = $map['PreloadedStartTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
