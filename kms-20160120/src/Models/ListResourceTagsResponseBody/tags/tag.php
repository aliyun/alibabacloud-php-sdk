<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListResourceTagsResponseBody\tags;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The globally unique ID of the CMK.
     *
     * @example 33caea95-c3e5-4b3e-a9c6-cec76e4e****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The tag key.
     *
     * @example Project
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The tag value.
     *
     * @example Test
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'keyId'    => 'KeyId',
        'tagKey'   => 'TagKey',
        'tagValue' => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
