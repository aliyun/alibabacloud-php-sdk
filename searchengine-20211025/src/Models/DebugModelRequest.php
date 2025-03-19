<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class DebugModelRequest extends Model
{
    /**
     * @var string
     */
    public $input;

    /**
     * @example true
     *
     * @var string
     */
    public $isOnline;
    protected $_name = [
        'input' => 'input',
        'isOnline' => 'isOnline',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DebugModelRequest
     */
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
