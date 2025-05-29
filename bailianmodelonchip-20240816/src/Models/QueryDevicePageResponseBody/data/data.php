<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\QueryDevicePageResponseBody\data;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $activeTime;

    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $batchNo;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var int
     */
    public $disableStatus;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'activeTime' => 'activeTime',
        'aliyunUid' => 'aliyunUid',
        'batchNo' => 'batchNo',
        'deviceName' => 'deviceName',
        'disableStatus' => 'disableStatus',
        'gmtCreate' => 'gmtCreate',
        'gmtModify' => 'gmtModify',
        'id' => 'id',
        'productKey' => 'productKey',
        'productName' => 'productName',
        'remark' => 'remark',
        'status' => 'status',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeTime) {
            $res['activeTime'] = $this->activeTime;
        }

        if (null !== $this->aliyunUid) {
            $res['aliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->batchNo) {
            $res['batchNo'] = $this->batchNo;
        }

        if (null !== $this->deviceName) {
            $res['deviceName'] = $this->deviceName;
        }

        if (null !== $this->disableStatus) {
            $res['disableStatus'] = $this->disableStatus;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModify) {
            $res['gmtModify'] = $this->gmtModify;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->productKey) {
            $res['productKey'] = $this->productKey;
        }

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['activeTime'])) {
            $model->activeTime = $map['activeTime'];
        }

        if (isset($map['aliyunUid'])) {
            $model->aliyunUid = $map['aliyunUid'];
        }

        if (isset($map['batchNo'])) {
            $model->batchNo = $map['batchNo'];
        }

        if (isset($map['deviceName'])) {
            $model->deviceName = $map['deviceName'];
        }

        if (isset($map['disableStatus'])) {
            $model->disableStatus = $map['disableStatus'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModify'])) {
            $model->gmtModify = $map['gmtModify'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['productKey'])) {
            $model->productKey = $map['productKey'];
        }

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
