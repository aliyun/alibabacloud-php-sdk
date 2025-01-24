<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\RenewDesktopOversoldGroupResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $orderId;
    /**
     * @var string
     */
    public $oversoldGroupId;
    protected $_name = [
        'orderId'         => 'OrderId',
        'oversoldGroupId' => 'OversoldGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->oversoldGroupId) {
            $res['OversoldGroupId'] = $this->oversoldGroupId;
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
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OversoldGroupId'])) {
            $model->oversoldGroupId = $map['OversoldGroupId'];
        }

        return $model;
    }
}
