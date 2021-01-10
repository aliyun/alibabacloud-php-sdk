<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddCasterComponentRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $casterId;

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
     * @var string
     */
    public $componentLayer;

    /**
     * @var string
     */
    public $layerOrder;

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

    /**
     * @var string
     */
    public $htmlLayerContent;
    protected $_name = [
        'ownerId'             => 'OwnerId',
        'casterId'            => 'CasterId',
        'componentName'       => 'ComponentName',
        'locationId'          => 'LocationId',
        'componentType'       => 'ComponentType',
        'effect'              => 'Effect',
        'componentLayer'      => 'ComponentLayer',
        'layerOrder'          => 'LayerOrder',
        'textLayerContent'    => 'TextLayerContent',
        'imageLayerContent'   => 'ImageLayerContent',
        'captionLayerContent' => 'CaptionLayerContent',
        'htmlLayerContent'    => 'HtmlLayerContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
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
            $res['ComponentLayer'] = $this->componentLayer;
        }
        if (null !== $this->layerOrder) {
            $res['LayerOrder'] = $this->layerOrder;
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
        if (null !== $this->htmlLayerContent) {
            $res['HtmlLayerContent'] = $this->htmlLayerContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCasterComponentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
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
            $model->componentLayer = $map['ComponentLayer'];
        }
        if (isset($map['LayerOrder'])) {
            $model->layerOrder = $map['LayerOrder'];
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
        if (isset($map['HtmlLayerContent'])) {
            $model->htmlLayerContent = $map['HtmlLayerContent'];
        }

        return $model;
    }
}
