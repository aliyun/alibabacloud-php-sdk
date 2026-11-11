<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeUserSiemOrderStatusResponseBody\data;

use AlibabaCloud\Dara\Model;

class creditsPostpaidInfo extends Model
{
    /**
     * @var int
     */
    public $billingStatus;

    /**
     * @var string
     */
    public $instanceSource;

    /**
     * @var int
     */
    public $userSwitchStatus;
    protected $_name = [
        'billingStatus' => 'BillingStatus',
        'instanceSource' => 'InstanceSource',
        'userSwitchStatus' => 'UserSwitchStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingStatus) {
            $res['BillingStatus'] = $this->billingStatus;
        }

        if (null !== $this->instanceSource) {
            $res['InstanceSource'] = $this->instanceSource;
        }

        if (null !== $this->userSwitchStatus) {
            $res['UserSwitchStatus'] = $this->userSwitchStatus;
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
        if (isset($map['BillingStatus'])) {
            $model->billingStatus = $map['BillingStatus'];
        }

        if (isset($map['InstanceSource'])) {
            $model->instanceSource = $map['InstanceSource'];
        }

        if (isset($map['UserSwitchStatus'])) {
            $model->userSwitchStatus = $map['UserSwitchStatus'];
        }

        return $model;
    }
}
