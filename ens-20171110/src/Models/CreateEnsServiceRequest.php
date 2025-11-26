<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CreateEnsServiceRequest extends Model
{
    /**
     * @var string
     */
    public $ensServiceId;

    /**
     * @var string
     */
    public $orderType;
    protected $_name = [
        'ensServiceId' => 'EnsServiceId',
        'orderType' => 'OrderType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ensServiceId) {
            $res['EnsServiceId'] = $this->ensServiceId;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
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
        if (isset($map['EnsServiceId'])) {
            $model->ensServiceId = $map['EnsServiceId'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
