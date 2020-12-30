<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListRecordingOfDualTrackResponseBody\recordings;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecordingOfDualTrackResponseBody\recordings\list_\recording;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var recording[]
     */
    public $recording;
    protected $_name = [
        'recording' => 'Recording',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recording) {
            $res['Recording'] = [];
            if (null !== $this->recording && \is_array($this->recording)) {
                $n = 0;
                foreach ($this->recording as $item) {
                    $res['Recording'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Recording'])) {
            if (!empty($map['Recording'])) {
                $model->recording = [];
                $n                = 0;
                foreach ($map['Recording'] as $item) {
                    $model->recording[$n++] = null !== $item ? recording::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
