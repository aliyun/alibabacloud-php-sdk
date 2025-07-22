<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest\singleStreamingRecord\transcodingParameters;

use AlibabaCloud\Tea\Model;

class audio extends Model
{
    /**
     * @var int
     */
    public $bitrate;

    /**
     * @var string
     */
    public $codec;

    /**
     * @var int
     */
    public $sampleRate;
    protected $_name = [
        'bitrate' => 'Bitrate',
        'codec' => 'Codec',
        'sampleRate' => 'SampleRate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
        }
        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audio
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }
        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }

        return $model;
    }
}
