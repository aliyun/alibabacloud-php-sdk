<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class HotLiveRtcStreamRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $audioMsid;

    /**
     * @var string
     */
    public $connectionTimeout;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $mediaTimeout;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionCode;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $videoMsid;
    protected $_name = [
        'appName'           => 'AppName',
        'audioMsid'         => 'AudioMsid',
        'connectionTimeout' => 'ConnectionTimeout',
        'domainName'        => 'DomainName',
        'mediaTimeout'      => 'MediaTimeout',
        'ownerId'           => 'OwnerId',
        'regionCode'        => 'RegionCode',
        'streamName'        => 'StreamName',
        'videoMsid'         => 'VideoMsid',
    ];

    public function validate()
    {
    }

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
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['VideoMsid'])) {
            $model->videoMsid = $map['VideoMsid'];
        }

        return $model;
    }
}
