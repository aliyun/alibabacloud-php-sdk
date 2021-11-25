<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class QuotaDetail extends Model
{
    /**
     * @description CPU核数
     *
     * @var string
     */
    public $CPU;

    /**
     * @description GPU卡数
     *
     * @var string
     */
    public $GPU;

    /**
     * @description GPU详情
     *
     * @var GPUDetail[]
     */
    public $GPUDetails;

    /**
     * @description GPU卡型
     *
     * @var string
     */
    public $GPUType;

    /**
     * @description GPU卡型全名
     *
     * @var string
     */
    public $GPUTypeFullName;

    /**
     * @description 内存容量
     *
     * @var string
     */
    public $memory;
    protected $_name = [
        'CPU'             => 'CPU',
        'GPU'             => 'GPU',
        'GPUDetails'      => 'GPUDetails',
        'GPUType'         => 'GPUType',
        'GPUTypeFullName' => 'GPUTypeFullName',
        'memory'          => 'Memory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }
        if (null !== $this->GPU) {
            $res['GPU'] = $this->GPU;
        }
        if (null !== $this->GPUDetails) {
            $res['GPUDetails'] = [];
            if (null !== $this->GPUDetails && \is_array($this->GPUDetails)) {
                $n = 0;
                foreach ($this->GPUDetails as $item) {
                    $res['GPUDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->GPUType) {
            $res['GPUType'] = $this->GPUType;
        }
        if (null !== $this->GPUTypeFullName) {
            $res['GPUTypeFullName'] = $this->GPUTypeFullName;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuotaDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }
        if (isset($map['GPU'])) {
            $model->GPU = $map['GPU'];
        }
        if (isset($map['GPUDetails'])) {
            if (!empty($map['GPUDetails'])) {
                $model->GPUDetails = [];
                $n                 = 0;
                foreach ($map['GPUDetails'] as $item) {
                    $model->GPUDetails[$n++] = null !== $item ? GPUDetail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GPUType'])) {
            $model->GPUType = $map['GPUType'];
        }
        if (isset($map['GPUTypeFullName'])) {
            $model->GPUTypeFullName = $map['GPUTypeFullName'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
