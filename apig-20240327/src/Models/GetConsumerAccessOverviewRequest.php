<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class GetConsumerAccessOverviewRequest extends Model
{
    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var bool
     */
    public $includeModelTpm;
    protected $_name = [
        'gatewayId' => 'gatewayId',
        'includeModelTpm' => 'includeModelTpm',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->includeModelTpm) {
            $res['includeModelTpm'] = $this->includeModelTpm;
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
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['includeModelTpm'])) {
            $model->includeModelTpm = $map['includeModelTpm'];
        }

        return $model;
    }
}
