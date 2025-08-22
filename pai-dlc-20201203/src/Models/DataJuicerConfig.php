<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class DataJuicerConfig extends Model
{
    /**
     * @var string
     */
    public $commandType;

    /**
     * @var string
     */
    public $executionMode;
    protected $_name = [
        'commandType' => 'CommandType',
        'executionMode' => 'ExecutionMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commandType) {
            $res['CommandType'] = $this->commandType;
        }

        if (null !== $this->executionMode) {
            $res['ExecutionMode'] = $this->executionMode;
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
        if (isset($map['CommandType'])) {
            $model->commandType = $map['CommandType'];
        }

        if (isset($map['ExecutionMode'])) {
            $model->executionMode = $map['ExecutionMode'];
        }

        return $model;
    }
}
