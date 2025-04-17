<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\sources\subtitles;

class sources extends Model
{
    /**
     * @var string
     */
    public $alignMode;

    /**
     * @var bool
     */
    public $attached;

    /**
     * @var bool
     */
    public $disableAudio;

    /**
     * @var bool
     */
    public $disableVideo;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var float
     */
    public $startTime;

    /**
     * @var subtitles[]
     */
    public $subtitles;

    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'alignMode' => 'AlignMode',
        'attached' => 'Attached',
        'disableAudio' => 'DisableAudio',
        'disableVideo' => 'DisableVideo',
        'duration' => 'Duration',
        'startTime' => 'StartTime',
        'subtitles' => 'Subtitles',
        'URI' => 'URI',
    ];

    public function validate()
    {
        if (\is_array($this->subtitles)) {
            Model::validateArray($this->subtitles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alignMode) {
            $res['AlignMode'] = $this->alignMode;
        }

        if (null !== $this->attached) {
            $res['Attached'] = $this->attached;
        }

        if (null !== $this->disableAudio) {
            $res['DisableAudio'] = $this->disableAudio;
        }

        if (null !== $this->disableVideo) {
            $res['DisableVideo'] = $this->disableVideo;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->subtitles) {
            if (\is_array($this->subtitles)) {
                $res['Subtitles'] = [];
                $n1 = 0;
                foreach ($this->subtitles as $item1) {
                    $res['Subtitles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
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
        if (isset($map['AlignMode'])) {
            $model->alignMode = $map['AlignMode'];
        }

        if (isset($map['Attached'])) {
            $model->attached = $map['Attached'];
        }

        if (isset($map['DisableAudio'])) {
            $model->disableAudio = $map['DisableAudio'];
        }

        if (isset($map['DisableVideo'])) {
            $model->disableVideo = $map['DisableVideo'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Subtitles'])) {
            if (!empty($map['Subtitles'])) {
                $model->subtitles = [];
                $n1 = 0;
                foreach ($map['Subtitles'] as $item1) {
                    $model->subtitles[$n1++] = subtitles::fromMap($item1);
                }
            }
        }

        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
