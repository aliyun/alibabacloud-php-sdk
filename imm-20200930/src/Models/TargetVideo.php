<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo\filterVideo;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo\transcodeVideo;

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
        'disableVideo' => 'DisableVideo',
        'filterVideo' => 'FilterVideo',
        'stream' => 'Stream',
        'transcodeVideo' => 'TranscodeVideo',
    ];

    public function validate()
    {
        if (null !== $this->filterVideo) {
            $this->filterVideo->validate();
        }
        if (\is_array($this->stream)) {
            Model::validateArray($this->stream);
        }
        if (null !== $this->transcodeVideo) {
            $this->transcodeVideo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disableVideo) {
            $res['DisableVideo'] = $this->disableVideo;
        }

        if (null !== $this->filterVideo) {
            $res['FilterVideo'] = null !== $this->filterVideo ? $this->filterVideo->toArray($noStream) : $this->filterVideo;
        }

        if (null !== $this->stream) {
            if (\is_array($this->stream)) {
                $res['Stream'] = [];
                $n1 = 0;
                foreach ($this->stream as $item1) {
                    $res['Stream'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->transcodeVideo) {
            $res['TranscodeVideo'] = null !== $this->transcodeVideo ? $this->transcodeVideo->toArray($noStream) : $this->transcodeVideo;
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
        if (isset($map['DisableVideo'])) {
            $model->disableVideo = $map['DisableVideo'];
        }

        if (isset($map['FilterVideo'])) {
            $model->filterVideo = filterVideo::fromMap($map['FilterVideo']);
        }

        if (isset($map['Stream'])) {
            if (!empty($map['Stream'])) {
                $model->stream = [];
                $n1 = 0;
                foreach ($map['Stream'] as $item1) {
                    $model->stream[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TranscodeVideo'])) {
            $model->transcodeVideo = transcodeVideo::fromMap($map['TranscodeVideo']);
        }

        return $model;
    }
}
