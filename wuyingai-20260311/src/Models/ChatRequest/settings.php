<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WuyingAI\V20260311\Models\ChatRequest;

use AlibabaCloud\Dara\Model;

class settings extends Model
{
    /**
     * @var string
     */
    public $outputFileMode;
    protected $_name = [
        'outputFileMode' => 'OutputFileMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outputFileMode) {
            $res['OutputFileMode'] = $this->outputFileMode;
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
        if (isset($map['OutputFileMode'])) {
            $model->outputFileMode = $map['OutputFileMode'];
        }

        return $model;
    }
}
