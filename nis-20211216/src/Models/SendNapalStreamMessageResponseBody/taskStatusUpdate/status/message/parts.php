<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\taskStatusUpdate\status\message;

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
    public $filename;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var string
     */
    public $raw;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'data' => 'Data',
        'filename' => 'Filename',
        'mediaType' => 'MediaType',
        'raw' => 'Raw',
        'text' => 'Text',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        if (null !== $this->raw) {
            $res['Raw'] = $this->raw;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        if (isset($map['Raw'])) {
            $model->raw = $map['Raw'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
