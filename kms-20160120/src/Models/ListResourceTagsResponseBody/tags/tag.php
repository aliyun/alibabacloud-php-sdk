<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListResourceTagsResponseBody\tags;

use AlibabaCloud\Dara\Model;

class tag extends Model
{
    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'keyId' => 'KeyId',
        'tagKey' => 'TagKey',
        'tagValue' => 'TagValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
