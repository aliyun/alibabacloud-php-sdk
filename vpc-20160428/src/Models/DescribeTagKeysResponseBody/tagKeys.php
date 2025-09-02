<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeTagKeysResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeTagKeysResponseBody\tagKeys\tagKey;

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
        if (\is_array($this->tagKey)) {
            Model::validateArray($this->tagKey);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagKey) {
            if (\is_array($this->tagKey)) {
                $res['TagKey'] = [];
                $n1 = 0;
                foreach ($this->tagKey as $item1) {
                    $res['TagKey'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['TagKey'])) {
                $model->tagKey = [];
                $n1 = 0;
                foreach ($map['TagKey'] as $item1) {
                    $model->tagKey[$n1] = tagKey::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
