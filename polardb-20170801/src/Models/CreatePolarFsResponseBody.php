<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreatePolarFsResponseBody extends Model
{
    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $polarFsInstanceId;

    /**
     * @var string
     */
    public $polarFsPath;

    /**
     * @var string
     */
    public $polarFsStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orderId' => 'OrderId',
        'polarFsInstanceId' => 'PolarFsInstanceId',
        'polarFsPath' => 'PolarFsPath',
        'polarFsStatus' => 'PolarFsStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->polarFsInstanceId) {
            $res['PolarFsInstanceId'] = $this->polarFsInstanceId;
        }

        if (null !== $this->polarFsPath) {
            $res['PolarFsPath'] = $this->polarFsPath;
        }

        if (null !== $this->polarFsStatus) {
            $res['PolarFsStatus'] = $this->polarFsStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['PolarFsInstanceId'])) {
            $model->polarFsInstanceId = $map['PolarFsInstanceId'];
        }

        if (isset($map['PolarFsPath'])) {
            $model->polarFsPath = $map['PolarFsPath'];
        }

        if (isset($map['PolarFsStatus'])) {
            $model->polarFsStatus = $map['PolarFsStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
