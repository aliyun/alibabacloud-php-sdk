<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Tea\Model;

class ResourceSpec extends Model
{
    /**
     * @var int
     */
    public $cu;

    /**
     * @var int
     */
    public $diskNumber;

    /**
     * @var string
     */
    public $localStorageInstanceType;

    /**
     * @var int
     */
    public $nodeNumber;

    /**
     * @var string
     */
    public $specType;

    /**
     * @var string
     */
    public $storagePerformanceLevel;

    /**
     * @var int
     */
    public $storageSize;
    protected $_name = [
        'cu' => 'cu',
        'diskNumber' => 'diskNumber',
        'localStorageInstanceType' => 'localStorageInstanceType',
        'nodeNumber' => 'nodeNumber',
        'specType' => 'specType',
        'storagePerformanceLevel' => 'storagePerformanceLevel',
        'storageSize' => 'storageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cu) {
            $res['cu'] = $this->cu;
        }
        if (null !== $this->diskNumber) {
            $res['diskNumber'] = $this->diskNumber;
        }
        if (null !== $this->localStorageInstanceType) {
            $res['localStorageInstanceType'] = $this->localStorageInstanceType;
        }
        if (null !== $this->nodeNumber) {
            $res['nodeNumber'] = $this->nodeNumber;
        }
        if (null !== $this->specType) {
            $res['specType'] = $this->specType;
        }
        if (null !== $this->storagePerformanceLevel) {
            $res['storagePerformanceLevel'] = $this->storagePerformanceLevel;
        }
        if (null !== $this->storageSize) {
            $res['storageSize'] = $this->storageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cu'])) {
            $model->cu = $map['cu'];
        }
        if (isset($map['diskNumber'])) {
            $model->diskNumber = $map['diskNumber'];
        }
        if (isset($map['localStorageInstanceType'])) {
            $model->localStorageInstanceType = $map['localStorageInstanceType'];
        }
        if (isset($map['nodeNumber'])) {
            $model->nodeNumber = $map['nodeNumber'];
        }
        if (isset($map['specType'])) {
            $model->specType = $map['specType'];
        }
        if (isset($map['storagePerformanceLevel'])) {
            $model->storagePerformanceLevel = $map['storagePerformanceLevel'];
        }
        if (isset($map['storageSize'])) {
            $model->storageSize = $map['storageSize'];
        }

        return $model;
    }
}
