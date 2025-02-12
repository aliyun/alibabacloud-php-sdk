<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeTagKeysResponseBody;

use AlibabaCloud\Dara\Model;

class tagKeys extends Model
{
    /**
     * @var int
     */
    public $tagCount;
    /**
     * @var string
     */
    public $tagKey;
    protected $_name = [
        'tagCount' => 'TagCount',
        'tagKey'   => 'TagKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagCount) {
            $res['TagCount'] = $this->tagCount;
        }

        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
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
        if (isset($map['TagCount'])) {
            $model->tagCount = $map['TagCount'];
        }

        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }

        return $model;
    }
}
