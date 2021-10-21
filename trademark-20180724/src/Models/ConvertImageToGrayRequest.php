<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class ConvertImageToGrayRequest extends Model
{
    /**
     * @var string
     */
    public $ossKey;
    protected $_name = [
        'ossKey' => 'OssKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertImageToGrayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        return $model;
    }
}
