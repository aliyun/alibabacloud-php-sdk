<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribeEarlyWarningResponseBody;

use AlibabaCloud\Tea\Model;

class earlyWarnings extends Model
{
    /**
     * @var string
     */
    public $frequency;

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
    public $channel;

    /**
     * @var bool
     */
    public $warnOpen;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $timeOpen;
    protected $_name = [
        'frequency' => 'Frequency',
        'timeBegin' => 'TimeBegin',
        'timeEnd'   => 'TimeEnd',
        'channel'   => 'Channel',
        'warnOpen'  => 'WarnOpen',
        'title'     => 'Title',
        'content'   => 'Content',
        'timeOpen'  => 'TimeOpen',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->timeBegin) {
            $res['TimeBegin'] = $this->timeBegin;
        }
        if (null !== $this->timeEnd) {
            $res['TimeEnd'] = $this->timeEnd;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->warnOpen) {
            $res['WarnOpen'] = $this->warnOpen;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->timeOpen) {
            $res['TimeOpen'] = $this->timeOpen;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return earlyWarnings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['TimeBegin'])) {
            $model->timeBegin = $map['TimeBegin'];
        }
        if (isset($map['TimeEnd'])) {
            $model->timeEnd = $map['TimeEnd'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['WarnOpen'])) {
            $model->warnOpen = $map['WarnOpen'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['TimeOpen'])) {
            $model->timeOpen = $map['TimeOpen'];
        }

        return $model;
    }
}
