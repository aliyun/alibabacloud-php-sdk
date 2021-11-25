<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GPUDetail extends Model
{
    /**
     * @description GPU卡数
     *
     * @var string
     */
    public $GPU;

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
    protected $_name = [
        'GPU'             => 'GPU',
        'GPUType'         => 'GPUType',
        'GPUTypeFullName' => 'GPUTypeFullName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->GPU) {
            $res['GPU'] = $this->GPU;
        }
        if (null !== $this->GPUType) {
            $res['GPUType'] = $this->GPUType;
        }
        if (null !== $this->GPUTypeFullName) {
            $res['GPUTypeFullName'] = $this->GPUTypeFullName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GPUDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GPU'])) {
            $model->GPU = $map['GPU'];
        }
        if (isset($map['GPUType'])) {
            $model->GPUType = $map['GPUType'];
        }
        if (isset($map['GPUTypeFullName'])) {
            $model->GPUTypeFullName = $map['GPUTypeFullName'];
        }

        return $model;
    }
}
