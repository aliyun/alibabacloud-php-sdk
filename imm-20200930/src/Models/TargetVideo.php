<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo\filterVideo;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo\transcodeVideo;
use AlibabaCloud\Tea\Model;

class TargetVideo extends Model
{
    /**
     * @var bool
     */
    public $disableVideo;

    /**
     * @var filterVideo
     */
    public $filterVideo;

    /**
     * @var int[]
     */
    public $stream;

    /**
     * @var transcodeVideo
     */
    public $transcodeVideo;
    protected $_name = [
        'disableVideo'   => 'DisableVideo',
        'filterVideo'    => 'FilterVideo',
        'stream'         => 'Stream',
        'transcodeVideo' => 'TranscodeVideo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableVideo) {
            $res['DisableVideo'] = $this->disableVideo;
        }
        if (null !== $this->filterVideo) {
            $res['FilterVideo'] = null !== $this->filterVideo ? $this->filterVideo->toMap() : null;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }
        if (null !== $this->transcodeVideo) {
            $res['TranscodeVideo'] = null !== $this->transcodeVideo ? $this->transcodeVideo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TargetVideo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisableVideo'])) {
            $model->disableVideo = $map['DisableVideo'];
        }
        if (isset($map['FilterVideo'])) {
            $model->filterVideo = filterVideo::fromMap($map['FilterVideo']);
        }
        if (isset($map['Stream'])) {
            if (!empty($map['Stream'])) {
                $model->stream = $map['Stream'];
            }
        }
        if (isset($map['TranscodeVideo'])) {
            $model->transcodeVideo = transcodeVideo::fromMap($map['TranscodeVideo']);
        }

        return $model;
    }
}
