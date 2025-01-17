<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\fileInfoList;

use AlibabaCloud\Dara\Model;

class subtitleStreamInfoList extends Model
{
    /**
     * @var string
     */
    public $codecLongName;
    /**
     * @var string
     */
    public $codecName;
    /**
     * @var string
     */
    public $codecTag;
    /**
     * @var string
     */
    public $codecTagString;
    /**
     * @var string
     */
    public $codecTimeBase;
    /**
     * @var string
     */
    public $duration;
    /**
     * @var string
     */
    public $index;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $timebase;
    protected $_name = [
        'codecLongName'  => 'CodecLongName',
        'codecName'      => 'CodecName',
        'codecTag'       => 'CodecTag',
        'codecTagString' => 'CodecTagString',
        'codecTimeBase'  => 'CodecTimeBase',
        'duration'       => 'Duration',
        'index'          => 'Index',
        'lang'           => 'Lang',
        'startTime'      => 'StartTime',
        'timebase'       => 'Timebase',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codecLongName) {
            $res['CodecLongName'] = $this->codecLongName;
        }

        if (null !== $this->codecName) {
            $res['CodecName'] = $this->codecName;
        }

        if (null !== $this->codecTag) {
            $res['CodecTag'] = $this->codecTag;
        }

        if (null !== $this->codecTagString) {
            $res['CodecTagString'] = $this->codecTagString;
        }

        if (null !== $this->codecTimeBase) {
            $res['CodecTimeBase'] = $this->codecTimeBase;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->timebase) {
            $res['Timebase'] = $this->timebase;
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
        if (isset($map['CodecLongName'])) {
            $model->codecLongName = $map['CodecLongName'];
        }

        if (isset($map['CodecName'])) {
            $model->codecName = $map['CodecName'];
        }

        if (isset($map['CodecTag'])) {
            $model->codecTag = $map['CodecTag'];
        }

        if (isset($map['CodecTagString'])) {
            $model->codecTagString = $map['CodecTagString'];
        }

        if (isset($map['CodecTimeBase'])) {
            $model->codecTimeBase = $map['CodecTimeBase'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Timebase'])) {
            $model->timebase = $map['Timebase'];
        }

        return $model;
    }
}
