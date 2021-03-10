<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\Tea\Model;

class SetEarlyWarningRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var bool
     */
    public $warnOpen;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $frequency;

    /**
     * @var bool
     */
    public $timeOpen;

    /**
     * @var string
     */
    public $timeBegin;

    /**
     * @var string
     */
    public $timeEnd;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'sourceIp'  => 'SourceIp',
        'warnOpen'  => 'WarnOpen',
        'channel'   => 'Channel',
        'frequency' => 'Frequency',
        'timeOpen'  => 'TimeOpen',
        'timeBegin' => 'TimeBegin',
        'timeEnd'   => 'TimeEnd',
        'title'     => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->warnOpen) {
            $res['WarnOpen'] = $this->warnOpen;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->timeOpen) {
            $res['TimeOpen'] = $this->timeOpen;
        }
        if (null !== $this->timeBegin) {
            $res['TimeBegin'] = $this->timeBegin;
        }
        if (null !== $this->timeEnd) {
            $res['TimeEnd'] = $this->timeEnd;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetEarlyWarningRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['WarnOpen'])) {
            $model->warnOpen = $map['WarnOpen'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['TimeOpen'])) {
            $model->timeOpen = $map['TimeOpen'];
        }
        if (isset($map['TimeBegin'])) {
            $model->timeBegin = $map['TimeBegin'];
        }
        if (isset($map['TimeEnd'])) {
            $model->timeEnd = $map['TimeEnd'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
