<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotKeysResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotKeysResponseBody\data\hotKey;

class data extends Model
{
    /**
     * @var hotKey[]
     */
    public $hotKey;
    protected $_name = [
        'hotKey' => 'HotKey',
    ];

    public function validate()
    {
        if (\is_array($this->hotKey)) {
            Model::validateArray($this->hotKey);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotKey) {
            if (\is_array($this->hotKey)) {
                $res['HotKey'] = [];
                $n1            = 0;
                foreach ($this->hotKey as $item1) {
                    $res['HotKey'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HotKey'])) {
            if (!empty($map['HotKey'])) {
                $model->hotKey = [];
                $n1            = 0;
                foreach ($map['HotKey'] as $item1) {
                    $model->hotKey[$n1++] = hotKey::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
