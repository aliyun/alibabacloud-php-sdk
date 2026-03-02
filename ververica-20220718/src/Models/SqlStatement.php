<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class SqlStatement extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $sqlScript;

    /**
     * @var string
     */
    public $statusState;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'index' => 'index',
        'message' => 'message',
        'sqlScript' => 'sqlScript',
        'statusState' => 'statusState',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->sqlScript) {
            $res['sqlScript'] = $this->sqlScript;
        }

        if (null !== $this->statusState) {
            $res['statusState'] = $this->statusState;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['sqlScript'])) {
            $model->sqlScript = $map['sqlScript'];
        }

        if (isset($map['statusState'])) {
            $model->statusState = $map['statusState'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
