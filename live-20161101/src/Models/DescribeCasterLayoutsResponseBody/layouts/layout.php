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
        'blendList'   => 'BlendList',
        'layoutId'    => 'LayoutId',
        'mixList'     => 'MixList',
        'videoLayers' => 'VideoLayers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioLayers) {
            $res['AudioLayers'] = null !== $this->audioLayers ? $this->audioLayers->toMap() : null;
        }
        if (null !== $this->blendList) {
            $res['BlendList'] = null !== $this->blendList ? $this->blendList->toMap() : null;
        }
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->mixList) {
            $res['MixList'] = null !== $this->mixList ? $this->mixList->toMap() : null;
        }
        if (null !== $this->videoLayers) {
            $res['VideoLayers'] = null !== $this->videoLayers ? $this->videoLayers->toMap() : null;
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
