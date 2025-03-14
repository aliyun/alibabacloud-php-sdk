<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\videoSettings\videoCodecSetting;

use AlibabaCloud\Tea\Model;

class rate extends Model
{
    /**
     * @description The video bitrate. Unit: bit/s. If you set it to 0 or leave it empty, the source specification is used. Valid values: 50000 to 6000000. The value must be divisible by 1000.
     *
     * @example 2500000
     *
     * @var int
     */
    public $bitrate;

    /**
     * @description The video buffer size. Unit: bit/s. Valid values: 100000 to 6000000. The value must be divisible by 1000.
     *
     * @example 6000000
     *
     * @var int
     */
    public $bufferSize;

    /**
     * @description The maximum bitrate. Unit: bit/s. Valid values: 100000 to 6000000. The value must be divisible by 1000.
     *
     * @example 6000000
     *
     * @var int
     */
    public $maxBitrate;

    /**
     * @description The bitrate control mode. Valid values: CBR, ABR, and VBR.
     *
     * @example ABR
     *
     * @var string
     */
    public $rateControlMode;
    protected $_name = [
        'bitrate' => 'Bitrate',
        'bufferSize' => 'BufferSize',
        'maxBitrate' => 'MaxBitrate',
        'rateControlMode' => 'RateControlMode',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return rate
     */
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
