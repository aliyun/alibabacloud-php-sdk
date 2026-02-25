<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\mediaInfoJobList\mediaInfoJob\properties;

use AlibabaCloud\Dara\Model;

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

    /**
     * @var mixed[]
     */
    public $tags;
    protected $_name = [
        'bitrate' => 'Bitrate',
        'duration' => 'Duration',
        'formatLongName' => 'FormatLongName',
        'formatName' => 'FormatName',
        'numPrograms' => 'NumPrograms',
        'numStreams' => 'NumStreams',
        'size' => 'Size',
        'startTime' => 'StartTime',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
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

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
