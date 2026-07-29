<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeTagsResponseBody\tags;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeTagsResponseBody\tags\tag\tagValues;

class tag extends Model
{
    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var tagValues
     */
    public $tagValues;
    protected $_name = [
        'tagKey' => 'TagKey',
        'tagValues' => 'TagValues',
    ];

    public function validate()
    {
        if (null !== $this->tagValues) {
            $this->tagValues->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        if (null !== $this->tagValues) {
            $res['TagValues'] = null !== $this->tagValues ? $this->tagValues->toArray($noStream) : $this->tagValues;
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
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }

        if (isset($map['TagValues'])) {
            $model->tagValues = tagValues::fromMap($map['TagValues']);
        }

        return $model;
    }
}
