<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class TextCorrectRequest extends Model
{
    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var string
     */
    public $sourceText;
    protected $_name = [
        'sourceLanguage' => 'SourceLanguage',
        'sourceText' => 'SourceText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }

        if (null !== $this->sourceText) {
            $res['SourceText'] = $this->sourceText;
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
        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }

        if (isset($map['SourceText'])) {
            $model->sourceText = $map['SourceText'];
        }

        return $model;
    }
}
