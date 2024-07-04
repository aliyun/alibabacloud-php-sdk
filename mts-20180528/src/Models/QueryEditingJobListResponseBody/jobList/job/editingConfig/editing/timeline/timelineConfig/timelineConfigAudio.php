<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\QueryEditingJobListResponseBody\jobList\job\editingConfig\editing\timeline\timelineConfig;

use AlibabaCloud\Tea\Model;

class timelineConfigAudio extends Model
{
    /**
     * @var string
     */
    public $channelLayout;

    /**
     * @var string
     */
    public $channels;

    /**
     * @var string
     */
    public $samplerate;
    protected $_name = [
        'channelLayout' => 'ChannelLayout',
        'channels'      => 'Channels',
        'samplerate'    => 'Samplerate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelLayout) {
            $res['ChannelLayout'] = $this->channelLayout;
        }
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }
        if (null !== $this->samplerate) {
            $res['Samplerate'] = $this->samplerate;
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
        if (isset($map['ChannelLayout'])) {
            $model->channelLayout = $map['ChannelLayout'];
        }
        if (isset($map['Channels'])) {
            $model->channels = $map['Channels'];
        }
        if (isset($map['Samplerate'])) {
            $model->samplerate = $map['Samplerate'];
        }

        return $model;
    }
}
