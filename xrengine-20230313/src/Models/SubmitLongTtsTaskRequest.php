<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models;

use AlibabaCloud\Tea\Model;

class SubmitLongTtsTaskRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var string
     */
    public $ttsVoiceId;
    protected $_name = [
        'content'    => 'Content',
        'jwtToken'   => 'JwtToken',
        'ttsVoiceId' => 'TtsVoiceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }
        if (null !== $this->ttsVoiceId) {
            $res['TtsVoiceId'] = $this->ttsVoiceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitLongTtsTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }
        if (isset($map['TtsVoiceId'])) {
            $model->ttsVoiceId = $map['TtsVoiceId'];
        }

        return $model;
    }
}
