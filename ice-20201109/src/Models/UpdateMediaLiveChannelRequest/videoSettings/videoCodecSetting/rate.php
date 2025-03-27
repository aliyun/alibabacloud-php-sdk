<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\videoSettings\videoCodecSetting;

use AlibabaCloud\Dara\Model;

class rate extends Model
{
    /**
     * @var int
     */
    public $bitrate;

    /**
     * @var int
     */
    public $bufferSize;

    /**
     * @var int
     */
    public $maxBitrate;

    /**
     * @var string
     */
    public $rateControlMode;
    protected $_name = [
        'bitrate' => 'Bitrate',
        'bufferSize' => 'BufferSize',
        'maxBitrate' => 'MaxBitrate',
        'rateControlMode' => 'RateControlMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }

        if (null !== $this->bufferSize) {
            $res['BufferSize'] = $this->bufferSize;
        }

        if (null !== $this->maxBitrate) {
            $res['MaxBitrate'] = $this->maxBitrate;
        }

        if (null !== $this->rateControlMode) {
            $res['RateControlMode'] = $this->rateControlMode;
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
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }

        if (isset($map['BufferSize'])) {
            $model->bufferSize = $map['BufferSize'];
        }

        if (isset($map['MaxBitrate'])) {
            $model->maxBitrate = $map['MaxBitrate'];
        }

        if (isset($map['RateControlMode'])) {
            $model->rateControlMode = $map['RateControlMode'];
        }

        return $model;
    }
}
