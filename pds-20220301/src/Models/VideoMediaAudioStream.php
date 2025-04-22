<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class VideoMediaAudioStream extends Model
{
    /**
     * @var string
     */
    public $bitRate;

    /**
     * @var string
     */
    public $codeName;

    /**
     * @var string
     */
    public $duration;
    protected $_name = [
        'bitRate' => 'bit_rate',
        'codeName' => 'code_name',
        'duration' => 'duration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
