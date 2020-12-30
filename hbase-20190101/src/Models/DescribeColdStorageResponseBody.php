<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeColdStorageResponseBody extends Model
{
    /**
     * @var string
     */
    public $coldStorageUsePercent;

    /**
     * @var string
     */
    public $coldStorageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $openStatus;
    protected $_name = [
        'coldStorageUsePercent' => 'ColdStorageUsePercent',
        'coldStorageSize'       => 'ColdStorageSize',
        'requestId'             => 'RequestId',
        'clusterId'             => 'ClusterId',
        'payType'               => 'PayType',
        'openStatus'            => 'OpenStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coldStorageUsePercent) {
            $res['ColdStorageUsePercent'] = $this->coldStorageUsePercent;
        }
        if (null !== $this->coldStorageSize) {
            $res['ColdStorageSize'] = $this->coldStorageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->openStatus) {
            $res['OpenStatus'] = $this->openStatus;
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
        if (isset($map['ColdStorageUsePercent'])) {
            $model->coldStorageUsePercent = $map['ColdStorageUsePercent'];
        }
        if (isset($map['ColdStorageSize'])) {
            $model->coldStorageSize = $map['ColdStorageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['OpenStatus'])) {
            $model->openStatus = $map['OpenStatus'];
        }

        return $model;
    }
}
