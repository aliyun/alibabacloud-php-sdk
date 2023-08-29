<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class UnarchiveDetail extends Model
{
    /**
     * @var int
     */
    public $apiCallTimes;

    /**
     * @var int
     */
    public $cost;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $unarchiveTaskStatus;
    protected $_name = [
        'apiCallTimes'        => 'ApiCallTimes',
        'cost'                => 'Cost',
        'storageSize'         => 'StorageSize',
        'storageType'         => 'StorageType',
        'unarchiveTaskStatus' => 'UnarchiveTaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiCallTimes) {
            $res['ApiCallTimes'] = $this->apiCallTimes;
        }
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->unarchiveTaskStatus) {
            $res['UnarchiveTaskStatus'] = $this->unarchiveTaskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnarchiveDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiCallTimes'])) {
            $model->apiCallTimes = $map['ApiCallTimes'];
        }
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['UnarchiveTaskStatus'])) {
            $model->unarchiveTaskStatus = $map['UnarchiveTaskStatus'];
        }

        return $model;
    }
}
