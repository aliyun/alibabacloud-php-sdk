<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\ListTagKeysResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListTagKeysResponseBody\keys\key;

class keys extends Model
{
    /**
     * @var key[]
     */
    public $key;
    protected $_name = [
        'key' => 'Key',
    ];

    public function validate()
    {
        if (\is_array($this->key)) {
            Model::validateArray($this->key);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            if (\is_array($this->key)) {
                $res['Key'] = [];
                $n1         = 0;
                foreach ($this->key as $item1) {
                    $res['Key'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Key'])) {
            if (!empty($map['Key'])) {
                $model->key = [];
                $n1         = 0;
                foreach ($map['Key'] as $item1) {
                    $model->key[$n1++] = key::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
