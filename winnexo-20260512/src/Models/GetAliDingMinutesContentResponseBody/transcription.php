<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetAliDingMinutesContentResponseBody;

use AlibabaCloud\Dara\Model;

class transcription extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $speaker;

    /**
     * @var string
     */
    public $speakerAvatar;

    /**
     * @var int
     */
    public $timeEnd;

    /**
     * @var int
     */
    public $timeStart;
    protected $_name = [
        'content' => 'content',
        'speaker' => 'speaker',
        'speakerAvatar' => 'speakerAvatar',
        'timeEnd' => 'timeEnd',
        'timeStart' => 'timeStart',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->speaker) {
            $res['speaker'] = $this->speaker;
        }

        if (null !== $this->speakerAvatar) {
            $res['speakerAvatar'] = $this->speakerAvatar;
        }

        if (null !== $this->timeEnd) {
            $res['timeEnd'] = $this->timeEnd;
        }

        if (null !== $this->timeStart) {
            $res['timeStart'] = $this->timeStart;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['speaker'])) {
            $model->speaker = $map['speaker'];
        }

        if (isset($map['speakerAvatar'])) {
            $model->speakerAvatar = $map['speakerAvatar'];
        }

        if (isset($map['timeEnd'])) {
            $model->timeEnd = $map['timeEnd'];
        }

        if (isset($map['timeStart'])) {
            $model->timeStart = $map['timeStart'];
        }

        return $model;
    }
}
