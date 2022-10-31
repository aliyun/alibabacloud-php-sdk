<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyCasterComponentRequest extends Model
{
    /**
     * @var string
     */
    public $captionLayerContent;

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
     * @var string
     */
    public $imageLayerContent;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $textLayerContent;
    protected $_name = [
        'captionLayerContent' => 'CaptionLayerContent',
        'casterId'            => 'CasterId',
        'componentId'         => 'ComponentId',
        'componentLayer'      => 'ComponentLayer',
        'componentName'       => 'ComponentName',
        'componentType'       => 'ComponentType',
        'effect'              => 'Effect',
        'imageLayerContent'   => 'ImageLayerContent',
        'ownerId'             => 'OwnerId',
        'textLayerContent'    => 'TextLayerContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->captionLayerContent) {
            $res['CaptionLayerContent'] = $this->captionLayerContent;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }
        if (null !== $this->componentLayer) {
            $res['ComponentLayer'] = $this->componentLayer;
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
            $res['ImageLayerContent'] = $this->imageLayerContent;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->textLayerContent) {
            $res['TextLayerContent'] = $this->textLayerContent;
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
        if (isset($map['CaptionLayerContent'])) {
            $model->captionLayerContent = $map['CaptionLayerContent'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }
        if (isset($map['ComponentLayer'])) {
            $model->componentLayer = $map['ComponentLayer'];
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
            $model->imageLayerContent = $map['ImageLayerContent'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['TextLayerContent'])) {
            $model->textLayerContent = $map['TextLayerContent'];
        }

        return $model;
    }
}
