<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class VideoMediaAudioStream extends Model
{
    /**
     * @example 129280
     *
     * @var string
     */
    public $bitRate;

    /**
     * @example aac
     *
     * @var string
     */
    public $codeName;

    /**
     * @example 7704.573000
     *
     * @var string
     */
    public $duration;
    protected $_name = [
        'bitRate'  => 'bit_rate',
        'codeName' => 'code_name',
        'duration' => 'duration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitRate) {
            $res['bit_rate'] = $this->bitRate;
        }
        if (null !== $this->codeName) {
            $res['code_name'] = $this->codeName;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VideoMediaAudioStream
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bit_rate'])) {
            $model->bitRate = $map['bit_rate'];
        }
        if (isset($map['code_name'])) {
            $model->codeName = $map['code_name'];
        }
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        return $model;
    }
}
