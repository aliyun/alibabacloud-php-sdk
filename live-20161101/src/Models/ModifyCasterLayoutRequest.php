<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterLayoutRequest\audioLayer;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterLayoutRequest\videoLayer;

class ModifyCasterLayoutRequest extends Model
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
     * @var string
     */
    public $layoutId;

    /**
     * @var string[]
     */
    public $mixList;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var videoLayer[]
     */
    public $videoLayer;
    protected $_name = [
        'audioLayer' => 'AudioLayer',
        'blendList' => 'BlendList',
        'casterId' => 'CasterId',
        'layoutId' => 'LayoutId',
        'mixList' => 'MixList',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'videoLayer' => 'VideoLayer',
    ];

    public function validate()
    {
        if (\is_array($this->audioLayer)) {
            Model::validateArray($this->audioLayer);
        }
        if (\is_array($this->blendList)) {
            Model::validateArray($this->blendList);
        }
        if (\is_array($this->mixList)) {
            Model::validateArray($this->mixList);
        }
        if (\is_array($this->videoLayer)) {
            Model::validateArray($this->videoLayer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioLayer) {
            if (\is_array($this->audioLayer)) {
                $res['AudioLayer'] = [];
                $n1 = 0;
                foreach ($this->audioLayer as $item1) {
                    $res['AudioLayer'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->blendList) {
            if (\is_array($this->blendList)) {
                $res['BlendList'] = [];
                $n1 = 0;
                foreach ($this->blendList as $item1) {
                    $res['BlendList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }

        if (null !== $this->mixList) {
            if (\is_array($this->mixList)) {
                $res['MixList'] = [];
                $n1 = 0;
                foreach ($this->mixList as $item1) {
                    $res['MixList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->videoLayer) {
            if (\is_array($this->videoLayer)) {
                $res['VideoLayer'] = [];
                $n1 = 0;
                foreach ($this->videoLayer as $item1) {
                    $res['VideoLayer'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AudioLayer'])) {
            if (!empty($map['AudioLayer'])) {
                $model->audioLayer = [];
                $n1 = 0;
                foreach ($map['AudioLayer'] as $item1) {
                    $model->audioLayer[$n1] = audioLayer::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BlendList'])) {
            if (!empty($map['BlendList'])) {
                $model->blendList = [];
                $n1 = 0;
                foreach ($map['BlendList'] as $item1) {
                    $model->blendList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }

        if (isset($map['MixList'])) {
            if (!empty($map['MixList'])) {
                $model->mixList = [];
                $n1 = 0;
                foreach ($map['MixList'] as $item1) {
                    $model->mixList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['VideoLayer'])) {
            if (!empty($map['VideoLayer'])) {
                $model->videoLayer = [];
                $n1 = 0;
                foreach ($map['VideoLayer'] as $item1) {
                    $model->videoLayer[$n1] = videoLayer::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
