<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts\bgImageConfig;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts\commonConfig;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts\layerOrderConfigList;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts\mediaInputConfigList;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts\screenInputConfigList;
use AlibabaCloud\Tea\Model;

class studioLayouts extends Model
{
    /**
     * @description The background material configurations.
     *
     * @var bgImageConfig
     */
    public $bgImageConfig;

    /**
     * @description The common layout configurations. This parameter is returned only for a common layout.
     *
     * @var commonConfig
     */
    public $commonConfig;

    /**
     * @description The layer sorting configurations.
     *
     * @var layerOrderConfigList[]
     */
    public $layerOrderConfigList;

    /**
     * @description The ID of the layout.
     *
     * @example 445409ec-7eaa-461d-8f29-4bec2eb9****
     *
     * @var string
     */
    public $layoutId;

    /**
     * @description The name of the layout.
     *
     * @example 测试布局
     *
     * @var string
     */
    public $layoutName;

    /**
     * @description The type of the layout. Valid values:
     *
     *   **common**
     *   **studio**
     *
     * @example studio
     *
     * @var string
     */
    public $layoutType;

    /**
     * @description The multimedia input configurations.
     *
     * @var mediaInputConfigList[]
     */
    public $mediaInputConfigList;

    /**
     * @description The input configurations for chroma key.
     *
     * @var screenInputConfigList[]
     */
    public $screenInputConfigList;
    protected $_name = [
        'bgImageConfig' => 'BgImageConfig',
        'commonConfig' => 'CommonConfig',
        'layerOrderConfigList' => 'LayerOrderConfigList',
        'layoutId' => 'LayoutId',
        'layoutName' => 'LayoutName',
        'layoutType' => 'LayoutType',
        'mediaInputConfigList' => 'MediaInputConfigList',
        'screenInputConfigList' => 'ScreenInputConfigList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgImageConfig) {
            $res['BgImageConfig'] = null !== $this->bgImageConfig ? $this->bgImageConfig->toMap() : null;
        }
        if (null !== $this->commonConfig) {
            $res['CommonConfig'] = null !== $this->commonConfig ? $this->commonConfig->toMap() : null;
        }
        if (null !== $this->layerOrderConfigList) {
            $res['LayerOrderConfigList'] = [];
            if (null !== $this->layerOrderConfigList && \is_array($this->layerOrderConfigList)) {
                $n = 0;
                foreach ($this->layerOrderConfigList as $item) {
                    $res['LayerOrderConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->layoutName) {
            $res['LayoutName'] = $this->layoutName;
        }
        if (null !== $this->layoutType) {
            $res['LayoutType'] = $this->layoutType;
        }
        if (null !== $this->mediaInputConfigList) {
            $res['MediaInputConfigList'] = [];
            if (null !== $this->mediaInputConfigList && \is_array($this->mediaInputConfigList)) {
                $n = 0;
                foreach ($this->mediaInputConfigList as $item) {
                    $res['MediaInputConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->screenInputConfigList) {
            $res['ScreenInputConfigList'] = [];
            if (null !== $this->screenInputConfigList && \is_array($this->screenInputConfigList)) {
                $n = 0;
                foreach ($this->screenInputConfigList as $item) {
                    $res['ScreenInputConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return studioLayouts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgImageConfig'])) {
            $model->bgImageConfig = bgImageConfig::fromMap($map['BgImageConfig']);
        }
        if (isset($map['CommonConfig'])) {
            $model->commonConfig = commonConfig::fromMap($map['CommonConfig']);
        }
        if (isset($map['LayerOrderConfigList'])) {
            if (!empty($map['LayerOrderConfigList'])) {
                $model->layerOrderConfigList = [];
                $n = 0;
                foreach ($map['LayerOrderConfigList'] as $item) {
                    $model->layerOrderConfigList[$n++] = null !== $item ? layerOrderConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['LayoutName'])) {
            $model->layoutName = $map['LayoutName'];
        }
        if (isset($map['LayoutType'])) {
            $model->layoutType = $map['LayoutType'];
        }
        if (isset($map['MediaInputConfigList'])) {
            if (!empty($map['MediaInputConfigList'])) {
                $model->mediaInputConfigList = [];
                $n = 0;
                foreach ($map['MediaInputConfigList'] as $item) {
                    $model->mediaInputConfigList[$n++] = null !== $item ? mediaInputConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ScreenInputConfigList'])) {
            if (!empty($map['ScreenInputConfigList'])) {
                $model->screenInputConfigList = [];
                $n = 0;
                foreach ($map['ScreenInputConfigList'] as $item) {
                    $model->screenInputConfigList[$n++] = null !== $item ? screenInputConfigList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
