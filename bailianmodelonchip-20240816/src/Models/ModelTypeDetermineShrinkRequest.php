<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models;

use AlibabaCloud\Dara\Model;

class ModelTypeDetermineShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $historyShrink;

    /**
     * @var string
     */
    public $inputText;
    protected $_name = [
        'historyShrink' => 'history',
        'inputText' => 'inputText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->historyShrink) {
            $res['history'] = $this->historyShrink;
        }

        if (null !== $this->inputText) {
            $res['inputText'] = $this->inputText;
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
        if (isset($map['history'])) {
            $model->historyShrink = $map['history'];
        }

        if (isset($map['inputText'])) {
            $model->inputText = $map['inputText'];
        }

        return $model;
    }
}
