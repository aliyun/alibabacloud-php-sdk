<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListResourceTagsResponseBody\tags;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $tagValue;

    /**
     * @var string
     */
    public $tagKey;
    protected $_name = [
        'keyId'    => 'KeyId',
        'tagValue' => 'TagValue',
        'tagKey'   => 'TagKey',
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
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
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
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }

        return $model;
    }
}
