<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecoveryPlanRequest extends Model
{
    /**
     * @example rp-xxxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $recoveryPlanId;
    protected $_name = [
        'recoveryPlanId' => 'RecoveryPlanId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recoveryPlanId) {
            $res['RecoveryPlanId'] = $this->recoveryPlanId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecoveryPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecoveryPlanId'])) {
            $model->recoveryPlanId = $map['RecoveryPlanId'];
        }

        return $model;
    }
}
