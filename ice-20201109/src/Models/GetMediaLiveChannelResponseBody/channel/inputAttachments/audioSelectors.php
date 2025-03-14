<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\inputAttachments;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\inputAttachments\audioSelectors\audioLanguageSelection;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\inputAttachments\audioSelectors\audioPidSelection;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\inputAttachments\audioSelectors\audioTrackSelection;
use AlibabaCloud\Tea\Model;

class audioSelectors extends Model
{
    /**
     * @description The audio language selection.
     *
     * @var audioLanguageSelection
     */
    public $audioLanguageSelection;

    /**
     * @description The audio PID selection.
     *
     * @var audioPidSelection
     */
    public $audioPidSelection;

    /**
     * @description The audio track selection.
     *
     * @var audioTrackSelection[]
     */
    public $audioTrackSelection;

    /**
     * @description The name of the audio selector.
     *
     * This parameter is required.
     *
     * @example myselector
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'audioLanguageSelection' => 'AudioLanguageSelection',
        'audioPidSelection' => 'AudioPidSelection',
        'audioTrackSelection' => 'AudioTrackSelection',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioLanguageSelection) {
            $res['AudioLanguageSelection'] = null !== $this->audioLanguageSelection ? $this->audioLanguageSelection->toMap() : null;
        }
        if (null !== $this->audioPidSelection) {
            $res['AudioPidSelection'] = null !== $this->audioPidSelection ? $this->audioPidSelection->toMap() : null;
        }
        if (null !== $this->audioTrackSelection) {
            $res['AudioTrackSelection'] = [];
            if (null !== $this->audioTrackSelection && \is_array($this->audioTrackSelection)) {
                $n = 0;
                foreach ($this->audioTrackSelection as $item) {
                    $res['AudioTrackSelection'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioSelectors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioLanguageSelection'])) {
            $model->audioLanguageSelection = audioLanguageSelection::fromMap($map['AudioLanguageSelection']);
        }
        if (isset($map['AudioPidSelection'])) {
            $model->audioPidSelection = audioPidSelection::fromMap($map['AudioPidSelection']);
        }
        if (isset($map['AudioTrackSelection'])) {
            if (!empty($map['AudioTrackSelection'])) {
                $model->audioTrackSelection = [];
                $n = 0;
                foreach ($map['AudioTrackSelection'] as $item) {
                    $model->audioTrackSelection[$n++] = null !== $item ? audioTrackSelection::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
