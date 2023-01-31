<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeTagKeysResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeTagKeysResponseBody\tagKeys\tagKey;
use AlibabaCloud\Tea\Model;

class tagKeys extends Model
{
    /**
     * @var tagKey[]
     */
    public $tagKey;
    protected $_name = [
        'tagKey' => 'TagKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = [];
            if (null !== $this->tagKey && \is_array($this->tagKey)) {
                $n = 0;
                foreach ($this->tagKey as $item) {
                    $res['TagKey'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagKeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagKey'])) {
            if (!empty($map['TagKey'])) {
                $model->tagKey = [];
                $n             = 0;
                foreach ($map['TagKey'] as $item) {
                    $model->tagKey[$n++] = null !== $item ? tagKey::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
