<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ListClassesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $classCode;

    /**
     * @var string
     */
    public $classGroup;

    /**
     * @var string
     */
    public $cpu;

    /**
     * @var string
     */
    public $encryptedMemory;

    /**
     * @var string
     */
    public $instructionSetArch;

    /**
     * @var string
     */
    public $maxConnections;

    /**
     * @var string
     */
    public $maxIOMBPS;

    /**
     * @var string
     */
    public $maxIOPS;

    /**
     * @var string
     */
    public $memoryClass;

    /**
     * @var string
     */
    public $referencePrice;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'classCode' => 'ClassCode',
        'classGroup' => 'ClassGroup',
        'cpu' => 'Cpu',
        'encryptedMemory' => 'EncryptedMemory',
        'instructionSetArch' => 'InstructionSetArch',
        'maxConnections' => 'MaxConnections',
        'maxIOMBPS' => 'MaxIOMBPS',
        'maxIOPS' => 'MaxIOPS',
        'memoryClass' => 'MemoryClass',
        'referencePrice' => 'ReferencePrice',
        'category' => 'category',
        'storageType' => 'storageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->storageType) {
            $res['storageType'] = $this->storageType;
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

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['storageType'])) {
            $model->storageType = $map['storageType'];
        }

        return $model;
    }
}
