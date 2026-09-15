<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models\GuiChatCompletionStreamRequest\messages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\GuiChatCompletionStreamRequest\messages\content\imageUrl;

class content extends Model
{
    /**
     * @var string
     */
    public $imageData;

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
    protected $_name = [
        'imageData' => 'imageData',
        'imageUrl' => 'imageUrl',
        'text' => 'text',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->imageUrl) {
            $this->imageUrl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageData) {
            $res['imageData'] = $this->imageData;
        }

        if (null !== $this->imageUrl) {
            $res['imageUrl'] = null !== $this->imageUrl ? $this->imageUrl->toArray($noStream) : $this->imageUrl;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['imageData'])) {
            $model->imageData = $map['imageData'];
        }

        if (isset($map['imageUrl'])) {
            $model->imageUrl = imageUrl::fromMap($map['imageUrl']);
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
