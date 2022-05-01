<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIEarthMeteorology\V20220118\Models\DailyWeatherQueryResponseBody;

use AlibabaCloud\SDK\AIEarthMeteorology\V20220118\Models\DailyWeatherQueryResponseBody\result\data;
use AlibabaCloud\SDK\AIEarthMeteorology\V20220118\Models\DailyWeatherQueryResponseBody\result\location;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @description 位置
     *
     * @var location
     */
    public $location;
    protected $_name = [
        'data'     => 'data',
        'location' => 'location',
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
        if (null !== $this->location) {
            $res['location'] = null !== $this->location ? $this->location->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['location'])) {
            $model->location = location::fromMap($map['location']);
        }

        return $model;
    }
}
