<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponse\layouts;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponse\layouts\layout\audioLayers;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponse\layouts\layout\blendList;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponse\layouts\layout\mixList;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponse\layouts\layout\videoLayers;
use AlibabaCloud\Tea\Model;

class layout extends Model
{
    /**
     * @var string
     */
    public $layoutId;

    /**
     * @var videoLayers
     */
    public $videoLayers;

    /**
     * @var audioLayers
     */
    public $audioLayers;

    /**
     * @var blendList
     */
    public $blendList;

    /**
     * @var mixList
     */
    public $mixList;
    protected $_name = [
        'layoutId'    => 'LayoutId',
        'videoLayers' => 'VideoLayers',
        'audioLayers' => 'AudioLayers',
        'blendList'   => 'BlendList',
        'mixList'     => 'MixList',
    ];

    public function validate()
    {
        Model::validateRequired('layoutId', $this->layoutId, true);
        Model::validateRequired('videoLayers', $this->videoLayers, true);
        Model::validateRequired('audioLayers', $this->audioLayers, true);
        Model::validateRequired('blendList', $this->blendList, true);
        Model::validateRequired('mixList', $this->mixList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->videoLayers) {
            $res['VideoLayers'] = null !== $this->videoLayers ? $this->videoLayers->toMap() : null;
        }
        if (null !== $this->audioLayers) {
            $res['AudioLayers'] = null !== $this->audioLayers ? $this->audioLayers->toMap() : null;
        }
        if (null !== $this->blendList) {
            $res['BlendList'] = null !== $this->blendList ? $this->blendList->toMap() : null;
        }
        if (null !== $this->mixList) {
            $res['MixList'] = null !== $this->mixList ? $this->mixList->toMap() : null;
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
        if (isset($map['VideoLayers'])) {
            $model->videoLayers = videoLayers::fromMap($map['VideoLayers']);
        }
        if (isset($map['AudioLayers'])) {
            $model->audioLayers = audioLayers::fromMap($map['AudioLayers']);
        }
        if (isset($map['BlendList'])) {
            $model->blendList = blendList::fromMap($map['BlendList']);
        }
        if (isset($map['MixList'])) {
            $model->mixList = mixList::fromMap($map['MixList']);
        }

        return $model;
    }
}
