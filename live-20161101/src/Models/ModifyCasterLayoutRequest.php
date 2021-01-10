<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterLayoutRequest\audioLayer;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterLayoutRequest\videoLayer;
use AlibabaCloud\Tea\Model;

class ModifyCasterLayoutRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $layoutId;

    /**
     * @var videoLayer[]
     */
    public $videoLayer;

    /**
     * @var audioLayer[]
     */
    public $audioLayer;

    /**
     * @var string[]
     */
    public $blendList;

    /**
     * @var string[]
     */
    public $mixList;
    protected $_name = [
        'ownerId'    => 'OwnerId',
        'casterId'   => 'CasterId',
        'layoutId'   => 'LayoutId',
        'videoLayer' => 'VideoLayer',
        'audioLayer' => 'AudioLayer',
        'blendList'  => 'BlendList',
        'mixList'    => 'MixList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->videoLayer) {
            $res['VideoLayer'] = [];
            if (null !== $this->videoLayer && \is_array($this->videoLayer)) {
                $n = 0;
                foreach ($this->videoLayer as $item) {
                    $res['VideoLayer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->audioLayer) {
            $res['AudioLayer'] = [];
            if (null !== $this->audioLayer && \is_array($this->audioLayer)) {
                $n = 0;
                foreach ($this->audioLayer as $item) {
                    $res['AudioLayer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->blendList) {
            $res['BlendList'] = $this->blendList;
        }
        if (null !== $this->mixList) {
            $res['MixList'] = $this->mixList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCasterLayoutRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['VideoLayer'])) {
            if (!empty($map['VideoLayer'])) {
                $model->videoLayer = [];
                $n                 = 0;
                foreach ($map['VideoLayer'] as $item) {
                    $model->videoLayer[$n++] = null !== $item ? videoLayer::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AudioLayer'])) {
            if (!empty($map['AudioLayer'])) {
                $model->audioLayer = [];
                $n                 = 0;
                foreach ($map['AudioLayer'] as $item) {
                    $model->audioLayer[$n++] = null !== $item ? audioLayer::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BlendList'])) {
            if (!empty($map['BlendList'])) {
                $model->blendList = $map['BlendList'];
            }
        }
        if (isset($map['MixList'])) {
            if (!empty($map['MixList'])) {
                $model->mixList = $map['MixList'];
            }
        }

        return $model;
    }
}
