<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class HotLiveRtcStreamRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * This parameter is required.
     *
     * @example app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The audio MSID.
     *
     * This parameter is required.
     *
     * @example rts audio
     *
     * @var string
     */
    public $audioMsid;

    /**
     * @description The duration for which the prefetch connection is maintained. Unit: milliseconds. Default value: 0, which specifies that the prefetch connection is always maintained.
     *
     * @example 0
     *
     * @var string
     */
    public $connectionTimeout;

    /**
     * @description The streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The custom period after which a timeout event is triggered. Unit: milliseconds.
     *
     * @example 100000
     *
     * @var string
     */
    public $mediaTimeout;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The code of the region in which the live stream is prefetched. For more information, see the following tables that list available region codes.
     *
     * >  Region codes include provincial codes for China and country codes for all countries.
     *
     * This parameter is required.
     *
     * @example ZHJ
     *
     * @var string
     */
    public $regionCode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the live stream that you want to prefetch.
     *
     * This parameter is required.
     *
     * @example stream
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The video MSID.
     *
     * This parameter is required.
     *
     * @example rts video
     *
     * @var string
     */
    public $videoMsid;
    protected $_name = [
        'appName' => 'AppName',
        'audioMsid' => 'AudioMsid',
        'connectionTimeout' => 'ConnectionTimeout',
        'domainName' => 'DomainName',
        'mediaTimeout' => 'MediaTimeout',
        'ownerId' => 'OwnerId',
        'regionCode' => 'RegionCode',
        'regionId' => 'RegionId',
        'streamName' => 'StreamName',
        'videoMsid' => 'VideoMsid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->audioMsid) {
            $res['AudioMsid'] = $this->audioMsid;
        }
        if (null !== $this->connectionTimeout) {
            $res['ConnectionTimeout'] = $this->connectionTimeout;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->mediaTimeout) {
            $res['MediaTimeout'] = $this->mediaTimeout;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->videoMsid) {
            $res['VideoMsid'] = $this->videoMsid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotLiveRtcStreamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AudioMsid'])) {
            $model->audioMsid = $map['AudioMsid'];
        }
        if (isset($map['ConnectionTimeout'])) {
            $model->connectionTimeout = $map['ConnectionTimeout'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['MediaTimeout'])) {
            $model->mediaTimeout = $map['MediaTimeout'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['VideoMsid'])) {
            $model->videoMsid = $map['VideoMsid'];
        }

        return $model;
    }
}
