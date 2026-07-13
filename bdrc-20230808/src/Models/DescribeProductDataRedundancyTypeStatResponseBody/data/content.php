<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeProductDataRedundancyTypeStatResponseBody\data;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $dataRedundancyType;

    /**
     * @var int
     */
    public $resourceCount;

    /**
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'dataRedundancyType' => 'DataRedundancyType',
        'resourceCount' => 'ResourceCount',
        'storageClass' => 'StorageClass',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataRedundancyType) {
            $res['DataRedundancyType'] = $this->dataRedundancyType;
        }

        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = $this->resourceCount;
        }

        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
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
        if (isset($map['DataRedundancyType'])) {
            $model->dataRedundancyType = $map['DataRedundancyType'];
        }

        if (isset($map['ResourceCount'])) {
            $model->resourceCount = $map['ResourceCount'];
        }

        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}
