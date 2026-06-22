<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SMQProxy\V20260409\Models;

use AlibabaCloud\Dara\Model;

class ChangeMessageVisibilityRequest extends Model
{
    /**
     * @var string
     */
    public $receiptHandle;

    /**
     * @var int
     */
    public $visibilityTimeout;
    protected $_name = [
        'receiptHandle' => 'receiptHandle',
        'visibilityTimeout' => 'visibilityTimeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->receiptHandle) {
            $res['receiptHandle'] = $this->receiptHandle;
        }

        if (null !== $this->visibilityTimeout) {
            $res['visibilityTimeout'] = $this->visibilityTimeout;
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
        if (isset($map['receiptHandle'])) {
            $model->receiptHandle = $map['receiptHandle'];
        }

        if (isset($map['visibilityTimeout'])) {
            $model->visibilityTimeout = $map['visibilityTimeout'];
        }

        return $model;
    }
}
