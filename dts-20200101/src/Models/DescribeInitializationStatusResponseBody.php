<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeInitializationStatusResponseBody\dataInitializationDetails;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeInitializationStatusResponseBody\dataSynchronizationDetails;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeInitializationStatusResponseBody\structureInitializationDetails;
use AlibabaCloud\Tea\Model;

class DescribeInitializationStatusResponseBody extends Model
{
    /**
     * @var dataInitializationDetails[]
     */
    public $dataInitializationDetails;

    /**
     * @var dataSynchronizationDetails[]
     */
    public $dataSynchronizationDetails;

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
    public $requestId;

    /**
     * @var structureInitializationDetails[]
     */
    public $structureInitializationDetails;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'dataInitializationDetails'      => 'DataInitializationDetails',
        'dataSynchronizationDetails'     => 'DataSynchronizationDetails',
        'errCode'                        => 'ErrCode',
        'errMessage'                     => 'ErrMessage',
        'requestId'                      => 'RequestId',
        'structureInitializationDetails' => 'StructureInitializationDetails',
        'success'                        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInitializationDetails) {
            $res['DataInitializationDetails'] = [];
            if (null !== $this->dataInitializationDetails && \is_array($this->dataInitializationDetails)) {
                $n = 0;
                foreach ($this->dataInitializationDetails as $item) {
                    $res['DataInitializationDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataSynchronizationDetails) {
            $res['DataSynchronizationDetails'] = [];
            if (null !== $this->dataSynchronizationDetails && \is_array($this->dataSynchronizationDetails)) {
                $n = 0;
                foreach ($this->dataSynchronizationDetails as $item) {
                    $res['DataSynchronizationDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->structureInitializationDetails) {
            $res['StructureInitializationDetails'] = [];
            if (null !== $this->structureInitializationDetails && \is_array($this->structureInitializationDetails)) {
                $n = 0;
                foreach ($this->structureInitializationDetails as $item) {
                    $res['StructureInitializationDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInitializationStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInitializationDetails'])) {
            if (!empty($map['DataInitializationDetails'])) {
                $model->dataInitializationDetails = [];
                $n                                = 0;
                foreach ($map['DataInitializationDetails'] as $item) {
                    $model->dataInitializationDetails[$n++] = null !== $item ? dataInitializationDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DataSynchronizationDetails'])) {
            if (!empty($map['DataSynchronizationDetails'])) {
                $model->dataSynchronizationDetails = [];
                $n                                 = 0;
                foreach ($map['DataSynchronizationDetails'] as $item) {
                    $model->dataSynchronizationDetails[$n++] = null !== $item ? dataSynchronizationDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StructureInitializationDetails'])) {
            if (!empty($map['StructureInitializationDetails'])) {
                $model->structureInitializationDetails = [];
                $n                                     = 0;
                foreach ($map['StructureInitializationDetails'] as $item) {
                    $model->structureInitializationDetails[$n++] = null !== $item ? structureInitializationDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
