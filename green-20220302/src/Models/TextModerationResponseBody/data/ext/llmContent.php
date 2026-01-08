<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationResponseBody\data\ext;

use AlibabaCloud\Dara\Model;

class llmContent extends Model
{
    /**
     * @var string
     */
    public $outputText;
    protected $_name = [
        'outputText' => 'outputText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outputText) {
            $res['outputText'] = $this->outputText;
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
        if (isset($map['outputText'])) {
            $model->outputText = $map['outputText'];
        }

        return $model;
    }
}
