<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20180713\Models;

use AlibabaCloud\Tea\Model;

class DescribeDVOrderResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $checkName;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $checkType;

    /**
     * @var string
     */
    public $checkValue;

    /**
     * @var string
     */
    public $certificate;
    protected $_name = [
        'orderStatus' => 'OrderStatus',
        'checkName'   => 'CheckName',
        'privateKey'  => 'PrivateKey',
        'requestId'   => 'RequestId',
        'checkType'   => 'CheckType',
        'checkValue'  => 'CheckValue',
        'certificate' => 'Certificate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->checkValue) {
            $res['CheckValue'] = $this->checkValue;
        }
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDVOrderResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['CheckValue'])) {
            $model->checkValue = $map['CheckValue'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }

        return $model;
    }
}
