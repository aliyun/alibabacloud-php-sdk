<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\inputAttachments;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\inputAttachments\audioSelectors\audioLanguageSelection;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\inputAttachments\audioSelectors\audioPidSelection;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\inputAttachments\audioSelectors\audioTrackSelection;

class audioSelectors extends Model
{
    /**
     * @var audioLanguageSelection
     */
    public $audioLanguageSelection;

    /**
     * @var audioPidSelection
     */
    public $audioPidSelection;

    /**
     * @var audioTrackSelection[]
     */
    public $audioTrackSelection;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'audioLanguageSelection' => 'AudioLanguageSelection',
        'audioPidSelection' => 'AudioPidSelection',
        'audioTrackSelection' => 'AudioTrackSelection',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (null !== $this->audioLanguageSelection) {
            $this->audioLanguageSelection->validate();
        }
        if (null !== $this->audioPidSelection) {
            $this->audioPidSelection->validate();
        }
        if (\is_array($this->audioTrackSelection)) {
            Model::validateArray($this->audioTrackSelection);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioLanguageSelection) {
            $res['AudioLanguageSelection'] = null !== $this->audioLanguageSelection ? $this->audioLanguageSelection->toArray($noStream) : $this->audioLanguageSelection;
        }

        if (null !== $this->audioPidSelection) {
            $res['AudioPidSelection'] = null !== $this->audioPidSelection ? $this->audioPidSelection->toArray($noStream) : $this->audioPidSelection;
        }

        if (null !== $this->audioTrackSelection) {
            if (\is_array($this->audioTrackSelection)) {
                $res['AudioTrackSelection'] = [];
                $n1 = 0;
                foreach ($this->audioTrackSelection as $item1) {
                    $res['AudioTrackSelection'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['AudioLanguageSelection'])) {
            $model->audioLanguageSelection = audioLanguageSelection::fromMap($map['AudioLanguageSelection']);
        }

        if (isset($map['AudioPidSelection'])) {
            $model->audioPidSelection = audioPidSelection::fromMap($map['AudioPidSelection']);
        }

        if (isset($map['AudioTrackSelection'])) {
            if (!empty($map['AudioTrackSelection'])) {
                $model->audioTrackSelection = [];
                $n1 = 0;
                foreach ($map['AudioTrackSelection'] as $item1) {
                    $model->audioTrackSelection[$n1++] = audioTrackSelection::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
