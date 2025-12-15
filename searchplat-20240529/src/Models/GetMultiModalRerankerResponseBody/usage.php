<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMultiModalRerankerResponseBody;

use AlibabaCloud\Dara\Model;

class usage extends Model
{
    /**
     * @var int
     */
    public $imageToken;

    /**
     * @var int
     */
    public $textToken;
    protected $_name = [
        'imageToken' => 'image_token',
        'textToken' => 'text_token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageToken) {
            $res['image_token'] = $this->imageToken;
        }

        if (null !== $this->textToken) {
            $res['text_token'] = $this->textToken;
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
        if (isset($map['image_token'])) {
            $model->imageToken = $map['image_token'];
        }

        if (isset($map['text_token'])) {
            $model->textToken = $map['text_token'];
        }

        return $model;
    }
}
