<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class UpgradeRenderingServerImageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var bool
     */
    public $precheck;

    /**
     * @var string
     */
    public $renderingInstanceIdsShrink;
    protected $_name = [
        'imageId' => 'ImageId',
        'precheck' => 'Precheck',
        'renderingInstanceIdsShrink' => 'RenderingInstanceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->precheck) {
            $res['Precheck'] = $this->precheck;
        }

        if (null !== $this->renderingInstanceIdsShrink) {
            $res['RenderingInstanceIds'] = $this->renderingInstanceIdsShrink;
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
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['Precheck'])) {
            $model->precheck = $map['Precheck'];
        }

        if (isset($map['RenderingInstanceIds'])) {
            $model->renderingInstanceIdsShrink = $map['RenderingInstanceIds'];
        }

        return $model;
    }
}
