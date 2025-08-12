<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout\audioLayers;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout\blendList;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout\mixList;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout\videoLayers;

class layout extends Model
{
    /**
     * @var audioLayers
     */
    public $audioLayers;

    /**
     * @var blendList
     */
    public $blendList;

    /**
     * @var string
     */
    public $layoutId;

    /**
     * @var mixList
     */
    public $mixList;

    /**
     * @var videoLayers
     */
    public $videoLayers;
    protected $_name = [
        'audioLayers' => 'AudioLayers',
        'blendList' => 'BlendList',
        'layoutId' => 'LayoutId',
        'mixList' => 'MixList',
        'videoLayers' => 'VideoLayers',
    ];

    public function validate()
    {
        if (null !== $this->audioLayers) {
            $this->audioLayers->validate();
        }
        if (null !== $this->blendList) {
            $this->blendList->validate();
        }
        if (null !== $this->mixList) {
            $this->mixList->validate();
        }
        if (null !== $this->videoLayers) {
            $this->videoLayers->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioLayers) {
            $res['AudioLayers'] = null !== $this->audioLayers ? $this->audioLayers->toArray($noStream) : $this->audioLayers;
        }

        if (null !== $this->blendList) {
            $res['BlendList'] = null !== $this->blendList ? $this->blendList->toArray($noStream) : $this->blendList;
        }

        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }

        if (null !== $this->mixList) {
            $res['MixList'] = null !== $this->mixList ? $this->mixList->toArray($noStream) : $this->mixList;
        }

        if (null !== $this->videoLayers) {
            $res['VideoLayers'] = null !== $this->videoLayers ? $this->videoLayers->toArray($noStream) : $this->videoLayers;
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
        if (isset($map['AudioLayers'])) {
            $model->audioLayers = audioLayers::fromMap($map['AudioLayers']);
        }

        if (isset($map['BlendList'])) {
            $model->blendList = blendList::fromMap($map['BlendList']);
        }

        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }

        if (isset($map['MixList'])) {
            $model->mixList = mixList::fromMap($map['MixList']);
        }

        if (isset($map['VideoLayers'])) {
            $model->videoLayers = videoLayers::fromMap($map['VideoLayers']);
        }

        return $model;
    }
}
