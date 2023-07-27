<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class InitiateMultipartUploadRequest extends Model
{
    /**
     * @description The method used to encode the object name in the response. Only URL encoding is supported. The object name can contain characters encoded in UTF-8. However, the XML 1.0 standard cannot be used to parse specific control characters, such as characters whose ASCII values range from 0 to 10. You can configure the encoding-type parameter to encode object names that include characters that cannot be parsed by XML 1.0 in the response.
     * <br>Default value: null
     * @var string
     */
    public $encodingType;
    protected $_name = [
        'encodingType' => 'encoding-type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encodingType) {
            $res['encoding-type'] = $this->encodingType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitiateMultipartUploadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['encoding-type'])) {
            $model->encodingType = $map['encoding-type'];
        }

        return $model;
    }
}
