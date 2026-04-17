<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class CostModelDetailRowDTO extends Model
{
    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $values;
    protected $_name = [
        'timestamp' => 'timestamp',
        'values' => 'values',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->values) {
            $res['values'] = $this->values;
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
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['values'])) {
            $model->values = $map['values'];
        }

        return $model;
    }
}
