<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryGenerateDevicesRecordResponseBody\data;

use AlibabaCloud\Tea\Model;

class listData extends Model
{
    /**
     * @example 133
     *
     * @var int
     */
    public $applyDeviceCount;

    /**
     * @example 1508******195
     *
     * @var string
     */
    public $batchId;

    /**
     * @example CREATE
     *
     * @var string
     */
    public $batchStatus;

    /**
     * @example 1690819200000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example WIFI
     *
     * @var string
     */
    public $networkType;

    /**
     * @example 110000000000
     *
     * @var int
     */
    public $operateUid;

    /**
     * @example a3w******
     *
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $productName;

    /**
     * @example Consumer_IPC_512Kbps
     *
     * @var string
     */
    public $specCode;

    /**
     * @example 5
     *
     * @var int
     */
    public $successCount;
    protected $_name = [
        'applyDeviceCount' => 'ApplyDeviceCount',
        'batchId'          => 'BatchId',
        'batchStatus'      => 'BatchStatus',
        'createTime'       => 'CreateTime',
        'networkType'      => 'NetworkType',
        'operateUid'       => 'OperateUid',
        'productKey'       => 'ProductKey',
        'productName'      => 'ProductName',
        'specCode'         => 'SpecCode',
        'successCount'     => 'SuccessCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyDeviceCount) {
            $res['ApplyDeviceCount'] = $this->applyDeviceCount;
        }
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }
        if (null !== $this->batchStatus) {
            $res['BatchStatus'] = $this->batchStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->operateUid) {
            $res['OperateUid'] = $this->operateUid;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->specCode) {
            $res['SpecCode'] = $this->specCode;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyDeviceCount'])) {
            $model->applyDeviceCount = $map['ApplyDeviceCount'];
        }
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }
        if (isset($map['BatchStatus'])) {
            $model->batchStatus = $map['BatchStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OperateUid'])) {
            $model->operateUid = $map['OperateUid'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['SpecCode'])) {
            $model->specCode = $map['SpecCode'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
