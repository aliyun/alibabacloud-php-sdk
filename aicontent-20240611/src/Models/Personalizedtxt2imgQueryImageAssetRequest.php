<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class Personalizedtxt2imgQueryImageAssetRequest extends Model
{
    /**
     * @var string
     */
    public $encodeFormat;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $promptId;
    protected $_name = [
        'encodeFormat' => 'encodeFormat',
        'imageId' => 'imageId',
        'modelId' => 'modelId',
        'promptId' => 'promptId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encodeFormat) {
            $res['encodeFormat'] = $this->encodeFormat;
        }

        if (null !== $this->imageId) {
            $res['imageId'] = $this->imageId;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->promptId) {
            $res['promptId'] = $this->promptId;
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
        if (isset($map['encodeFormat'])) {
            $model->encodeFormat = $map['encodeFormat'];
        }

        if (isset($map['imageId'])) {
            $model->imageId = $map['imageId'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['promptId'])) {
            $model->promptId = $map['promptId'];
        }

        return $model;
    }
}
