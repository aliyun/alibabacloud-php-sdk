<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DeleteSlotResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $slotName;
    protected $_name = [
        'requestId' => 'RequestId',
        'slotName'  => 'SlotName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slotName) {
            $res['SlotName'] = $this->slotName;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SlotName'])) {
            $model->slotName = $map['SlotName'];
        }

        return $model;
    }
}
