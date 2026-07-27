<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ConfirmReceiptCmd extends Model
{
    /**
     * @var string
     */
    public $disputeId;
    protected $_name = [
        'disputeId' => 'disputeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disputeId) {
            $res['disputeId'] = $this->disputeId;
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
        if (isset($map['disputeId'])) {
            $model->disputeId = $map['disputeId'];
        }

        return $model;
    }
}
