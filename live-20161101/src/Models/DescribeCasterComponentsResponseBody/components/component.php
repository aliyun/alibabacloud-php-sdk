<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component\captionLayerContent;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component\componentLayer;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component\imageLayerContent;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component\textLayerContent;
use AlibabaCloud\Tea\Model;

class component extends Model
{
    /**
     * @var textLayerContent
     */
    public $textLayerContent;

    /**
     * @var string
     */
    public $effect;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var componentLayer
     */
    public $componentLayer;

    /**
     * @var imageLayerContent
     */
    public $imageLayerContent;

    /**
     * @var string
     */
    public $componentType;

    /**
     * @var string
     */
    public $locationId;

    /**
     * @var captionLayerContent
     */
    public $captionLayerContent;

    /**
     * @var string
     */
    public $componentId;
    protected $_name = [
        'textLayerContent'    => 'TextLayerContent',
        'effect'              => 'Effect',
        'componentName'       => 'ComponentName',
        'componentLayer'      => 'ComponentLayer',
        'imageLayerContent'   => 'ImageLayerContent',
        'componentType'       => 'ComponentType',
        'locationId'          => 'LocationId',
        'captionLayerContent' => 'CaptionLayerContent',
        'componentId'         => 'ComponentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->textLayerContent) {
            $res['TextLayerContent'] = null !== $this->textLayerContent ? $this->textLayerContent->toMap() : null;
        }
        if (null !== $this->effect) {
            $res['Effect'] = $this->effect;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->componentLayer) {
            $res['ComponentLayer'] = null !== $this->componentLayer ? $this->componentLayer->toMap() : null;
        }
        if (null !== $this->imageLayerContent) {
            $res['ImageLayerContent'] = null !== $this->imageLayerContent ? $this->imageLayerContent->toMap() : null;
        }
        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }
        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }
        if (null !== $this->captionLayerContent) {
            $res['CaptionLayerContent'] = null !== $this->captionLayerContent ? $this->captionLayerContent->toMap() : null;
        }
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return component
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TextLayerContent'])) {
            $model->textLayerContent = textLayerContent::fromMap($map['TextLayerContent']);
        }
        if (isset($map['Effect'])) {
            $model->effect = $map['Effect'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['ComponentLayer'])) {
            $model->componentLayer = componentLayer::fromMap($map['ComponentLayer']);
        }
        if (isset($map['ImageLayerContent'])) {
            $model->imageLayerContent = imageLayerContent::fromMap($map['ImageLayerContent']);
        }
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }
        if (isset($map['LocationId'])) {
            $model->locationId = $map['LocationId'];
        }
        if (isset($map['CaptionLayerContent'])) {
            $model->captionLayerContent = captionLayerContent::fromMap($map['CaptionLayerContent']);
        }
        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }

        return $model;
    }
}
