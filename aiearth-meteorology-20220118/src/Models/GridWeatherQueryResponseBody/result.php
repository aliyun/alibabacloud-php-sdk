<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIEarthMeteorology\V20220118\Models\GridWeatherQueryResponseBody;

use AlibabaCloud\SDK\AIEarthMeteorology\V20220118\Models\GridWeatherQueryResponseBody\result\data;
use AlibabaCloud\SDK\AIEarthMeteorology\V20220118\Models\GridWeatherQueryResponseBody\result\location;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 该位置的查询结果
     *
     * @var data[]
     */
    public $data;

    /**
     * @description 位置
     *
     * @var location
     */
    public $location;

    /**
     * @description 起报时间
     *
     * @var string
     */
    public $reportTimestamp;
    protected $_name = [
        'data'            => 'data',
        'location'        => 'location',
        'reportTimestamp' => 'reportTimestamp',
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
        if (null !== $this->reportTimestamp) {
            $res['reportTimestamp'] = $this->reportTimestamp;
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
        if (isset($map['reportTimestamp'])) {
            $model->reportTimestamp = $map['reportTimestamp'];
        }

        return $model;
    }
}
