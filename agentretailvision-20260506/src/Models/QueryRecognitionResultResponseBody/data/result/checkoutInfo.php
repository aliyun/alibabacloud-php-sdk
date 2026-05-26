<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\QueryRecognitionResultResponseBody\data\result;

use AlibabaCloud\Dara\Model;

class checkoutInfo extends Model
{
    /**
     * @var string
     */
    public $checkoutStatus;
    protected $_name = [
        'checkoutStatus' => 'CheckoutStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkoutStatus) {
            $res['CheckoutStatus'] = $this->checkoutStatus;
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
        if (isset($map['CheckoutStatus'])) {
            $model->checkoutStatus = $map['CheckoutStatus'];
        }

        return $model;
    }
}
