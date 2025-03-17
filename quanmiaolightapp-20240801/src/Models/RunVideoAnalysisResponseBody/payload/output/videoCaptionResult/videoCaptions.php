<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoCaptionResult;

use AlibabaCloud\Tea\Model;

class videoCaptions extends Model
{
    /**
     * @example 1710432000000
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
     * @example 0
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 00:01
     *
     * @var string
     */
    public $startTimeFormat;

    /**
     * @example xxx
     *
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
