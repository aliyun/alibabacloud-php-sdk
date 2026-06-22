<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SMQProxy\V20260409\Models;

use AlibabaCloud\Dara\Model;

class BatchPeekMessageRequest extends Model
{
    /**
     * @var int
     */
    public $numOfMessages;

    /**
     * @var bool
     */
    public $peekonly;
    protected $_name = [
        'numOfMessages' => 'numOfMessages',
        'peekonly' => 'peekonly',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->numOfMessages) {
            $res['numOfMessages'] = $this->numOfMessages;
        }

        if (null !== $this->peekonly) {
            $res['peekonly'] = $this->peekonly;
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
        if (isset($map['numOfMessages'])) {
            $model->numOfMessages = $map['numOfMessages'];
        }

        if (isset($map['peekonly'])) {
            $model->peekonly = $map['peekonly'];
        }

        return $model;
    }
}
