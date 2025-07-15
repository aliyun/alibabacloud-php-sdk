<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList\inputList\layoutConfig;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList\inputList\playConfig;
use AlibabaCloud\Tea\Model;

class inputList extends Model
{
    /**
     * @description The index.
     *
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @description The URL of the input stream.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $inputUrl;

    /**
     * @description The layout information.
     *
     * @var layoutConfig
     */
    public $layoutConfig;

    /**
     * @description The layout ID, which must start from 1.
     *
     * @example 1
     *
     * @var int
     */
    public $layoutId;

    /**
     * @description The playback configurations.
     *
     * @var playConfig
     */
    public $playConfig;

    /**
     * @description The display name of the monitored stream.
     *
     * @example monitorStream****
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'index' => 'Index',
        'inputUrl' => 'InputUrl',
        'layoutConfig' => 'LayoutConfig',
        'layoutId' => 'LayoutId',
        'playConfig' => 'PlayConfig',
        'streamName' => 'StreamName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->inputUrl) {
            $res['InputUrl'] = $this->inputUrl;
        }
        if (null !== $this->layoutConfig) {
            $res['LayoutConfig'] = null !== $this->layoutConfig ? $this->layoutConfig->toMap() : null;
        }
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->playConfig) {
            $res['PlayConfig'] = null !== $this->playConfig ? $this->playConfig->toMap() : null;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['InputUrl'])) {
            $model->inputUrl = $map['InputUrl'];
        }
        if (isset($map['LayoutConfig'])) {
            $model->layoutConfig = layoutConfig::fromMap($map['LayoutConfig']);
        }
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['PlayConfig'])) {
            $model->playConfig = playConfig::fromMap($map['PlayConfig']);
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
