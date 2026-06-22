<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SMQProxy\V20260409\Models;

use AlibabaCloud\Dara\Model;

class ChangeMessageVisibilityResponseBody extends Model
{
    /**
     * @var int
     */
    public $nextVisibleTime;

    /**
     * @var string
     */
    public $receiptHandle;
    protected $_name = [
        'nextVisibleTime' => 'NextVisibleTime',
        'receiptHandle' => 'ReceiptHandle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextVisibleTime) {
            $res['NextVisibleTime'] = $this->nextVisibleTime;
        }

        if (null !== $this->receiptHandle) {
            $res['ReceiptHandle'] = $this->receiptHandle;
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
        if (isset($map['NextVisibleTime'])) {
            $model->nextVisibleTime = $map['NextVisibleTime'];
        }

        if (isset($map['ReceiptHandle'])) {
            $model->receiptHandle = $map['ReceiptHandle'];
        }

        return $model;
    }
}
