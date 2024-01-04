<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf;

use AlibabaCloud\Tea\Model;

class stream extends Model
{
    /**
     * @description 自定义header，JSON Map格式。
     *
     * @var string[]
     */
    public $customHeaderContent;

    /**
     * @description 播放器，不传默认12。
     *
     * - 2：FlashPlayer
     * @example 12
     *
     * @var int
     */
    public $playerType;

    /**
     * @description 资源地址类型：
     *
     * - 0：页面地址。不传默认0。
     * @example 0
     *
     * @var int
     */
    public $streamAddressType;

    /**
     * @description 监测时长，单位秒，最长支持60s，不传默认60。
     *
     * @example 30
     *
     * @var int
     */
    public $streamMonitorTimeout;

    /**
     * @description 音视频标志：0-视频，1-音频。
     *
     * @example 0
     *
     * @var int
     */
    public $streamType;

    /**
     * @description 流媒体资源地址。
     *
     * @example http://www.aliyun.com/stream/test.mp4
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @description DNS劫持白名单。匹配规则支持IP、IP通配符、子网掩码和CNAME，可以填写多个匹配规则，多个匹配规则以竖线（|）隔开。例如：www.aliyun.com:203.0.3.55|203.3.44.67，表示www.aliyun.com域名下除203.0.3.55和203.3.44.67之外的其他IP都是被劫持的。
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
