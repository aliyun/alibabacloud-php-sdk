<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRetailVision\V20260506\Models;

use AlibabaCloud\Dara\Model;

class ImportProductsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $extraImagesShrink;

    /**
     * @var string
     */
    public $imageTitle;

    /**
     * @var string
     */
    public $itemUniqueId;

    /**
     * @var string
     */
    public $mainImageShrink;

    /**
     * @var string
     */
    public $multiViewImagesShrink;
    protected $_name = [
        'deviceId' => 'DeviceId',
        'extraImagesShrink' => 'ExtraImages',
        'imageTitle' => 'ImageTitle',
        'itemUniqueId' => 'ItemUniqueId',
        'mainImageShrink' => 'MainImage',
        'multiViewImagesShrink' => 'MultiViewImages',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->extraImagesShrink) {
            $res['ExtraImages'] = $this->extraImagesShrink;
        }

        if (null !== $this->imageTitle) {
            $res['ImageTitle'] = $this->imageTitle;
        }

        if (null !== $this->itemUniqueId) {
            $res['ItemUniqueId'] = $this->itemUniqueId;
        }

        if (null !== $this->mainImageShrink) {
            $res['MainImage'] = $this->mainImageShrink;
        }

        if (null !== $this->multiViewImagesShrink) {
            $res['MultiViewImages'] = $this->multiViewImagesShrink;
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
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['ExtraImages'])) {
            $model->extraImagesShrink = $map['ExtraImages'];
        }

        if (isset($map['ImageTitle'])) {
            $model->imageTitle = $map['ImageTitle'];
        }

        if (isset($map['ItemUniqueId'])) {
            $model->itemUniqueId = $map['ItemUniqueId'];
        }

        if (isset($map['MainImage'])) {
            $model->mainImageShrink = $map['MainImage'];
        }

        if (isset($map['MultiViewImages'])) {
            $model->multiViewImagesShrink = $map['MultiViewImages'];
        }

        return $model;
    }
}
