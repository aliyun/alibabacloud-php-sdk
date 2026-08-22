<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchTopologyResponseBody\data;

use AlibabaCloud\Dara\Model;

class storage extends Model
{
    /**
     * @var int
     */
    public $replicaCount;

    /**
     * @var int
     */
    public $storageTotalGB;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'replicaCount' => 'ReplicaCount',
        'storageTotalGB' => 'StorageTotalGB',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->replicaCount) {
            $res['ReplicaCount'] = $this->replicaCount;
        }

        if (null !== $this->storageTotalGB) {
            $res['StorageTotalGB'] = $this->storageTotalGB;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['ReplicaCount'])) {
            $model->replicaCount = $map['ReplicaCount'];
        }

        if (isset($map['StorageTotalGB'])) {
            $model->storageTotalGB = $map['StorageTotalGB'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
