<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetAudio\filterAudio;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetAudio\transcodeAudio;

class TargetAudio extends Model
{
    /**
     * @var bool
     */
    public $disableAudio;

    /**
     * @var filterAudio
     */
    public $filterAudio;

    /**
     * @var int[]
     */
    public $stream;

    /**
     * @var transcodeAudio
     */
    public $transcodeAudio;
    protected $_name = [
        'disableAudio' => 'DisableAudio',
        'filterAudio' => 'FilterAudio',
        'stream' => 'Stream',
        'transcodeAudio' => 'TranscodeAudio',
    ];

    public function validate()
    {
        if (null !== $this->filterAudio) {
            $this->filterAudio->validate();
        }
        if (\is_array($this->stream)) {
            Model::validateArray($this->stream);
        }
        if (null !== $this->transcodeAudio) {
            $this->transcodeAudio->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disableAudio) {
            $res['DisableAudio'] = $this->disableAudio;
        }

        if (null !== $this->filterAudio) {
            $res['FilterAudio'] = null !== $this->filterAudio ? $this->filterAudio->toArray($noStream) : $this->filterAudio;
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

        if (null !== $this->transcodeAudio) {
            $res['TranscodeAudio'] = null !== $this->transcodeAudio ? $this->transcodeAudio->toArray($noStream) : $this->transcodeAudio;
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
        if (isset($map['DisableAudio'])) {
            $model->disableAudio = $map['DisableAudio'];
        }

        if (isset($map['FilterAudio'])) {
            $model->filterAudio = filterAudio::fromMap($map['FilterAudio']);
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

        if (isset($map['TranscodeAudio'])) {
            $model->transcodeAudio = transcodeAudio::fromMap($map['TranscodeAudio']);
        }

        return $model;
    }
}
