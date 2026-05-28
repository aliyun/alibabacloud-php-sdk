<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class GetAsyncSqlRequest extends Model
{
    /**
     * @var int
     */
    public $line;

    /**
     * @var int
     */
    public $offset;
    protected $_name = [
        'line' => 'line',
        'offset' => 'offset',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->line) {
            $res['line'] = $this->line;
        }

        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
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
        if (isset($map['line'])) {
            $model->line = $map['line'];
        }

        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }

        return $model;
    }
}
