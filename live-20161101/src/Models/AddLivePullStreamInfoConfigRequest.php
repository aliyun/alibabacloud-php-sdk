<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLivePullStreamInfoConfigRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs. This parameter is determined by you.
     *
     * This parameter is required.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The domain name used for stream pulling. It is the main streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The time when stream pulling ends.
     *
     * The time range specified by the StartTime and EndTime parameters cannot exceed seven days. The time specified by the EndTime parameter must be later than the current time. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2017-12-22T08:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The origin URL of the live stream. You can specify multiple URLs. Separate them with semicolons (;).
     *
     * >  You can pull only live streams in the Real-Time Messaging Protocol (RTMP), Flash Video (FLV), HTTP Live Streaming (HLS), and Secure Reliable Transport (SRT) formats.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $sourceUrl;

    /**
     * @description The time when stream pulling starts.
     *
     * The time range specified by the StartTime and EndTime parameters cannot exceed seven days. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2017-12-21T08:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the live stream. This parameter is determined by you.
     *
     * This parameter is required.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'sourceUrl' => 'SourceUrl',
        'startTime' => 'StartTime',
        'streamName' => 'StreamName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLivePullStreamInfoConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
