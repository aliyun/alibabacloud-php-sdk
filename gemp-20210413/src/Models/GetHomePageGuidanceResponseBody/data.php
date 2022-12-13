<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetHomePageGuidanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $notifySubscriptionStatus;

    /**
     * @example true
     *
     * @var bool
     */
    public $serviceGroupStatus;

    /**
     * @example true
     *
     * @var bool
     */
    public $serviceStatus;

    /**
     * @example true
     *
     * @var bool
     */
    public $usersStatus;
    protected $_name = [
        'notifySubscriptionStatus' => 'notifySubscriptionStatus',
        'serviceGroupStatus'       => 'serviceGroupStatus',
        'serviceStatus'            => 'serviceStatus',
        'usersStatus'              => 'usersStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifySubscriptionStatus) {
            $res['notifySubscriptionStatus'] = $this->notifySubscriptionStatus;
        }
        if (null !== $this->serviceGroupStatus) {
            $res['serviceGroupStatus'] = $this->serviceGroupStatus;
        }
        if (null !== $this->serviceStatus) {
            $res['serviceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->usersStatus) {
            $res['usersStatus'] = $this->usersStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['notifySubscriptionStatus'])) {
            $model->notifySubscriptionStatus = $map['notifySubscriptionStatus'];
        }
        if (isset($map['serviceGroupStatus'])) {
            $model->serviceGroupStatus = $map['serviceGroupStatus'];
        }
        if (isset($map['serviceStatus'])) {
            $model->serviceStatus = $map['serviceStatus'];
        }
        if (isset($map['usersStatus'])) {
            $model->usersStatus = $map['usersStatus'];
        }

        return $model;
    }
}
