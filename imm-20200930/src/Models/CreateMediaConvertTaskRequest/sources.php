<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest;

use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\sources\subtitles;
use AlibabaCloud\Tea\Model;

class sources extends Model
{
    /**
     * @description The transcoding duration of the media. Unit: seconds. Default value: 0. A value of 0 specifies that the transcoding duration lasts until the end of the video.
     *
     * @example 0
     *
     * @var float
     */
    public $duration;

    /**
     * @description The start time of the media transcoding task. Unit: seconds. Valid values:
     *
     *   0 (default): starts transcoding when the media starts playing.
     *   n: starts transcoding n seconds after the media starts playing. n must be greater than 0.
     *
     * @example 0
     *
     * @var float
     */
    public $startTime;

    /**
     * @description The subtitles. By default, this parameter is left empty.
     *
     * @var subtitles[]
     */
    public $subtitles;

    /**
     * @description The URI of the Object Storage Service (OSS) bucket. Specify the value in the `oss://${Bucket}/${Object}` format. `${Bucket}` specifies the name of the OSS bucket that resides in the same region with the current project. `${Object}` specifies the complete path to the file whose name contains an extension.
     *
     * @example oss://test-bucket/test-object
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'duration'  => 'Duration',
        'startTime' => 'StartTime',
        'subtitles' => 'Subtitles',
        'URI'       => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->subtitles) {
            $res['Subtitles'] = [];
            if (null !== $this->subtitles && \is_array($this->subtitles)) {
                $n = 0;
                foreach ($this->subtitles as $item) {
                    $res['Subtitles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Subtitles'])) {
            if (!empty($map['Subtitles'])) {
                $model->subtitles = [];
                $n                = 0;
                foreach ($map['Subtitles'] as $item) {
                    $model->subtitles[$n++] = null !== $item ? subtitles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
