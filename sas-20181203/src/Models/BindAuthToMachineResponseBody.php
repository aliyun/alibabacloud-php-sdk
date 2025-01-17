<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class BindAuthToMachineResponseBody extends Model
{
    /**
     * @var int
     */
    public $bindCount;
    /**
     * @var int
     */
    public $insufficientCoreCount;
    /**
     * @var int
     */
    public $insufficientEcsCount;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $resultCode;
    /**
     * @var int
     */
    public $unBindCount;
    protected $_name = [
        'bindCount'             => 'BindCount',
        'insufficientCoreCount' => 'InsufficientCoreCount',
        'insufficientEcsCount'  => 'InsufficientEcsCount',
        'requestId'             => 'RequestId',
        'resultCode'            => 'ResultCode',
        'unBindCount'           => 'UnBindCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindCount) {
            $res['BindCount'] = $this->bindCount;
        }

        if (null !== $this->insufficientCoreCount) {
            $res['InsufficientCoreCount'] = $this->insufficientCoreCount;
        }

        if (null !== $this->insufficientEcsCount) {
            $res['InsufficientEcsCount'] = $this->insufficientEcsCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }

        if (null !== $this->unBindCount) {
            $res['UnBindCount'] = $this->unBindCount;
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
        if (isset($map['BindCount'])) {
            $model->bindCount = $map['BindCount'];
        }

        if (isset($map['InsufficientCoreCount'])) {
            $model->insufficientCoreCount = $map['InsufficientCoreCount'];
        }

        if (isset($map['InsufficientEcsCount'])) {
            $model->insufficientEcsCount = $map['InsufficientEcsCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }

        if (isset($map['UnBindCount'])) {
            $model->unBindCount = $map['UnBindCount'];
        }

        return $model;
    }
}
