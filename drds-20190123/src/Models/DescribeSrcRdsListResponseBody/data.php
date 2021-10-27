<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSrcRdsListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSrcRdsListResponseBody\data\data[]
     */
    public $data;
    protected $_name = [
        'data' => 'data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['data'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['data'] as $item) {
                    $model->data[$n++] = null !== $item ? \AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSrcRdsListResponseBody\data\data::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
