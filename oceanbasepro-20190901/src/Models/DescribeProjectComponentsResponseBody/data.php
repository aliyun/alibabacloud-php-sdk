<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\fullImportComponents;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\fullVerifyComponents;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\incrSyncComponents;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\reverseIncrSyncComponents;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\reverseStoreList;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\storeList;

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
        'fullImportComponents' => 'FullImportComponents',
        'fullVerifyComponents' => 'FullVerifyComponents',
        'incrSyncComponents' => 'IncrSyncComponents',
        'reverseIncrSyncComponents' => 'ReverseIncrSyncComponents',
        'reverseStoreList' => 'ReverseStoreList',
        'storeList' => 'StoreList',
    ];

    public function validate()
    {
        if (\is_array($this->fullImportComponents)) {
            Model::validateArray($this->fullImportComponents);
        }
        if (\is_array($this->fullVerifyComponents)) {
            Model::validateArray($this->fullVerifyComponents);
        }
        if (\is_array($this->incrSyncComponents)) {
            Model::validateArray($this->incrSyncComponents);
        }
        if (\is_array($this->reverseIncrSyncComponents)) {
            Model::validateArray($this->reverseIncrSyncComponents);
        }
        if (\is_array($this->reverseStoreList)) {
            Model::validateArray($this->reverseStoreList);
        }
        if (\is_array($this->storeList)) {
            Model::validateArray($this->storeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fullImportComponents) {
            if (\is_array($this->fullImportComponents)) {
                $res['FullImportComponents'] = [];
                $n1 = 0;
                foreach ($this->fullImportComponents as $item1) {
                    $res['FullImportComponents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->fullVerifyComponents) {
            if (\is_array($this->fullVerifyComponents)) {
                $res['FullVerifyComponents'] = [];
                $n1 = 0;
                foreach ($this->fullVerifyComponents as $item1) {
                    $res['FullVerifyComponents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->incrSyncComponents) {
            if (\is_array($this->incrSyncComponents)) {
                $res['IncrSyncComponents'] = [];
                $n1 = 0;
                foreach ($this->incrSyncComponents as $item1) {
                    $res['IncrSyncComponents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->reverseIncrSyncComponents) {
            if (\is_array($this->reverseIncrSyncComponents)) {
                $res['ReverseIncrSyncComponents'] = [];
                $n1 = 0;
                foreach ($this->reverseIncrSyncComponents as $item1) {
                    $res['ReverseIncrSyncComponents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->reverseStoreList) {
            if (\is_array($this->reverseStoreList)) {
                $res['ReverseStoreList'] = [];
                $n1 = 0;
                foreach ($this->reverseStoreList as $item1) {
                    $res['ReverseStoreList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->storeList) {
            if (\is_array($this->storeList)) {
                $res['StoreList'] = [];
                $n1 = 0;
                foreach ($this->storeList as $item1) {
                    $res['StoreList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['FullImportComponents'])) {
            if (!empty($map['FullImportComponents'])) {
                $model->fullImportComponents = [];
                $n1 = 0;
                foreach ($map['FullImportComponents'] as $item1) {
                    $model->fullImportComponents[$n1++] = fullImportComponents::fromMap($item1);
                }
            }
        }

        if (isset($map['FullVerifyComponents'])) {
            if (!empty($map['FullVerifyComponents'])) {
                $model->fullVerifyComponents = [];
                $n1 = 0;
                foreach ($map['FullVerifyComponents'] as $item1) {
                    $model->fullVerifyComponents[$n1++] = fullVerifyComponents::fromMap($item1);
                }
            }
        }

        if (isset($map['IncrSyncComponents'])) {
            if (!empty($map['IncrSyncComponents'])) {
                $model->incrSyncComponents = [];
                $n1 = 0;
                foreach ($map['IncrSyncComponents'] as $item1) {
                    $model->incrSyncComponents[$n1++] = incrSyncComponents::fromMap($item1);
                }
            }
        }

        if (isset($map['ReverseIncrSyncComponents'])) {
            if (!empty($map['ReverseIncrSyncComponents'])) {
                $model->reverseIncrSyncComponents = [];
                $n1 = 0;
                foreach ($map['ReverseIncrSyncComponents'] as $item1) {
                    $model->reverseIncrSyncComponents[$n1++] = reverseIncrSyncComponents::fromMap($item1);
                }
            }
        }

        if (isset($map['ReverseStoreList'])) {
            if (!empty($map['ReverseStoreList'])) {
                $model->reverseStoreList = [];
                $n1 = 0;
                foreach ($map['ReverseStoreList'] as $item1) {
                    $model->reverseStoreList[$n1++] = reverseStoreList::fromMap($item1);
                }
            }
        }

        if (isset($map['StoreList'])) {
            if (!empty($map['StoreList'])) {
                $model->storeList = [];
                $n1 = 0;
                foreach ($map['StoreList'] as $item1) {
                    $model->storeList[$n1++] = storeList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
