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
     * @description The information about the subtitle component.
     *
     * @var captionLayerContent
     */
    public $captionLayerContent;

    /**
     * @description The component ID.
     *
     * @example 72d2ec7a-4cd7-4a01-974b-7cd53947****
     *
     * @var string
     */
    public $componentId;

    /**
     * @description The information about the component layer, such as the size and layout.
     *
     * @var componentLayer
     */
    public $componentLayer;

    /**
     * @description The name of the component. By default, the name is the ID of the component.
     *
     * @example component_name
     *
     * @var string
     */
    public $componentName;

    /**
     * @description The type of the component. Valid values:
     *
     *   **text**: a text component
     *   **image**: an image component
     *   **caption**: a caption component
     *
     * @example text
     *
     * @var string
     */
    public $componentType;

    /**
     * @description The display effect for the component. Valid values:
     *
     *   **none**
     *   **animateH**: horizontal scrolling
     *   **animateV**: vertical scrolling
     *
     * @example animateV
     *
     * @var string
     */
    public $effect;

    /**
     * @description The information about the image component. This parameter is returned only for image components.
     *
     * @var imageLayerContent
     */
    public $imageLayerContent;

    /**
     * @description The location ID of the component.
     *
     * Each location ID can be assigned to only one component and must be in the RC[Number] format. The values of this parameter are in ascending order, for example, from RC01 to RC12.
     *
     * @example RC01
     *
     * @var string
     */
    public $locationId;

    /**
     * @description The information about the text component. This parameter is returned only for text components.
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->captionLayerContent) {
            $res['CaptionLayerContent'] = null !== $this->captionLayerContent ? $this->captionLayerContent->toMap() : null;
        }
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }
        if (null !== $this->componentLayer) {
            $res['ComponentLayer'] = null !== $this->componentLayer ? $this->componentLayer->toMap() : null;
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
            $res['ImageLayerContent'] = null !== $this->imageLayerContent ? $this->imageLayerContent->toMap() : null;
        }
        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }
        if (null !== $this->textLayerContent) {
            $res['TextLayerContent'] = null !== $this->textLayerContent ? $this->textLayerContent->toMap() : null;
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
