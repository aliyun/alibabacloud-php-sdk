<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class GetUsageRequest extends Model
{
    /**
     * @var string
     */
    public $externalUserId;

    /**
     * @var string
     */
    public $redemptionOrderNo;
    protected $_name = [
        'externalUserId' => 'externalUserId',
        'redemptionOrderNo' => 'redemptionOrderNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalUserId) {
            $res['externalUserId'] = $this->externalUserId;
        }

        if (null !== $this->redemptionOrderNo) {
            $res['redemptionOrderNo'] = $this->redemptionOrderNo;
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
        if (isset($map['externalUserId'])) {
            $model->externalUserId = $map['externalUserId'];
        }

        if (isset($map['redemptionOrderNo'])) {
            $model->redemptionOrderNo = $map['redemptionOrderNo'];
        }

        return $model;
    }
}
