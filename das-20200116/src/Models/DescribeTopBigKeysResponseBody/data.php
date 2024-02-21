<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeTopBigKeysResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeTopBigKeysResponseBody\data\bigKey;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bigKey[]
     */
    public $bigKey;
    protected $_name = [
        'bigKey' => 'BigKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bigKey) {
            $res['BigKey'] = [];
            if (null !== $this->bigKey && \is_array($this->bigKey)) {
                $n = 0;
                foreach ($this->bigKey as $item) {
                    $res['BigKey'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['BigKey'])) {
            if (!empty($map['BigKey'])) {
                $model->bigKey = [];
                $n             = 0;
                foreach ($map['BigKey'] as $item) {
                    $model->bigKey[$n++] = null !== $item ? bigKey::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
