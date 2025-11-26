<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSDGResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSDGResponseBody\data\result;

class data extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var result
     */
    public $result;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'message' => 'Message',
        'result' => 'Result',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->result) {
            $this->result->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toArray($noStream) : $this->result;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
