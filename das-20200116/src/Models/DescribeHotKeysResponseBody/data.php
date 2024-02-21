<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotKeysResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotKeysResponseBody\data\hotKey;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotKey) {
            $res['HotKey'] = [];
            if (null !== $this->hotKey && \is_array($this->hotKey)) {
                $n = 0;
                foreach ($this->hotKey as $item) {
                    $res['HotKey'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotKey'])) {
            if (!empty($map['HotKey'])) {
                $model->hotKey = [];
                $n             = 0;
                foreach ($map['HotKey'] as $item) {
                    $model->hotKey[$n++] = null !== $item ? hotKey::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
