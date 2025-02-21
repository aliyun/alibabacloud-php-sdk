<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationObjectModifyStatusResponseBody\dataInitializationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationObjectModifyStatusResponseBody\dataSynchronizationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationObjectModifyStatusResponseBody\precheckStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationObjectModifyStatusResponseBody\structureInitializationStatus;

class DescribeSynchronizationObjectModifyStatusResponseBody extends Model
{
    /**
     * @var dataInitializationStatus
     */
    public $dataInitializationStatus;
    /**
     * @var dataSynchronizationStatus
     */
    public $dataSynchronizationStatus;
    /**
     * @var string
     */
    public $errCode;
    /**
     * @var string
     */
    public $errMessage;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var precheckStatus
     */
    public $precheckStatus;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var structureInitializationStatus
     */
    public $structureInitializationStatus;
    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'dataInitializationStatus'      => 'DataInitializationStatus',
        'dataSynchronizationStatus'     => 'DataSynchronizationStatus',
        'errCode'                       => 'ErrCode',
        'errMessage'                    => 'ErrMessage',
        'errorMessage'                  => 'ErrorMessage',
        'precheckStatus'                => 'PrecheckStatus',
        'requestId'                     => 'RequestId',
        'status'                        => 'Status',
        'structureInitializationStatus' => 'StructureInitializationStatus',
        'success'                       => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->dataInitializationStatus) {
            $this->dataInitializationStatus->validate();
        }
        if (null !== $this->dataSynchronizationStatus) {
            $this->dataSynchronizationStatus->validate();
        }
        if (null !== $this->precheckStatus) {
            $this->precheckStatus->validate();
        }
        if (null !== $this->structureInitializationStatus) {
            $this->structureInitializationStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataInitializationStatus) {
            $res['DataInitializationStatus'] = null !== $this->dataInitializationStatus ? $this->dataInitializationStatus->toArray($noStream) : $this->dataInitializationStatus;
        }

        if (null !== $this->dataSynchronizationStatus) {
            $res['DataSynchronizationStatus'] = null !== $this->dataSynchronizationStatus ? $this->dataSynchronizationStatus->toArray($noStream) : $this->dataSynchronizationStatus;
        }

        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }

        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->precheckStatus) {
            $res['PrecheckStatus'] = null !== $this->precheckStatus ? $this->precheckStatus->toArray($noStream) : $this->precheckStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->structureInitializationStatus) {
            $res['StructureInitializationStatus'] = null !== $this->structureInitializationStatus ? $this->structureInitializationStatus->toArray($noStream) : $this->structureInitializationStatus;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['DataInitializationStatus'])) {
            $model->dataInitializationStatus = dataInitializationStatus::fromMap($map['DataInitializationStatus']);
        }

        if (isset($map['DataSynchronizationStatus'])) {
            $model->dataSynchronizationStatus = dataSynchronizationStatus::fromMap($map['DataSynchronizationStatus']);
        }

        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }

        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['PrecheckStatus'])) {
            $model->precheckStatus = precheckStatus::fromMap($map['PrecheckStatus']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StructureInitializationStatus'])) {
            $model->structureInitializationStatus = structureInitializationStatus::fromMap($map['StructureInitializationStatus']);
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
