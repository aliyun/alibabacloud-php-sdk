<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetBusAppConfigResponseBody\retValue;

class GetBusAppConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $retCode;

    /**
     * @var string
     */
    public $retMsg;

    /**
     * @var retValue
     */
    public $retValue;
    protected $_name = [
        'retCode' => 'RetCode',
        'retMsg' => 'RetMsg',
        'retValue' => 'RetValue',
    ];

    public function validate()
    {
        if (null !== $this->retValue) {
            $this->retValue->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->retCode) {
            $res['RetCode'] = $this->retCode;
        }

        if (null !== $this->retMsg) {
            $res['RetMsg'] = $this->retMsg;
        }

        if (null !== $this->retValue) {
            $res['RetValue'] = null !== $this->retValue ? $this->retValue->toArray($noStream) : $this->retValue;
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
        if (isset($map['RetCode'])) {
            $model->retCode = $map['RetCode'];
        }

        if (isset($map['RetMsg'])) {
            $model->retMsg = $map['RetMsg'];
        }

        if (isset($map['RetValue'])) {
            $model->retValue = retValue::fromMap($map['RetValue']);
        }

        return $model;
    }
}
