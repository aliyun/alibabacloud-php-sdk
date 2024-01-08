<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitAudioTo3DAvatarVideoTaskRequest;

use AlibabaCloud\Tea\Model;

class audioInfo extends Model
{
    /**
     * @var int
     */
    public $sampleRate;
    protected $_name = [
        'sampleRate' => 'SampleRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }

        return $model;
    }
}
