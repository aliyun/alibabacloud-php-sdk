<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest\videoCaptionInfo;

use AlibabaCloud\Dara\Model;

class videoCaptions extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $speaker;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'endTime' => 'endTime',
        'speaker' => 'speaker',
        'startTime' => 'startTime',
        'text' => 'text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->speaker) {
            $res['speaker'] = $this->speaker;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['speaker'])) {
            $model->speaker = $map['speaker'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
