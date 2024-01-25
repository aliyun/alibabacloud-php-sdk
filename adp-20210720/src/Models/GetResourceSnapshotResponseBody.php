<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\GetResourceSnapshotResponseBody\adpInfo;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetResourceSnapshotResponseBody\productInfo;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetResourceSnapshotResponseBody\specParamConfigs;
use AlibabaCloud\Tea\Model;

class GetResourceSnapshotResponseBody extends Model
{
    /**
     * @var string
     */
    public $CPULimit;

    /**
     * @var string
     */
    public $CPURequest;

    /**
     * @var adpInfo
     */
    public $adpInfo;

    /**
     * @var string
     */
    public $memoryLimit;

    /**
     * @var string
     */
    public $memoryRequest;

    /**
     * @var productInfo
     */
    public $productInfo;

    /**
     * @var specParamConfigs[]
     */
    public $specParamConfigs;

    /**
     * @var string
     */
    public $storageRequest;
    protected $_name = [
        'CPULimit'         => 'CPULimit',
        'CPURequest'       => 'CPURequest',
        'adpInfo'          => 'adpInfo',
        'memoryLimit'      => 'memoryLimit',
        'memoryRequest'    => 'memoryRequest',
        'productInfo'      => 'productInfo',
        'specParamConfigs' => 'specParamConfigs',
        'storageRequest'   => 'storageRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPULimit) {
            $res['CPULimit'] = $this->CPULimit;
        }
        if (null !== $this->CPURequest) {
            $res['CPURequest'] = $this->CPURequest;
        }
        if (null !== $this->adpInfo) {
            $res['adpInfo'] = null !== $this->adpInfo ? $this->adpInfo->toMap() : null;
        }
        if (null !== $this->memoryLimit) {
            $res['memoryLimit'] = $this->memoryLimit;
        }
        if (null !== $this->memoryRequest) {
            $res['memoryRequest'] = $this->memoryRequest;
        }
        if (null !== $this->productInfo) {
            $res['productInfo'] = null !== $this->productInfo ? $this->productInfo->toMap() : null;
        }
        if (null !== $this->specParamConfigs) {
            $res['specParamConfigs'] = [];
            if (null !== $this->specParamConfigs && \is_array($this->specParamConfigs)) {
                $n = 0;
                foreach ($this->specParamConfigs as $item) {
                    $res['specParamConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->storageRequest) {
            $res['storageRequest'] = $this->storageRequest;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceSnapshotResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPULimit'])) {
            $model->CPULimit = $map['CPULimit'];
        }
        if (isset($map['CPURequest'])) {
            $model->CPURequest = $map['CPURequest'];
        }
        if (isset($map['adpInfo'])) {
            $model->adpInfo = adpInfo::fromMap($map['adpInfo']);
        }
        if (isset($map['memoryLimit'])) {
            $model->memoryLimit = $map['memoryLimit'];
        }
        if (isset($map['memoryRequest'])) {
            $model->memoryRequest = $map['memoryRequest'];
        }
        if (isset($map['productInfo'])) {
            $model->productInfo = productInfo::fromMap($map['productInfo']);
        }
        if (isset($map['specParamConfigs'])) {
            if (!empty($map['specParamConfigs'])) {
                $model->specParamConfigs = [];
                $n                       = 0;
                foreach ($map['specParamConfigs'] as $item) {
                    $model->specParamConfigs[$n++] = null !== $item ? specParamConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['storageRequest'])) {
            $model->storageRequest = $map['storageRequest'];
        }

        return $model;
    }
}
