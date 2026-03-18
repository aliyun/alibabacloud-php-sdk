<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class QueryRefundPriceRequest extends Model
{
    /**
     * @var string
     */
    public $billingInstanceIds;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'billingInstanceIds' => 'billingInstanceIds',
        'instanceId' => 'instanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingInstanceIds) {
            $res['billingInstanceIds'] = $this->billingInstanceIds;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
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
        if (isset($map['billingInstanceIds'])) {
            $model->billingInstanceIds = $map['billingInstanceIds'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        return $model;
    }
}
