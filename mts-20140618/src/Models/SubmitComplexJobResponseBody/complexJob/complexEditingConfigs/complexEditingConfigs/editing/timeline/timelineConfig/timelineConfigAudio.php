<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\complexEditingConfigs\complexEditingConfigs\editing\timeline\timelineConfig;

use AlibabaCloud\Tea\Model;

class timelineConfigAudio extends Model
{
    /**
     * @var string
     */
    public $samplerate;

    /**
     * @var string
     */
    public $channelLayout;

    /**
     * @var string
     */
    public $channels;
    protected $_name = [
        'samplerate'    => 'Samplerate',
        'channelLayout' => 'ChannelLayout',
        'channels'      => 'Channels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->samplerate) {
            $res['Samplerate'] = $this->samplerate;
        }
        if (null !== $this->channelLayout) {
            $res['ChannelLayout'] = $this->channelLayout;
        }
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timelineConfigAudio
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Samplerate'])) {
            $model->samplerate = $map['Samplerate'];
        }
        if (isset($map['ChannelLayout'])) {
            $model->channelLayout = $map['ChannelLayout'];
        }
        if (isset($map['Channels'])) {
            $model->channels = $map['Channels'];
        }

        return $model;
    }
}
