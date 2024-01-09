<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeRecoveryPlansResponseBody\recoveryPlans;

use AlibabaCloud\Tea\Model;

class recoveryPlan extends Model
{
    /**
     * @example forward
     *
     * @var string
     */
    public $direction;

    /**
     * @example test-1
     *
     * @var string
     */
    public $name;

    /**
     * @example rp-xxxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $recoveryPlanId;

    /**
     * @example init
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'direction'      => 'Direction',
        'name'           => 'Name',
        'recoveryPlanId' => 'RecoveryPlanId',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->recoveryPlanId) {
            $res['RecoveryPlanId'] = $this->recoveryPlanId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recoveryPlan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RecoveryPlanId'])) {
            $model->recoveryPlanId = $map['RecoveryPlanId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
