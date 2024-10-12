<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class PersonalizedTextToImageQueryImageAssetRequest extends Model
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
    protected $_name = [
        'encodeFormat' => 'encodeFormat',
        'imageId'      => 'imageId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PersonalizedTextToImageQueryImageAssetRequest
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

        return $model;
    }
}
