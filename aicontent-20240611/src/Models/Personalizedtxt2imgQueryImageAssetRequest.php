<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class Personalizedtxt2imgQueryImageAssetRequest extends Model
{
    /**
     * @example base64
     *
     * @var string
     */
    public $encodeFormat;

    /**
     * @description This parameter is required.
     *
     * @example 0000.png
     *
     * @var string
     */
    public $imageId;

    /**
     * @description This parameter is required.
     *
     * @example girl-xxxx-xxxx-xxxx-xxxx
     *
     * @var string
     */
    public $modelId;

    /**
     * @description This parameter is required.
     *
     * @example xxxx-xxxx-xxxx-xxxx
     *
     * @var string
     */
    public $promptId;
    protected $_name = [
        'encodeFormat' => 'encodeFormat',
        'imageId'      => 'imageId',
        'modelId'      => 'modelId',
        'promptId'     => 'promptId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return Personalizedtxt2imgQueryImageAssetRequest
     */
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
