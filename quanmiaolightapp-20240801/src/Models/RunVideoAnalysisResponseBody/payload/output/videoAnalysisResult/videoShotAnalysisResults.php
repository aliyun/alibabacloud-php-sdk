<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoAnalysisResult;

use AlibabaCloud\Tea\Model;

class videoShotAnalysisResults extends Model
{
    /**
     * @example 10000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1000
     *
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'endTime' => 'endTime',
        'startTime' => 'startTime',
        'text' => 'text',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoShotAnalysisResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
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
