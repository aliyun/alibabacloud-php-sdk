<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class SplitVideoPartsAdvanceRequest extends Model
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
     * @var Stream
     */
    public $videoUrlObject;
    protected $_name = [
        'maxTime' => 'MaxTime',
        'minTime' => 'MinTime',
        'template' => 'Template',
        'videoUrlObject' => 'VideoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->videoUrlObject) {
            $res['VideoUrl'] = $this->videoUrlObject;
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
            $model->videoUrlObject = $map['VideoUrl'];
        }

        return $model;
    }
}
