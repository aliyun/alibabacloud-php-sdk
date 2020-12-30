<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\ListStreamsForCamerasResponseBody;

use AlibabaCloud\Tea\Model;

class streams extends Model
{
    /**
     * @var string[]
     */
    public $stream;
    protected $_name = [
        'stream' => 'Stream',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Stream'])) {
            if (!empty($map['Stream'])) {
                $model->stream = $map['Stream'];
            }
        }

        return $model;
    }
}
