<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class MakeCallRequest extends Model
{
    /**
     * @example 130****0000
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @example 0571456****
     *
     * @var string
     */
    public $callingNumber;

    /**
     * @example outBound_Call
     *
     * @var string
     */
    public $commandCode;

    /**
     * @example {"bizId": 23323}
     *
     * @var string
     */
    public $extInfo;

    /**
     * @example 123456
     *
     * @var string
     */
    public $outerAccountId;

    /**
     * @example ALIPAY
     *
     * @var string
     */
    public $outerAccountType;
    protected $_name = [
        'calledNumber'     => 'CalledNumber',
        'callingNumber'    => 'CallingNumber',
        'commandCode'      => 'CommandCode',
        'extInfo'          => 'ExtInfo',
        'outerAccountId'   => 'OuterAccountId',
        'outerAccountType' => 'OuterAccountType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->commandCode) {
            $res['CommandCode'] = $this->commandCode;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->outerAccountId) {
            $res['OuterAccountId'] = $this->outerAccountId;
        }
        if (null !== $this->outerAccountType) {
            $res['OuterAccountType'] = $this->outerAccountType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MakeCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['CommandCode'])) {
            $model->commandCode = $map['CommandCode'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['OuterAccountId'])) {
            $model->outerAccountId = $map['OuterAccountId'];
        }
        if (isset($map['OuterAccountType'])) {
            $model->outerAccountType = $map['OuterAccountType'];
        }

        return $model;
    }
}
