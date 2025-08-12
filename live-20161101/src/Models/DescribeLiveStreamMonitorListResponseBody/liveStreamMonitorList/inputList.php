<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList\inputList\layoutConfig;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList\inputList\playConfig;

class inputList extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $inputUrl;

    /**
     * @var layoutConfig
     */
    public $layoutConfig;

    /**
     * @var int
     */
    public $layoutId;

    /**
     * @var playConfig
     */
    public $playConfig;

    /**
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

    public function validate()
    {
        if (null !== $this->layoutConfig) {
            $this->layoutConfig->validate();
        }
        if (null !== $this->playConfig) {
            $this->playConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->inputUrl) {
            $res['InputUrl'] = $this->inputUrl;
        }

        if (null !== $this->layoutConfig) {
            $res['LayoutConfig'] = null !== $this->layoutConfig ? $this->layoutConfig->toArray($noStream) : $this->layoutConfig;
        }

        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }

        if (null !== $this->playConfig) {
            $res['PlayConfig'] = null !== $this->playConfig ? $this->playConfig->toArray($noStream) : $this->playConfig;
        }

        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
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
