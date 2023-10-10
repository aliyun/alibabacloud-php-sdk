<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class QuotasValue extends Model
{
    /**
     * @description The value of the quota. If the quota limit is reached, submit an application in the [Quota Center console](https://quotas.console.aliyun.com/products/csk/quotas) to increase the quota.
     *
     * @example 1
     *
     * @var string
     */
    public $quota;

    /**
     * @description The quota code.
     *
     * @example q_Kubernetes_Cluster
     *
     * @var string
     */
    public $operationCode;

    /**
     * @description Indicates whether the quota is adjustable.
     *
     * @example true
     *
     * @var bool
     */
    public $adjustable;

    /**
     * @description The unit.
     *
     * @example Cluster
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'quota'         => 'quota',
        'operationCode' => 'operation_code',
        'adjustable'    => 'adjustable',
        'unit'          => 'unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quota) {
            $res['quota'] = $this->quota;
        }
        if (null !== $this->operationCode) {
            $res['operation_code'] = $this->operationCode;
        }
        if (null !== $this->adjustable) {
            $res['adjustable'] = $this->adjustable;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuotasValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['quota'])) {
            $model->quota = $map['quota'];
        }
        if (isset($map['operation_code'])) {
            $model->operationCode = $map['operation_code'];
        }
        if (isset($map['adjustable'])) {
            $model->adjustable = $map['adjustable'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}
