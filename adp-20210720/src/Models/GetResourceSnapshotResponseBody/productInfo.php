<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetResourceSnapshotResponseBody;

use AlibabaCloud\SDK\Adp\V20210720\Models\GetResourceSnapshotResponseBody\productInfo\components;
use AlibabaCloud\Tea\Model;

class productInfo extends Model
{
    /**
     * @var string
     */
    public $CPURequest;

    /**
     * @var int
     */
    public $componentNum;

    /**
     * @var components[]
     */
    public $components;

    /**
     * @var string
     */
    public $memoryRequest;

    /**
     * @var int
     */
    public $podNum;

    /**
     * @var string
     */
    public $storageRequest;

    /**
     * @var int
     */
    public $workloadNum;
    protected $_name = [
        'CPURequest'     => 'CPURequest',
        'componentNum'   => 'componentNum',
        'components'     => 'components',
        'memoryRequest'  => 'memoryRequest',
        'podNum'         => 'podNum',
        'storageRequest' => 'storageRequest',
        'workloadNum'    => 'workloadNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPURequest) {
            $res['CPURequest'] = $this->CPURequest;
        }
        if (null !== $this->componentNum) {
            $res['componentNum'] = $this->componentNum;
        }
        if (null !== $this->components) {
            $res['components'] = [];
            if (null !== $this->components && \is_array($this->components)) {
                $n = 0;
                foreach ($this->components as $item) {
                    $res['components'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->memoryRequest) {
            $res['memoryRequest'] = $this->memoryRequest;
        }
        if (null !== $this->podNum) {
            $res['podNum'] = $this->podNum;
        }
        if (null !== $this->storageRequest) {
            $res['storageRequest'] = $this->storageRequest;
        }
        if (null !== $this->workloadNum) {
            $res['workloadNum'] = $this->workloadNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPURequest'])) {
            $model->CPURequest = $map['CPURequest'];
        }
        if (isset($map['componentNum'])) {
            $model->componentNum = $map['componentNum'];
        }
        if (isset($map['components'])) {
            if (!empty($map['components'])) {
                $model->components = [];
                $n                 = 0;
                foreach ($map['components'] as $item) {
                    $model->components[$n++] = null !== $item ? components::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['memoryRequest'])) {
            $model->memoryRequest = $map['memoryRequest'];
        }
        if (isset($map['podNum'])) {
            $model->podNum = $map['podNum'];
        }
        if (isset($map['storageRequest'])) {
            $model->storageRequest = $map['storageRequest'];
        }
        if (isset($map['workloadNum'])) {
            $model->workloadNum = $map['workloadNum'];
        }

        return $model;
    }
}
