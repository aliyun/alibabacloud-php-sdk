<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\ResponseDone\response\usage;

use AlibabaCloud\Dara\Model;

class inputTokensDetails extends Model
{
    /**
     * @var int
     */
    public $textTokens;

    /**
     * @var int
     */
    public $audioTokens;
    protected $_name = [
        'textTokens' => 'text_tokens',
        'audioTokens' => 'audio_tokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->textTokens) {
            $res['text_tokens'] = $this->textTokens;
        }

        if (null !== $this->audioTokens) {
            $res['audio_tokens'] = $this->audioTokens;
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
        if (isset($map['text_tokens'])) {
            $model->textTokens = $map['text_tokens'];
        }

        if (isset($map['audio_tokens'])) {
            $model->audioTokens = $map['audio_tokens'];
        }

        return $model;
    }
}
