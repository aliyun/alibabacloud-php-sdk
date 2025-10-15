<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForApplicationResponseBody\conditionalAccessPolicies;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForApplicationResponseBody\conditionalAccessPolicies\conditionsConfig\applications;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForApplicationResponseBody\conditionalAccessPolicies\conditionsConfig\networkZones;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForApplicationResponseBody\conditionalAccessPolicies\conditionsConfig\users;

class conditionsConfig extends Model
{
    /**
     * @var applications
     */
    public $applications;

    /**
     * @var networkZones
     */
    public $networkZones;

    /**
     * @var users
     */
    public $users;
    protected $_name = [
        'applications' => 'Applications',
        'networkZones' => 'NetworkZones',
        'users' => 'Users',
    ];

    public function validate()
    {
        if (null !== $this->applications) {
            $this->applications->validate();
        }
        if (null !== $this->networkZones) {
            $this->networkZones->validate();
        }
        if (null !== $this->users) {
            $this->users->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applications) {
            $res['Applications'] = null !== $this->applications ? $this->applications->toArray($noStream) : $this->applications;
        }

        if (null !== $this->networkZones) {
            $res['NetworkZones'] = null !== $this->networkZones ? $this->networkZones->toArray($noStream) : $this->networkZones;
        }

        if (null !== $this->users) {
            $res['Users'] = null !== $this->users ? $this->users->toArray($noStream) : $this->users;
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
