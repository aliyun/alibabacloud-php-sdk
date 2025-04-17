<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistResponseBody;

use AlibabaCloud\Dara\Model;

class videoPlaylist extends Model
{
    /**
     * @var string
     */
    public $frameRate;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'frameRate' => 'FrameRate',
        'resolution' => 'Resolution',
        'token' => 'Token',
        'URI' => 'URI',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }

        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }

        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
