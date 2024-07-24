<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf;

use AlibabaCloud\Tea\Model;

class stream extends Model
{
    /**
     * @description Custom header, JSON Map format.
     *
     * @var string[]
     */
    public $customHeaderContent;

    /**
     * @description Player, default is 12 if not specified.
     *
     * - 2: Flash Player
     * @example 12
     *
     * @var int
     */
    public $playerType;

    /**
     * @description Resource address type:
     *
     * - 0: Page address. If not passed, the default value is 0.
     * @example 0
     *
     * @var int
     */
    public $streamAddressType;

    /**
     * @description Monitoring duration, in seconds, supports up to 60 seconds. If not specified, the default value is 60 seconds.
     *
     * @example 30
     *
     * @var int
     */
    public $streamMonitorTimeout;

    /**
     * @description Audio and video flag:
     *
     * - 1: audio
     * @example 0
     *
     * @var int
     */
    public $streamType;

    /**
     * @description Streaming media resource address.
     *
     * @example http://www.aliyun.com/stream/test.mp4
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @description DNS hijacking whitelist. Matching rules support IP, IP wildcard, subnet mask and CNAME. You can fill in multiple matching rules, and multiple matching rules are separated by vertical bars (|). For example: `www.aliyun.com:203.0.3.55|203.3.44.67`, which means that all IPs except 203.0.3.55 and 203.3.44.67 under the www.aliyun.com domain name are hijacked.
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
