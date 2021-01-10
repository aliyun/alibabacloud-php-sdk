<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponseBody\videoPoseJob\properties\streams\subtitleStreamList;

use AlibabaCloud\Tea\Model;

class subtitleStream extends Model
{
    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $codecName;

    /**
     * @var string
     */
    public $codecTimeBase;

    /**
     * @var string
     */
    public $codecLongName;

    /**
     * @var string
     */
    public $codecTagString;

    /**
     * @var string
     */
    public $codecTag;

    /**
     * @var string
     */
    public $timebase;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'index'          => 'Index',
        'codecName'      => 'CodecName',
        'codecTimeBase'  => 'CodecTimeBase',
        'codecLongName'  => 'CodecLongName',
        'codecTagString' => 'CodecTagString',
        'codecTag'       => 'CodecTag',
        'timebase'       => 'Timebase',
        'startTime'      => 'StartTime',
        'duration'       => 'Duration',
        'lang'           => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->codecName) {
            $res['CodecName'] = $this->codecName;
        }
        if (null !== $this->codecTimeBase) {
            $res['CodecTimeBase'] = $this->codecTimeBase;
        }
        if (null !== $this->codecLongName) {
            $res['CodecLongName'] = $this->codecLongName;
        }
        if (null !== $this->codecTagString) {
            $res['CodecTagString'] = $this->codecTagString;
        }
        if (null !== $this->codecTag) {
            $res['CodecTag'] = $this->codecTag;
        }
        if (null !== $this->timebase) {
            $res['Timebase'] = $this->timebase;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subtitleStream
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['CodecName'])) {
            $model->codecName = $map['CodecName'];
        }
        if (isset($map['CodecTimeBase'])) {
            $model->codecTimeBase = $map['CodecTimeBase'];
        }
        if (isset($map['CodecLongName'])) {
            $model->codecLongName = $map['CodecLongName'];
        }
        if (isset($map['CodecTagString'])) {
            $model->codecTagString = $map['CodecTagString'];
        }
        if (isset($map['CodecTag'])) {
            $model->codecTag = $map['CodecTag'];
        }
        if (isset($map['Timebase'])) {
            $model->timebase = $map['Timebase'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
