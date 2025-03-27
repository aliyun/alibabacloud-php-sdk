<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class AddTextFeedbackRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $quality;

    /**
     * @var int
     */
    public $textId;
    protected $_name = [
        'content' => 'content',
        'quality' => 'quality',
        'textId' => 'textId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->quality) {
            $res['quality'] = $this->quality;
        }

        if (null !== $this->textId) {
            $res['textId'] = $this->textId;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['quality'])) {
            $model->quality = $map['quality'];
        }

        if (isset($map['textId'])) {
            $model->textId = $map['textId'];
        }

        return $model;
    }
}
