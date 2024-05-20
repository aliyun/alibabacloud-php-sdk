<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class TextResult extends Model
{
    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;

    /**
     * @description This parameter is required.
     *
     * @var Text
     */
    public $text;
    protected $_name = [
        'requestId' => 'requestId',
        'text'      => 'text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->text) {
            $res['text'] = null !== $this->text ? $this->text->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TextResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['text'])) {
            $model->text = Text::fromMap($map['text']);
        }

        return $model;
    }
}
