<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterLayoutRequest\audioLayer;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterLayoutRequest\videoLayer;
use AlibabaCloud\Tea\Model;

class ModifyCasterLayoutRequest extends Model
{
    /**
     * @description The audio layers.
     *
     * This parameter is required.
     *
     * @var audioLayer[]
     */
    public $audioLayer;

    /**
     * @description The location IDs of the video layers, which are in the same order as the video layers.
     *
     * For more information, see [AddCasterVideoResource](https://help.aliyun.com/document_detail/2848020.html).
     *
     * This parameter is required.
     *
     * @example RV02
     *
     * @var string[]
     */
    public $blendList;

    /**
     * @description The ID of the production studio.
     *
     *   If the production studio was created by calling the [CreateCaster](https://help.aliyun.com/document_detail/2848009.html) operation, check the value of the response parameter CasterId to obtain the ID.
     *   If the production studio was created by using the ApsaraVideo Live console, obtain the ID on the **Production Studio Management** page. To go to the page, log on to the **ApsaraVideo Live console** and click **Production Studios** in the left-side navigation pane.
     *
     * >  You can find the ID of the production studio in the Instance ID/Name column.
     *
     * This parameter is required.
     *
     * @example LIVEPRODUCER_POST-cn-0pp1czt****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The ID of the layout. If the layout was added by calling the [AddCasterLayout](https://help.aliyun.com/document_detail/2848025.html) operation, check the value of the response parameter LayoutId to obtain the ID.
     *
     * This parameter is required.
     *
     * @example 21926b36-7dd2-4fde-ae25-51b5bc8e****
     *
     * @var string
     */
    public $layoutId;

    /**
     * @description The location IDs of the audio layers, which are in the same order as the audio layers.
     *
     * For more information, see [AddCasterVideoResource](https://help.aliyun.com/document_detail/2848020.html).
     *
     * This parameter is required.
     *
     * @example RV02
     *
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
     * @description The video layers.
     *
     * This parameter is required.
     *
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

    public function validate() {}

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
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->mixList) {
            $res['MixList'] = $this->mixList;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return ModifyCasterLayoutRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioLayer'])) {
            if (!empty($map['AudioLayer'])) {
                $model->audioLayer = [];
                $n = 0;
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
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['MixList'])) {
            if (!empty($map['MixList'])) {
                $model->mixList = $map['MixList'];
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
                $n = 0;
                foreach ($map['VideoLayer'] as $item) {
                    $model->videoLayer[$n++] = null !== $item ? videoLayer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
