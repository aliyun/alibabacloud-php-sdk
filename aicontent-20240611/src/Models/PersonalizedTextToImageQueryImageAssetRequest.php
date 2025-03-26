<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class PersonalizedTextToImageQueryImageAssetRequest extends Model
{
    /**
     * @var string
     */
    public $encodeFormat;

    /**
     * @var string
     */
    public $imageId;
    protected $_name = [
        'encodeFormat' => 'encodeFormat',
        'imageId' => 'imageId',
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

        return $model;
    }
}
