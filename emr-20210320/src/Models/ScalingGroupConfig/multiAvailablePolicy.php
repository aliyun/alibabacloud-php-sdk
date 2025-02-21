<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ScalingGroupConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingGroupConfig\multiAvailablePolicy\policyParam;

class multiAvailablePolicy extends Model
{
    /**
     * @var policyParam
     */
    public $policyParam;
    /**
     * @var string
     */
    public $policyType;
    protected $_name = [
        'policyParam' => 'PolicyParam',
        'policyType'  => 'PolicyType',
    ];

    public function validate()
    {
        if (null !== $this->policyParam) {
            $this->policyParam->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyParam) {
            $res['PolicyParam'] = null !== $this->policyParam ? $this->policyParam->toArray($noStream) : $this->policyParam;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
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
        if (isset($map['PolicyParam'])) {
            $model->policyParam = policyParam::fromMap($map['PolicyParam']);
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
