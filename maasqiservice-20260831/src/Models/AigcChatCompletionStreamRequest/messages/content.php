<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models\AigcChatCompletionStreamRequest\messages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\AigcChatCompletionStreamRequest\messages\content\imageUrl;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\AigcChatCompletionStreamRequest\messages\content\videoUrl;

class content extends Model
{
    /**
     * @var imageUrl
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $type;

    /**
     * @var videoUrl
     */
    public $videoUrl;
    protected $_name = [
        'imageUrl' => 'imageUrl',
        'text' => 'text',
        'type' => 'type',
        'videoUrl' => 'videoUrl',
    ];

    public function validate()
    {
        if (null !== $this->imageUrl) {
            $this->imageUrl->validate();
        }
        if (null !== $this->videoUrl) {
            $this->videoUrl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['imageUrl'] = null !== $this->imageUrl ? $this->imageUrl->toArray($noStream) : $this->imageUrl;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->videoUrl) {
            $res['videoUrl'] = null !== $this->videoUrl ? $this->videoUrl->toArray($noStream) : $this->videoUrl;
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
        if (isset($map['imageUrl'])) {
            $model->imageUrl = imageUrl::fromMap($map['imageUrl']);
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['videoUrl'])) {
            $model->videoUrl = videoUrl::fromMap($map['videoUrl']);
        }

        return $model;
    }
}
