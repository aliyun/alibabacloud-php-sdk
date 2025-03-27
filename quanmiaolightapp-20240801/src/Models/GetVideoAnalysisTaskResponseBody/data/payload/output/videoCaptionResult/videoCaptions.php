<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoCaptionResult;

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
    public $endTimeFormat;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $startTimeFormat;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'endTime' => 'endTime',
        'endTimeFormat' => 'endTimeFormat',
        'startTime' => 'startTime',
        'startTimeFormat' => 'startTimeFormat',
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

        if (null !== $this->endTimeFormat) {
            $res['endTimeFormat'] = $this->endTimeFormat;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->startTimeFormat) {
            $res['startTimeFormat'] = $this->startTimeFormat;
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

        if (isset($map['endTimeFormat'])) {
            $model->endTimeFormat = $map['endTimeFormat'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['startTimeFormat'])) {
            $model->startTimeFormat = $map['startTimeFormat'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
