<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\QaChatRequest\message;

use AlibabaCloud\Dara\Model;

class parts extends Model
{
    /**
     * @var mixed
     */
    public $data;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'data' => 'data',
        'mediaType' => 'mediaType',
        'text' => 'text',
        'type' => 'type',
        'url' => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        if (null !== $this->mediaType) {
            $res['mediaType'] = $this->mediaType;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        if (isset($map['mediaType'])) {
            $model->mediaType = $map['mediaType'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
