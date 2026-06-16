<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class ImageCroppingRequest extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var int
     */
    public $targetHeight;

    /**
     * @var int
     */
    public $targetWidth;
    protected $_name = [
        'imageUrl' => 'ImageUrl',
        'targetHeight' => 'TargetHeight',
        'targetWidth' => 'TargetWidth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->targetHeight) {
            $res['TargetHeight'] = $this->targetHeight;
        }

        if (null !== $this->targetWidth) {
            $res['TargetWidth'] = $this->targetWidth;
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
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['TargetHeight'])) {
            $model->targetHeight = $map['TargetHeight'];
        }

        if (isset($map['TargetWidth'])) {
            $model->targetWidth = $map['TargetWidth'];
        }

        return $model;
    }
}
