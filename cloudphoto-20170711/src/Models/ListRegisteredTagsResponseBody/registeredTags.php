<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListRegisteredTagsResponseBody;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListRegisteredTagsResponseBody\registeredTags\tagValues;
use AlibabaCloud\Tea\Model;

class registeredTags extends Model
{
    /**
     * @var tagValues[]
     */
    public $tagValues;

    /**
     * @var string
     */
    public $tagKey;
    protected $_name = [
        'tagValues' => 'TagValues',
        'tagKey'    => 'TagKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagValues) {
            $res['TagValues'] = [];
            if (null !== $this->tagValues && \is_array($this->tagValues)) {
                $n = 0;
                foreach ($this->tagValues as $item) {
                    $res['TagValues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return registeredTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagValues'])) {
            if (!empty($map['TagValues'])) {
                $model->tagValues = [];
                $n                = 0;
                foreach ($map['TagValues'] as $item) {
                    $model->tagValues[$n++] = null !== $item ? tagValues::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }

        return $model;
    }
}
