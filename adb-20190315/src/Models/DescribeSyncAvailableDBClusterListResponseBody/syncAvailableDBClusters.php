<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSyncAvailableDBClusterListResponseBody;

use AlibabaCloud\Dara\Model;

class syncAvailableDBClusters extends Model
{
    /**
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var float
     */
    public $storageSize;

    /**
     * @var int
     */
    public $tableNumber;
    protected $_name = [
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId' => 'DBClusterId',
        'DBType' => 'DBType',
        'storageSize' => 'StorageSize',
        'tableNumber' => 'TableNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        if (null !== $this->tableNumber) {
            $res['TableNumber'] = $this->tableNumber;
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
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        if (isset($map['TableNumber'])) {
            $model->tableNumber = $map['TableNumber'];
        }

        return $model;
    }
}
