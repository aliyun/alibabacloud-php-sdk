<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyCasterComponentRequest extends Model
{
    /**
     * @var string
     */
    public $casterId;

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
    public $componentType;

    /**
     * @var string
     */
    public $effect;

    /**
     * @var string
     */
    public $componentLayer;

    /**
     * @var string
     */
    public $textLayerContent;

    /**
     * @var string
     */
    public $imageLayerContent;

    /**
     * @var string
     */
    public $captionLayerContent;
    protected $_name = [
        'casterId'            => 'CasterId',
        'componentId'         => 'ComponentId',
        'componentName'       => 'ComponentName',
        'componentType'       => 'ComponentType',
        'effect'              => 'Effect',
        'componentLayer'      => 'ComponentLayer',
        'textLayerContent'    => 'TextLayerContent',
        'imageLayerContent'   => 'ImageLayerContent',
        'captionLayerContent' => 'CaptionLayerContent',
    ];

    public function validate()
    {
        Model::validateRequired('casterId', $this->casterId, true);
        Model::validateRequired('componentId', $this->componentId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
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
        if (null !== $this->componentLayer) {
            $res['ComponentLayer'] = $this->componentLayer;
        }
        if (null !== $this->textLayerContent) {
            $res['TextLayerContent'] = $this->textLayerContent;
        }
        if (null !== $this->imageLayerContent) {
            $res['ImageLayerContent'] = $this->imageLayerContent;
        }
        if (null !== $this->captionLayerContent) {
            $res['CaptionLayerContent'] = $this->captionLayerContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCasterComponentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
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
        if (isset($map['ComponentLayer'])) {
            $model->componentLayer = $map['ComponentLayer'];
        }
        if (isset($map['TextLayerContent'])) {
            $model->textLayerContent = $map['TextLayerContent'];
        }
        if (isset($map['ImageLayerContent'])) {
            $model->imageLayerContent = $map['ImageLayerContent'];
        }
        if (isset($map['CaptionLayerContent'])) {
            $model->captionLayerContent = $map['CaptionLayerContent'];
        }

        return $model;
    }
}
