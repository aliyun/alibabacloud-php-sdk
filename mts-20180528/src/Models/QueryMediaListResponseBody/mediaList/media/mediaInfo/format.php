<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\QueryMediaListResponseBody\mediaList\media\mediaInfo;

use AlibabaCloud\Tea\Model;

class format extends Model
{
    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $formatLongName;

    /**
     * @var string
     */
    public $formatName;

    /**
     * @var string
     */
    public $numPrograms;

    /**
     * @var string
     */
    public $numStreams;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'bitrate'        => 'Bitrate',
        'duration'       => 'Duration',
        'formatLongName' => 'FormatLongName',
        'formatName'     => 'FormatName',
        'numPrograms'    => 'NumPrograms',
        'numStreams'     => 'NumStreams',
        'size'           => 'Size',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->formatLongName) {
            $res['FormatLongName'] = $this->formatLongName;
        }
        if (null !== $this->formatName) {
            $res['FormatName'] = $this->formatName;
        }
        if (null !== $this->numPrograms) {
            $res['NumPrograms'] = $this->numPrograms;
        }
        if (null !== $this->numStreams) {
            $res['NumStreams'] = $this->numStreams;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return format
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FormatLongName'])) {
            $model->formatLongName = $map['FormatLongName'];
        }
        if (isset($map['FormatName'])) {
            $model->formatName = $map['FormatName'];
        }
        if (isset($map['NumPrograms'])) {
            $model->numPrograms = $map['NumPrograms'];
        }
        if (isset($map['NumStreams'])) {
            $model->numStreams = $map['NumStreams'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
