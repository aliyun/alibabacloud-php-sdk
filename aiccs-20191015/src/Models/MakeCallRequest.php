<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class MakeCallRequest extends Model
{
    /**
     * @var string
     */
    public $outerAccountId;

    /**
     * @var string
     */
    public $outerAccountType;

    /**
     * @var string
     */
    public $commandCode;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $extInfo;
    protected $_name = [
        'outerAccountId'   => 'OuterAccountId',
        'outerAccountType' => 'OuterAccountType',
        'commandCode'      => 'CommandCode',
        'callingNumber'    => 'CallingNumber',
        'calledNumber'     => 'CalledNumber',
        'extInfo'          => 'ExtInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outerAccountId) {
            $res['OuterAccountId'] = $this->outerAccountId;
        }
        if (null !== $this->outerAccountType) {
            $res['OuterAccountType'] = $this->outerAccountType;
        }
        if (null !== $this->commandCode) {
            $res['CommandCode'] = $this->commandCode;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
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
        if (isset($map['OuterAccountId'])) {
            $model->outerAccountId = $map['OuterAccountId'];
        }
        if (isset($map['OuterAccountType'])) {
            $model->outerAccountType = $map['OuterAccountType'];
        }
        if (isset($map['CommandCode'])) {
            $model->commandCode = $map['CommandCode'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }

        return $model;
    }
}
