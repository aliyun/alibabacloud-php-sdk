<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\monitorConf;

use AlibabaCloud\Tea\Model;

class stream extends Model
{
    /**
     * @description The custom header. Format: JSON map.
     *
     * @var string[]
     */
    public $customHeaderContent;

    /**
     * @description The player. Default value: 12. Valid values:
     *
     *   12: VLC
     *   2: Flash Player
     *
     * @example 12
     *
     * @var int
     */
    public $playerType;

    /**
     * @description The address type of the resource. Valid values:
     *
     *   1: resource URL
     *   0 (default value): page URL
     *
     * @example 0
     *
     * @var int
     */
    public $streamAddressType;

    /**
     * @description The monitoring duration. Unit: seconds. Maximum and default value: 60.
     *
     * @example 30
     *
     * @var int
     */
    public $streamMonitorTimeout;

    /**
     * @description Specifies whether the resource is a video or audio. Valid values: 0: video. 1: audio.
     *
     * @example 0
     *
     * @var int
     */
    public $streamType;

    /**
     * @description The resource URL of the streaming media.
     *
     * @example http://www.aliyun.com/stream/test.mp4
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @description The whitelisted objects that are used to avoid DNS hijacking. The objects can be IP addresses, wildcard mask, subnet mask, or CNAME records. Separate multiple objects with vertical bars (|). Example: www.aliyun.com:203.0.3.55|203.3.44.67. It indicates that all IP addresses that belong to the www.aliyun.com domain name except 203.0.3.55 and 203.3.44.67 are hijacked.
     *
     * @example www.aliyun.com:203.0.3.55|203.3.44.67
     *
     * @var string
     */
    public $whiteList;
    protected $_name = [
        'customHeaderContent'  => 'CustomHeaderContent',
        'playerType'           => 'PlayerType',
        'streamAddressType'    => 'StreamAddressType',
        'streamMonitorTimeout' => 'StreamMonitorTimeout',
        'streamType'           => 'StreamType',
        'targetUrl'            => 'TargetUrl',
        'whiteList'            => 'WhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customHeaderContent) {
            $res['CustomHeaderContent'] = $this->customHeaderContent;
        }
        if (null !== $this->playerType) {
            $res['PlayerType'] = $this->playerType;
        }
        if (null !== $this->streamAddressType) {
            $res['StreamAddressType'] = $this->streamAddressType;
        }
        if (null !== $this->streamMonitorTimeout) {
            $res['StreamMonitorTimeout'] = $this->streamMonitorTimeout;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stream
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomHeaderContent'])) {
            $model->customHeaderContent = $map['CustomHeaderContent'];
        }
        if (isset($map['PlayerType'])) {
            $model->playerType = $map['PlayerType'];
        }
        if (isset($map['StreamAddressType'])) {
            $model->streamAddressType = $map['StreamAddressType'];
        }
        if (isset($map['StreamMonitorTimeout'])) {
            $model->streamMonitorTimeout = $map['StreamMonitorTimeout'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['WhiteList'])) {
            $model->whiteList = $map['WhiteList'];
        }

        return $model;
    }
}
