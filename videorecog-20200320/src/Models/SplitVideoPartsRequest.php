<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models;

use AlibabaCloud\Tea\Model;

class SplitVideoPartsRequest extends Model
{
    /**
     * @var int
     */
    public $maxTime;

    /**
     * @var int
     */
    public $minTime;

    /**
     * @var string
     */
    public $template;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/ocr/xxxx.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'maxTime'  => 'MaxTime',
        'minTime'  => 'MinTime',
        'template' => 'Template',
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxTime) {
            $res['MaxTime'] = $this->maxTime;
        }
        if (null !== $this->minTime) {
            $res['MinTime'] = $this->minTime;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SplitVideoPartsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxTime'])) {
            $model->maxTime = $map['MaxTime'];
        }
        if (isset($map['MinTime'])) {
            $model->minTime = $map['MinTime'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
