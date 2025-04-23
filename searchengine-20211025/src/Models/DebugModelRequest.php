<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class DebugModelRequest extends Model
{
    /**
     * @var string
     */
    public $input;

    /**
     * @var string
     */
    public $isOnline;
    protected $_name = [
        'input' => 'input',
        'isOnline' => 'isOnline',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->input) {
            $res['input'] = $this->input;
        }

        if (null !== $this->isOnline) {
            $res['isOnline'] = $this->isOnline;
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
        if (isset($map['input'])) {
            $model->input = $map['input'];
        }

        if (isset($map['isOnline'])) {
            $model->isOnline = $map['isOnline'];
        }

        return $model;
    }
}
