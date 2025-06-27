<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeInitializationStatusResponseBody\dataInitializationDetails;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeInitializationStatusResponseBody\dataSynchronizationDetails;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeInitializationStatusResponseBody\structureInitializationDetails;

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
        'dataInitializationDetails' => 'DataInitializationDetails',
        'dataSynchronizationDetails' => 'DataSynchronizationDetails',
        'errCode' => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'requestId' => 'RequestId',
        'structureInitializationDetails' => 'StructureInitializationDetails',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->dataInitializationDetails)) {
            Model::validateArray($this->dataInitializationDetails);
        }
        if (\is_array($this->dataSynchronizationDetails)) {
            Model::validateArray($this->dataSynchronizationDetails);
        }
        if (\is_array($this->structureInitializationDetails)) {
            Model::validateArray($this->structureInitializationDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataInitializationDetails) {
            if (\is_array($this->dataInitializationDetails)) {
                $res['DataInitializationDetails'] = [];
                $n1 = 0;
                foreach ($this->dataInitializationDetails as $item1) {
                    $res['DataInitializationDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSynchronizationDetails) {
            if (\is_array($this->dataSynchronizationDetails)) {
                $res['DataSynchronizationDetails'] = [];
                $n1 = 0;
                foreach ($this->dataSynchronizationDetails as $item1) {
                    $res['DataSynchronizationDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->structureInitializationDetails)) {
                $res['StructureInitializationDetails'] = [];
                $n1 = 0;
                foreach ($this->structureInitializationDetails as $item1) {
                    $res['StructureInitializationDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DataInitializationDetails'])) {
            if (!empty($map['DataInitializationDetails'])) {
                $model->dataInitializationDetails = [];
                $n1 = 0;
                foreach ($map['DataInitializationDetails'] as $item1) {
                    $model->dataInitializationDetails[$n1] = dataInitializationDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DataSynchronizationDetails'])) {
            if (!empty($map['DataSynchronizationDetails'])) {
                $model->dataSynchronizationDetails = [];
                $n1 = 0;
                foreach ($map['DataSynchronizationDetails'] as $item1) {
                    $model->dataSynchronizationDetails[$n1] = dataSynchronizationDetails::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['StructureInitializationDetails'] as $item1) {
                    $model->structureInitializationDetails[$n1] = structureInitializationDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
