<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeClassDetailsResponseBody extends Model
{
    /**
     * @example Basic
     *
     * @var string
     */
    public $category;

    /**
     * @example mysql.n2.medium.1
     *
     * @var string
     */
    public $classCode;

    /**
     * @example x
     *
     * @var string
     */
    public $classGroup;

    /**
     * @example 4
     *
     * @var string
     */
    public $cpu;

    /**
     * @example local_ssd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @example x86
     *
     * @var string
     */
    public $instructionSetArch;

    /**
     * @example 4000
     *
     * @var string
     */
    public $maxConnections;

    /**
     * @example 1024
     *
     * @var string
     */
    public $maxIOMBPS;

    /**
     * @example N/A
     *
     * @var string
     */
    public $maxIOPS;

    /**
     * @example 2GB
     *
     * @var string
     */
    public $memoryClass;

    /**
     * @example 13400
     *
     * @var string
     */
    public $referencePrice;

    /**
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
