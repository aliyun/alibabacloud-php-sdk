<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ListClassesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The code of the instance type. For more information, see [Primary ApsaraDB RDS instance types](~~26312~~) and [Read-only ApsaraDB RDS instance types](~~145759~~).
     *
     * @example mysql.n1.micro.1
     *
     * @var string
     */
    public $classCode;

    /**
     * @description The instance family. For more information, see [Overview of instance families](~~57184~~).
     *
     * @example General
     *
     * @var string
     */
    public $classGroup;

    /**
     * @description The number of CPU cores that are supported by the instance type. Unit: cores.
     *
     * @example 1
     *
     * @var string
     */
    public $cpu;

    /**
     * @description The size of the encrypted memory that is supported by the security-enhanced instance type. Unit: GB.
     *
     * @example 4
     *
     * @var string
     */
    public $encryptedMemory;

    /**
     * @description The architecture of the instance type. Valid values:
     *
     *   If the architecture of the instance type is **x86**, an empty string is returned by default.
     *   If the architecture of the instance type is **ARM**, **arm** is returned.
     *
     * @example arm
     *
     * @var string
     */
    public $instructionSetArch;

    /**
     * @description The maximum number of connections that are supported by the instance type. Unit: connections.
     *
     * @example 2000
     *
     * @var string
     */
    public $maxConnections;

    /**
     * @description The maximum I/O bandwidth that is supported by the instance type. Unit: Mbit/s.
     *
     * @example 1024Mbps
     *
     * @var string
     */
    public $maxIOMBPS;

    /**
     * @description The maximum input/output operations per second (IOPS) that is supported by the instance type. Unit: operations per second.
     *
     * @example 10000
     *
     * @var string
     */
    public $maxIOPS;

    /**
     * @description The memory size that is supported by the instance type. Unit: GB.
     *
     * @example 1 GB (RDS Basic Edition)
     *
     * @var string
     */
    public $memoryClass;

    /**
     * @description The fee that you must pay for the instance type.
     *
     *   Unit: cents (USD).
     *
     * >
     *
     *   If you set **CommodityCode** to a value that indicates the pay-as-you-go billing method, the ReferencePrice parameter specifies the hourly fee that you must pay.
     *
     *   If you set **CommodityCode** to a value that indicates the subscription billing method, the ReferencePrice parameter specifies the monthly fee that you must pay.
     *
     * @example 2500
     *
     * @var string
     */
    public $referencePrice;
    protected $_name = [
        'classCode'          => 'ClassCode',
        'classGroup'         => 'ClassGroup',
        'cpu'                => 'Cpu',
        'encryptedMemory'    => 'EncryptedMemory',
        'instructionSetArch' => 'InstructionSetArch',
        'maxConnections'     => 'MaxConnections',
        'maxIOMBPS'          => 'MaxIOMBPS',
        'maxIOPS'            => 'MaxIOPS',
        'memoryClass'        => 'MemoryClass',
        'referencePrice'     => 'ReferencePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }
        if (null !== $this->classGroup) {
            $res['ClassGroup'] = $this->classGroup;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->encryptedMemory) {
            $res['EncryptedMemory'] = $this->encryptedMemory;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }
        if (isset($map['ClassGroup'])) {
            $model->classGroup = $map['ClassGroup'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['EncryptedMemory'])) {
            $model->encryptedMemory = $map['EncryptedMemory'];
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

        return $model;
    }
}
