<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\VerifyRouteRuleResponseBody\data;

use AlibabaCloud\Tea\Model;

class escalationPlans extends Model
{
    /**
     * @example 111111
     *
     * @var int
     */
    public $escalationPlanId;

    /**
     * @example 升级计划1
     *
     * @var string
     */
    public $escalationPlanName;
    protected $_name = [
        'escalationPlanId'   => 'escalationPlanId',
        'escalationPlanName' => 'escalationPlanName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationPlanId) {
            $res['escalationPlanId'] = $this->escalationPlanId;
        }
        if (null !== $this->escalationPlanName) {
            $res['escalationPlanName'] = $this->escalationPlanName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalationPlans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['escalationPlanId'])) {
            $model->escalationPlanId = $map['escalationPlanId'];
        }
        if (isset($map['escalationPlanName'])) {
            $model->escalationPlanName = $map['escalationPlanName'];
        }

        return $model;
    }
}
