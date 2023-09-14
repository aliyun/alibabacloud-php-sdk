<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ScalingGroupConfig;

use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingGroupConfig\multiAvailablePolicy\policyParam;
use AlibabaCloud\Tea\Model;

class multiAvailablePolicy extends Model
{
    /**
     * @description 资源可用性策略(成本优化参数)。
     *
     * @var policyParam
     */
    public $policyParam;

    /**
     * @description 策略类型。
     *
     * @example PRIORITY
     *
     * @var string
     */
    public $policyType;
    protected $_name = [
        'policyParam' => 'PolicyParam',
        'policyType'  => 'PolicyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyParam) {
            $res['PolicyParam'] = null !== $this->policyParam ? $this->policyParam->toMap() : null;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multiAvailablePolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyParam'])) {
            $model->policyParam = policyParam::fromMap($map['PolicyParam']);
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
