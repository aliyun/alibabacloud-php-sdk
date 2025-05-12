<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\mediaInfoJobList\mediaInfoJob;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\mediaInfoJobList\mediaInfoJob\properties\format;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\mediaInfoJobList\mediaInfoJob\properties\streams;

class properties extends Model
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
    public $fileFormat;

    /**
     * @var string
     */
    public $fileSize;

    /**
     * @var format
     */
    public $format;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $height;

    /**
     * @var streams
     */
    public $streams;

    /**
     * @var string
     */
    public $width;
    protected $_name = [
        'bitrate' => 'Bitrate',
        'duration' => 'Duration',
        'fileFormat' => 'FileFormat',
        'fileSize' => 'FileSize',
        'format' => 'Format',
        'fps' => 'Fps',
        'height' => 'Height',
        'streams' => 'Streams',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (null !== $this->format) {
            $this->format->validate();
        }
        if (null !== $this->streams) {
            $this->streams->validate();
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

        if (null !== $this->fileFormat) {
            $res['FileFormat'] = $this->fileFormat;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->format) {
            $res['Format'] = null !== $this->format ? $this->format->toArray($noStream) : $this->format;
        }

        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->streams) {
            $res['Streams'] = null !== $this->streams ? $this->streams->toArray($noStream) : $this->streams;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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

        if (isset($map['FileFormat'])) {
            $model->fileFormat = $map['FileFormat'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['Format'])) {
            $model->format = format::fromMap($map['Format']);
        }

        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['Streams'])) {
            $model->streams = streams::fromMap($map['Streams']);
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
