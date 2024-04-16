<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\Tea\Model;

class CallBackThirdRightSendPlanResponseBody extends Model
{
    /**
     * @example 400
     *
     * @var string
     */
    public $retCode;

    /**
     * @example 系统异常
     *
     * @var string
     */
    public $retMsg;

    /**
     * @var bool
     */
    public $retValue;

    /**
     * @example 908FA068-529C-0C20-8DB5-63B0EF7CFF1F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'retCode'   => 'RetCode',
        'retMsg'    => 'RetMsg',
        'retValue'  => 'RetValue',
        'requestId' => 'requestId',
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
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CallBackThirdRightSendPlanResponseBody
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
