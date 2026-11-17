<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraChatCompletionStreamRequest\messages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraChatCompletionStreamRequest\messages\content\imageUrl;

class content extends Model
{
    /**
     * @var imageUrl
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'imageUrl' => 'imageUrl',
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
        if (null !== $this->imageUrl) {
            $res['imageUrl'] = null !== $this->imageUrl ? $this->imageUrl->toArray($noStream) : $this->imageUrl;
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
        if (isset($map['imageUrl'])) {
            $model->imageUrl = imageUrl::fromMap($map['imageUrl']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
