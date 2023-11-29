<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\fullImportComponents;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\fullVerifyComponents;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\incrSyncComponents;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\reverseIncrSyncComponents;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\reverseStoreList;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\storeList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var fullImportComponents[]
     */
    public $fullImportComponents;

    /**
     * @var fullVerifyComponents[]
     */
    public $fullVerifyComponents;

    /**
     * @var incrSyncComponents[]
     */
    public $incrSyncComponents;

    /**
     * @var reverseIncrSyncComponents[]
     */
    public $reverseIncrSyncComponents;

    /**
     * @var reverseStoreList[]
     */
    public $reverseStoreList;

    /**
     * @var storeList[]
     */
    public $storeList;
    protected $_name = [
        'fullImportComponents'      => 'FullImportComponents',
        'fullVerifyComponents'      => 'FullVerifyComponents',
        'incrSyncComponents'        => 'IncrSyncComponents',
        'reverseIncrSyncComponents' => 'ReverseIncrSyncComponents',
        'reverseStoreList'          => 'ReverseStoreList',
        'storeList'                 => 'StoreList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fullImportComponents) {
            $res['FullImportComponents'] = [];
            if (null !== $this->fullImportComponents && \is_array($this->fullImportComponents)) {
                $n = 0;
                foreach ($this->fullImportComponents as $item) {
                    $res['FullImportComponents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fullVerifyComponents) {
            $res['FullVerifyComponents'] = [];
            if (null !== $this->fullVerifyComponents && \is_array($this->fullVerifyComponents)) {
                $n = 0;
                foreach ($this->fullVerifyComponents as $item) {
                    $res['FullVerifyComponents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->incrSyncComponents) {
            $res['IncrSyncComponents'] = [];
            if (null !== $this->incrSyncComponents && \is_array($this->incrSyncComponents)) {
                $n = 0;
                foreach ($this->incrSyncComponents as $item) {
                    $res['IncrSyncComponents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->reverseIncrSyncComponents) {
            $res['ReverseIncrSyncComponents'] = [];
            if (null !== $this->reverseIncrSyncComponents && \is_array($this->reverseIncrSyncComponents)) {
                $n = 0;
                foreach ($this->reverseIncrSyncComponents as $item) {
                    $res['ReverseIncrSyncComponents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->reverseStoreList) {
            $res['ReverseStoreList'] = [];
            if (null !== $this->reverseStoreList && \is_array($this->reverseStoreList)) {
                $n = 0;
                foreach ($this->reverseStoreList as $item) {
                    $res['ReverseStoreList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->storeList) {
            $res['StoreList'] = [];
            if (null !== $this->storeList && \is_array($this->storeList)) {
                $n = 0;
                foreach ($this->storeList as $item) {
                    $res['StoreList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['FullImportComponents'])) {
            if (!empty($map['FullImportComponents'])) {
                $model->fullImportComponents = [];
                $n                           = 0;
                foreach ($map['FullImportComponents'] as $item) {
                    $model->fullImportComponents[$n++] = null !== $item ? fullImportComponents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FullVerifyComponents'])) {
            if (!empty($map['FullVerifyComponents'])) {
                $model->fullVerifyComponents = [];
                $n                           = 0;
                foreach ($map['FullVerifyComponents'] as $item) {
                    $model->fullVerifyComponents[$n++] = null !== $item ? fullVerifyComponents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IncrSyncComponents'])) {
            if (!empty($map['IncrSyncComponents'])) {
                $model->incrSyncComponents = [];
                $n                         = 0;
                foreach ($map['IncrSyncComponents'] as $item) {
                    $model->incrSyncComponents[$n++] = null !== $item ? incrSyncComponents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReverseIncrSyncComponents'])) {
            if (!empty($map['ReverseIncrSyncComponents'])) {
                $model->reverseIncrSyncComponents = [];
                $n                                = 0;
                foreach ($map['ReverseIncrSyncComponents'] as $item) {
                    $model->reverseIncrSyncComponents[$n++] = null !== $item ? reverseIncrSyncComponents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReverseStoreList'])) {
            if (!empty($map['ReverseStoreList'])) {
                $model->reverseStoreList = [];
                $n                       = 0;
                foreach ($map['ReverseStoreList'] as $item) {
                    $model->reverseStoreList[$n++] = null !== $item ? reverseStoreList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StoreList'])) {
            if (!empty($map['StoreList'])) {
                $model->storeList = [];
                $n                = 0;
                foreach ($map['StoreList'] as $item) {
                    $model->storeList[$n++] = null !== $item ? storeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
