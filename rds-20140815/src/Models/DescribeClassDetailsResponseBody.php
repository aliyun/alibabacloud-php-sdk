<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeClassDetailsResponseBody extends Model
{
    /**
     * @description The RDS edition of the instance. Valid values:
     *
     *   **Basic**: RDS Basic Edition
     *   **HighAvailability**: RDS High-availability Edition
     *   **AlwaysOn**: RDS Cluster Edition
     *   **Finance**: RDS Enterprise Edition
     *
     * @example Basic
     *
     * @var string
     */
    public $category;

    /**
     * @description The code of the instance type.
     *
     * @example mysql.n2.medium.1
     *
     * @var string
     */
    public $classCode;

    /**
     * @description The instance family of the instance.
     *
     * @example x
     *
     * @var string
     */
    public $classGroup;

    /**
     * @description The number of CPU cores that are supported by the instance type. Unit: cores.
     *
     * @example 4
     *
     * @var string
     */
    public $cpu;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **local_ssd**: local SSDs
     *   **cloud_ssd**: standard SSDs
     *   **cloud_essd**: enhanced SSDs (ESSDs) of performance level 1 (PL1)
     *   **cloud_essd2**: ESSDs of PL2
     *   **cloud_essd3**: ESSD of PL3
     *
     * @example local_ssd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description The architecture of the instance.
     *
     * @example x86
     *
     * @var string
     */
    public $instructionSetArch;

    /**
     * @description The maximum number of connections.
     *
     * @example 4000
     *
     * @var string
     */
    public $maxConnections;

    /**
     * @description The maximum I/O bandwidth that is supported by the instance type. Unit: Mbit/s.
     *
     * @example 1024
     *
     * @var string
     */
    public $maxIOMBPS;

    /**
     * @description The maximum input/output operations per second (IOPS) that is supported by the instance type. Unit: operations per second.
     *
     * @example N/A
     *
     * @var string
     */
    public $maxIOPS;

    /**
     * @description The memory size. Unit: GB.
     *
     * @example 2GB
     *
     * @var string
     */
    public $memoryClass;

    /**
     * @description The price.
     *
     * >
     *
     *   If you set the CommodityCode parameter to a value that indicates the pay-as-you-go billing method, the ReferencePrice parameter specifies the hourly fee that you must pay.
     *
     *   If you set the CommodityCode parameter to a value that indicates the subscription billing method, the ReferencePrice parameter specifies the monthly fee that you must pay.
     *
     * @example 13400
     *
     * @var string
     */
    public $referencePrice;

    /**
     * @description The request ID.
     *
     * @example E9DD55F4-1A5F-48CA-BA57-DFB3CA8C4C34
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'category'              => 'Category',
        'classCode'             => 'ClassCode',
        'classGroup'            => 'ClassGroup',
        'cpu'                   => 'Cpu',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'instructionSetArch'    => 'InstructionSetArch',
        'maxConnections'        => 'MaxConnections',
        'maxIOMBPS'             => 'MaxIOMBPS',
        'maxIOPS'               => 'MaxIOPS',
        'memoryClass'           => 'MemoryClass',
        'referencePrice'        => 'ReferencePrice',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }
        if (null !== $this->classGroup) {
            $res['ClassGroup'] = $this->classGroup;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->instructionSetArch) {
            $res['InstructionSetArch'] = $this->instructionSetArch;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->maxIOMBPS) {
            $res['MaxIOMBPS'] = $this->maxIOMBPS;
        }
        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }
        if (null !== $this->memoryClass) {
            $res['MemoryClass'] = $this->memoryClass;
        }
        if (null !== $this->referencePrice) {
            $res['ReferencePrice'] = $this->referencePrice;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClassDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }
        if (isset($map['ClassGroup'])) {
            $model->classGroup = $map['ClassGroup'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['InstructionSetArch'])) {
            $model->instructionSetArch = $map['InstructionSetArch'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['MaxIOMBPS'])) {
            $model->maxIOMBPS = $map['MaxIOMBPS'];
        }
        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }
        if (isset($map['MemoryClass'])) {
            $model->memoryClass = $map['MemoryClass'];
        }
        if (isset($map['ReferencePrice'])) {
            $model->referencePrice = $map['ReferencePrice'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
