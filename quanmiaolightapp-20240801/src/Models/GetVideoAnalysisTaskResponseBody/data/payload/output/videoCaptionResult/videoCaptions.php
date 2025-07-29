<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoCaptionResult;

use AlibabaCloud\Tea\Model;

class videoCaptions extends Model
{
    /**
     * @example 1736129678000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 00:01
     *
     * @var string
     */
    public $endTimeFormat;

    /**
     * @example 张三
     *
     * @var string
     */
    public $speaker;

    /**
     * @example 00:01
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 2025-01-07 11:52:06
     *
     * @var string
     */
    public $startTimeFormat;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'endTime' => 'endTime',
        'endTimeFormat' => 'endTimeFormat',
        'speaker' => 'speaker',
        'startTime' => 'startTime',
        'startTimeFormat' => 'startTimeFormat',
        'text' => 'text',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->endTimeFormat) {
            $res['endTimeFormat'] = $this->endTimeFormat;
        }
        if (null !== $this->speaker) {
            $res['speaker'] = $this->speaker;
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

    /**
     * @param array $map
     *
     * @return videoCaptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['endTimeFormat'])) {
            $model->endTimeFormat = $map['endTimeFormat'];
        }
        if (isset($map['speaker'])) {
            $model->speaker = $map['speaker'];
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
