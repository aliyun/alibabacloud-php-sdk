<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component\captionLayerContent;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component\componentLayer;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component\imageLayerContent;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component\textLayerContent;

class component extends Model
{
    /**
     * @var captionLayerContent
     */
    public $captionLayerContent;

    /**
     * @var string
     */
    public $componentId;

    /**
     * @var componentLayer
     */
    public $componentLayer;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $componentType;

    /**
     * @var string
     */
    public $effect;

    /**
     * @var imageLayerContent
     */
    public $imageLayerContent;

    /**
     * @var string
     */
    public $locationId;

    /**
     * @var textLayerContent
     */
    public $textLayerContent;
    protected $_name = [
        'captionLayerContent' => 'CaptionLayerContent',
        'componentId' => 'ComponentId',
        'componentLayer' => 'ComponentLayer',
        'componentName' => 'ComponentName',
        'componentType' => 'ComponentType',
        'effect' => 'Effect',
        'imageLayerContent' => 'ImageLayerContent',
        'locationId' => 'LocationId',
        'textLayerContent' => 'TextLayerContent',
    ];

    public function validate()
    {
        if (null !== $this->captionLayerContent) {
            $this->captionLayerContent->validate();
        }
        if (null !== $this->componentLayer) {
            $this->componentLayer->validate();
        }
        if (null !== $this->imageLayerContent) {
            $this->imageLayerContent->validate();
        }
        if (null !== $this->textLayerContent) {
            $this->textLayerContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->captionLayerContent) {
            $res['CaptionLayerContent'] = null !== $this->captionLayerContent ? $this->captionLayerContent->toArray($noStream) : $this->captionLayerContent;
        }

        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }

        if (null !== $this->componentLayer) {
            $res['ComponentLayer'] = null !== $this->componentLayer ? $this->componentLayer->toArray($noStream) : $this->componentLayer;
        }

        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }

        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }

        if (null !== $this->effect) {
            $res['Effect'] = $this->effect;
        }

        if (null !== $this->imageLayerContent) {
            $res['ImageLayerContent'] = null !== $this->imageLayerContent ? $this->imageLayerContent->toArray($noStream) : $this->imageLayerContent;
        }

        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }

        if (null !== $this->textLayerContent) {
            $res['TextLayerContent'] = null !== $this->textLayerContent ? $this->textLayerContent->toArray($noStream) : $this->textLayerContent;
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
        if (isset($map['CaptionLayerContent'])) {
            $model->captionLayerContent = captionLayerContent::fromMap($map['CaptionLayerContent']);
        }

        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }

        if (isset($map['ComponentLayer'])) {
            $model->componentLayer = componentLayer::fromMap($map['ComponentLayer']);
        }

        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }

        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }

        if (isset($map['Effect'])) {
            $model->effect = $map['Effect'];
        }

        if (isset($map['ImageLayerContent'])) {
            $model->imageLayerContent = imageLayerContent::fromMap($map['ImageLayerContent']);
        }

        if (isset($map['LocationId'])) {
            $model->locationId = $map['LocationId'];
        }

        if (isset($map['TextLayerContent'])) {
            $model->textLayerContent = textLayerContent::fromMap($map['TextLayerContent']);
        }

        return $model;
    }
}
