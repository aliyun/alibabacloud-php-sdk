<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesResponseBody\conditionalAccessPolicies;

use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesResponseBody\conditionalAccessPolicies\conditionsConfig\applications;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesResponseBody\conditionalAccessPolicies\conditionsConfig\networkZones;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesResponseBody\conditionalAccessPolicies\conditionsConfig\users;
use AlibabaCloud\Tea\Model;

class conditionsConfig extends Model
{
    /**
     * @description Target applications of the conditional access policy
     *
     * @var applications
     */
    public $applications;

    /**
     * @description Network zones for conditional access policies
     *
     * @var networkZones
     */
    public $networkZones;

    /**
     * @description Target users of the conditional access policy
     *
     * @var users
     */
    public $users;
    protected $_name = [
        'applications' => 'Applications',
        'networkZones' => 'NetworkZones',
        'users' => 'Users',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applications) {
            $res['Applications'] = null !== $this->applications ? $this->applications->toMap() : null;
        }
        if (null !== $this->networkZones) {
            $res['NetworkZones'] = null !== $this->networkZones ? $this->networkZones->toMap() : null;
        }
        if (null !== $this->users) {
            $res['Users'] = null !== $this->users ? $this->users->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditionsConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Applications'])) {
            $model->applications = applications::fromMap($map['Applications']);
        }
        if (isset($map['NetworkZones'])) {
            $model->networkZones = networkZones::fromMap($map['NetworkZones']);
        }
        if (isset($map['Users'])) {
            $model->users = users::fromMap($map['Users']);
        }

        return $model;
    }
}
