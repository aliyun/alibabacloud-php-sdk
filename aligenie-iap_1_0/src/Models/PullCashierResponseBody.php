<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\Tea\Model;

class PullCashierResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $retCode;

    /**
     * @var string
     */
    public $retMsg;

    /**
     * @example true
     *
     * @var bool
     */
    public $retValue;
    protected $_name = [
        'retCode'  => 'RetCode',
        'retMsg'   => 'RetMsg',
        'retValue' => 'RetValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->retCode) {
            $res['RetCode'] = $this->retCode;
        }
        if (null !== $this->retMsg) {
            $res['RetMsg'] = $this->retMsg;
        }
        if (null !== $this->retValue) {
            $res['RetValue'] = $this->retValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PullCashierResponseBody
     */
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
            $model->retValue = $map['RetValue'];
        }

        return $model;
    }
}
