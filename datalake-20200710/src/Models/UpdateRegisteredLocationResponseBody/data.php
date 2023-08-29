<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\UpdateRegisteredLocationResponseBody;

use AlibabaCloud\SDK\DataLake\V20200710\Models\StorageCollectTaskOperationResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Location ID
     *
     * @example LOC-AB8FBC17F95A4AF5
     *
     * @var string
     */
    public $locationId;

    /**
     * @var StorageCollectTaskOperationResult[]
     */
    public $storageCollectTaskOperationResultList;
    protected $_name = [
        'locationId'                            => 'LocationId',
        'storageCollectTaskOperationResultList' => 'StorageCollectTaskOperationResultList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }
        if (null !== $this->storageCollectTaskOperationResultList) {
            $res['StorageCollectTaskOperationResultList'] = [];
            if (null !== $this->storageCollectTaskOperationResultList && \is_array($this->storageCollectTaskOperationResultList)) {
                $n = 0;
                foreach ($this->storageCollectTaskOperationResultList as $item) {
                    $res['StorageCollectTaskOperationResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocationId'])) {
            $model->locationId = $map['LocationId'];
        }
        if (isset($map['StorageCollectTaskOperationResultList'])) {
            if (!empty($map['StorageCollectTaskOperationResultList'])) {
                $model->storageCollectTaskOperationResultList = [];
                $n                                            = 0;
                foreach ($map['StorageCollectTaskOperationResultList'] as $item) {
                    $model->storageCollectTaskOperationResultList[$n++] = null !== $item ? StorageCollectTaskOperationResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
