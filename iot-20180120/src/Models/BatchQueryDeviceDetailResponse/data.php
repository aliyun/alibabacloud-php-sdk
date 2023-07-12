<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchQueryDeviceDetailResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Iot\V20180120\Models\BatchQueryDeviceDetailResponse\data\data[]
     */
    public $data;
    protected $_name = [
        'data' => 'Data',
    ];

    public function validate()
    {
        Model::validateRequired('data', $this->data, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? \AlibabaCloud\SDK\Iot\V20180120\Models\BatchQueryDeviceDetailResponse\data\data::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
