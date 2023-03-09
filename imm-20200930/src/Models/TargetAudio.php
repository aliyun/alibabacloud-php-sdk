<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\TargetAudio\filterAudio;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetAudio\transcodeAudio;
use AlibabaCloud\Tea\Model;

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
        'disableAudio'   => 'DisableAudio',
        'filterAudio'    => 'FilterAudio',
        'stream'         => 'Stream',
        'transcodeAudio' => 'TranscodeAudio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableAudio) {
            $res['DisableAudio'] = $this->disableAudio;
        }
        if (null !== $this->filterAudio) {
            $res['FilterAudio'] = null !== $this->filterAudio ? $this->filterAudio->toMap() : null;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }
        if (null !== $this->transcodeAudio) {
            $res['TranscodeAudio'] = null !== $this->transcodeAudio ? $this->transcodeAudio->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TargetAudio
     */
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
                $model->stream = $map['Stream'];
            }
        }
        if (isset($map['TranscodeAudio'])) {
            $model->transcodeAudio = transcodeAudio::fromMap($map['TranscodeAudio']);
        }

        return $model;
    }
}
