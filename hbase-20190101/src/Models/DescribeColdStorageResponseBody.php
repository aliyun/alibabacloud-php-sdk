<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeColdStorageResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $coldStorageSize;

    /**
     * @var string
     */
    public $coldStorageType;

    /**
     * @var string
     */
    public $coldStorageUseAmount;

    /**
     * @var string
     */
    public $coldStorageUsePercent;

    /**
     * @var string
     */
    public $openStatus;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterId'             => 'ClusterId',
        'coldStorageSize'       => 'ColdStorageSize',
        'coldStorageType'       => 'ColdStorageType',
        'coldStorageUseAmount'  => 'ColdStorageUseAmount',
        'coldStorageUsePercent' => 'ColdStorageUsePercent',
        'openStatus'            => 'OpenStatus',
        'payType'               => 'PayType',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->coldStorageSize) {
            $res['ColdStorageSize'] = $this->coldStorageSize;
        }
        if (null !== $this->coldStorageType) {
            $res['ColdStorageType'] = $this->coldStorageType;
        }
        if (null !== $this->coldStorageUseAmount) {
            $res['ColdStorageUseAmount'] = $this->coldStorageUseAmount;
        }
        if (null !== $this->coldStorageUsePercent) {
            $res['ColdStorageUsePercent'] = $this->coldStorageUsePercent;
        }
        if (null !== $this->openStatus) {
            $res['OpenStatus'] = $this->openStatus;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeColdStorageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ColdStorageSize'])) {
            $model->coldStorageSize = $map['ColdStorageSize'];
        }
        if (isset($map['ColdStorageType'])) {
            $model->coldStorageType = $map['ColdStorageType'];
        }
        if (isset($map['ColdStorageUseAmount'])) {
            $model->coldStorageUseAmount = $map['ColdStorageUseAmount'];
        }
        if (isset($map['ColdStorageUsePercent'])) {
            $model->coldStorageUsePercent = $map['ColdStorageUsePercent'];
        }
        if (isset($map['OpenStatus'])) {
            $model->openStatus = $map['OpenStatus'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
