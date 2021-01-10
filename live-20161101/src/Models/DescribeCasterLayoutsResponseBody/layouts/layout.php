<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout\audioLayers;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout\blendList;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout\mixList;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout\videoLayers;
use AlibabaCloud\Tea\Model;

class layout extends Model
{
    /**
     * @var string
     */
    public $layoutId;

    /**
     * @var audioLayers
     */
    public $audioLayers;

    /**
     * @var videoLayers
     */
    public $videoLayers;

    /**
     * @var mixList
     */
    public $mixList;

    /**
     * @var blendList
     */
    public $blendList;
    protected $_name = [
        'layoutId'    => 'LayoutId',
        'audioLayers' => 'AudioLayers',
        'videoLayers' => 'VideoLayers',
        'mixList'     => 'MixList',
        'blendList'   => 'BlendList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->audioLayers) {
            $res['AudioLayers'] = null !== $this->audioLayers ? $this->audioLayers->toMap() : null;
        }
        if (null !== $this->videoLayers) {
            $res['VideoLayers'] = null !== $this->videoLayers ? $this->videoLayers->toMap() : null;
        }
        if (null !== $this->mixList) {
            $res['MixList'] = null !== $this->mixList ? $this->mixList->toMap() : null;
        }
        if (null !== $this->blendList) {
            $res['BlendList'] = null !== $this->blendList ? $this->blendList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layout
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['AudioLayers'])) {
            $model->audioLayers = audioLayers::fromMap($map['AudioLayers']);
        }
        if (isset($map['VideoLayers'])) {
            $model->videoLayers = videoLayers::fromMap($map['VideoLayers']);
        }
        if (isset($map['MixList'])) {
            $model->mixList = mixList::fromMap($map['MixList']);
        }
        if (isset($map['BlendList'])) {
            $model->blendList = blendList::fromMap($map['BlendList']);
        }

        return $model;
    }
}
