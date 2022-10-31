<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterLayoutRequest\audioLayer;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterLayoutRequest\videoLayer;
use AlibabaCloud\Tea\Model;

class AddCasterLayoutRequest extends Model
{
    /**
     * @var audioLayer[]
     */
    public $audioLayer;

    /**
     * @var string[]
     */
    public $blendList;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string[]
     */
    public $mixList;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var videoLayer[]
     */
    public $videoLayer;
    protected $_name = [
        'audioLayer' => 'AudioLayer',
        'blendList'  => 'BlendList',
        'casterId'   => 'CasterId',
        'mixList'    => 'MixList',
        'ownerId'    => 'OwnerId',
        'videoLayer' => 'VideoLayer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->mixList) {
            $res['MixList'] = $this->mixList;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCasterLayoutRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['MixList'])) {
            if (!empty($map['MixList'])) {
                $model->mixList = $map['MixList'];
            }
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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

        return $model;
    }
}
