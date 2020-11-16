<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponse\components;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponse\components\component\captionLayerContent;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponse\components\component\componentLayer;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponse\components\component\imageLayerContent;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponse\components\component\textLayerContent;
use AlibabaCloud\Tea\Model;

class component extends Model
{
    /**
     * @var string
     */
    public $componentId;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $locationId;

    /**
     * @var string
     */
    public $componentType;

    /**
     * @var string
     */
    public $effect;

    /**
     * @var componentLayer
     */
    public $componentLayer;

    /**
     * @var textLayerContent
     */
    public $textLayerContent;

    /**
     * @var imageLayerContent
     */
    public $imageLayerContent;

    /**
     * @var captionLayerContent
     */
    public $captionLayerContent;
    protected $_name = [
        'componentId'         => 'ComponentId',
        'componentName'       => 'ComponentName',
        'locationId'          => 'LocationId',
        'componentType'       => 'ComponentType',
        'effect'              => 'Effect',
        'componentLayer'      => 'ComponentLayer',
        'textLayerContent'    => 'TextLayerContent',
        'imageLayerContent'   => 'ImageLayerContent',
        'captionLayerContent' => 'CaptionLayerContent',
    ];

    public function validate()
    {
        Model::validateRequired('componentId', $this->componentId, true);
        Model::validateRequired('componentName', $this->componentName, true);
        Model::validateRequired('locationId', $this->locationId, true);
        Model::validateRequired('componentType', $this->componentType, true);
        Model::validateRequired('effect', $this->effect, true);
        Model::validateRequired('componentLayer', $this->componentLayer, true);
        Model::validateRequired('textLayerContent', $this->textLayerContent, true);
        Model::validateRequired('imageLayerContent', $this->imageLayerContent, true);
        Model::validateRequired('captionLayerContent', $this->captionLayerContent, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }
        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }
        if (null !== $this->effect) {
            $res['Effect'] = $this->effect;
        }
        if (null !== $this->componentLayer) {
            $res['ComponentLayer'] = null !== $this->componentLayer ? $this->componentLayer->toMap() : null;
        }
        if (null !== $this->textLayerContent) {
            $res['TextLayerContent'] = null !== $this->textLayerContent ? $this->textLayerContent->toMap() : null;
        }
        if (null !== $this->imageLayerContent) {
            $res['ImageLayerContent'] = null !== $this->imageLayerContent ? $this->imageLayerContent->toMap() : null;
        }
        if (null !== $this->captionLayerContent) {
            $res['CaptionLayerContent'] = null !== $this->captionLayerContent ? $this->captionLayerContent->toMap() : null;
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
        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['LocationId'])) {
            $model->locationId = $map['LocationId'];
        }
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }
        if (isset($map['Effect'])) {
            $model->effect = $map['Effect'];
        }
        if (isset($map['ComponentLayer'])) {
            $model->componentLayer = componentLayer::fromMap($map['ComponentLayer']);
        }
        if (isset($map['TextLayerContent'])) {
            $model->textLayerContent = textLayerContent::fromMap($map['TextLayerContent']);
        }
        if (isset($map['ImageLayerContent'])) {
            $model->imageLayerContent = imageLayerContent::fromMap($map['ImageLayerContent']);
        }
        if (isset($map['CaptionLayerContent'])) {
            $model->captionLayerContent = captionLayerContent::fromMap($map['CaptionLayerContent']);
        }

        return $model;
    }
}
