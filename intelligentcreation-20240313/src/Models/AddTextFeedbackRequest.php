<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class AddTextFeedbackRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 1
     *
     * @var int
     */
    public $quality;

    /**
     * @example 8478
     *
     * @var int
     */
    public $textId;
    protected $_name = [
        'content' => 'content',
        'quality' => 'quality',
        'textId'  => 'textId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return AddTextFeedbackRequest
     */
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
