<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts\bgImageConfig;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts\commonConfig;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts\layerOrderConfigList;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts\mediaInputConfigList;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts\screenInputConfigList;

class studioLayouts extends Model
{
    /**
     * @var bgImageConfig
     */
    public $bgImageConfig;

    /**
     * @var commonConfig
     */
    public $commonConfig;

    /**
     * @var layerOrderConfigList[]
     */
    public $layerOrderConfigList;

    /**
     * @var string
     */
    public $layoutId;

    /**
     * @var string
     */
    public $layoutName;

    /**
     * @var string
     */
    public $layoutType;

    /**
     * @var mediaInputConfigList[]
     */
    public $mediaInputConfigList;

    /**
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

    public function validate()
    {
        if (null !== $this->bgImageConfig) {
            $this->bgImageConfig->validate();
        }
        if (null !== $this->commonConfig) {
            $this->commonConfig->validate();
        }
        if (\is_array($this->layerOrderConfigList)) {
            Model::validateArray($this->layerOrderConfigList);
        }
        if (\is_array($this->mediaInputConfigList)) {
            Model::validateArray($this->mediaInputConfigList);
        }
        if (\is_array($this->screenInputConfigList)) {
            Model::validateArray($this->screenInputConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bgImageConfig) {
            $res['BgImageConfig'] = null !== $this->bgImageConfig ? $this->bgImageConfig->toArray($noStream) : $this->bgImageConfig;
        }

        if (null !== $this->commonConfig) {
            $res['CommonConfig'] = null !== $this->commonConfig ? $this->commonConfig->toArray($noStream) : $this->commonConfig;
        }

        if (null !== $this->layerOrderConfigList) {
            if (\is_array($this->layerOrderConfigList)) {
                $res['LayerOrderConfigList'] = [];
                $n1 = 0;
                foreach ($this->layerOrderConfigList as $item1) {
                    $res['LayerOrderConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->mediaInputConfigList)) {
                $res['MediaInputConfigList'] = [];
                $n1 = 0;
                foreach ($this->mediaInputConfigList as $item1) {
                    $res['MediaInputConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->screenInputConfigList) {
            if (\is_array($this->screenInputConfigList)) {
                $res['ScreenInputConfigList'] = [];
                $n1 = 0;
                foreach ($this->screenInputConfigList as $item1) {
                    $res['ScreenInputConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BgImageConfig'])) {
            $model->bgImageConfig = bgImageConfig::fromMap($map['BgImageConfig']);
        }

        if (isset($map['CommonConfig'])) {
            $model->commonConfig = commonConfig::fromMap($map['CommonConfig']);
        }

        if (isset($map['LayerOrderConfigList'])) {
            if (!empty($map['LayerOrderConfigList'])) {
                $model->layerOrderConfigList = [];
                $n1 = 0;
                foreach ($map['LayerOrderConfigList'] as $item1) {
                    $model->layerOrderConfigList[$n1] = layerOrderConfigList::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['MediaInputConfigList'] as $item1) {
                    $model->mediaInputConfigList[$n1] = mediaInputConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ScreenInputConfigList'])) {
            if (!empty($map['ScreenInputConfigList'])) {
                $model->screenInputConfigList = [];
                $n1 = 0;
                foreach ($map['ScreenInputConfigList'] as $item1) {
                    $model->screenInputConfigList[$n1] = screenInputConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
