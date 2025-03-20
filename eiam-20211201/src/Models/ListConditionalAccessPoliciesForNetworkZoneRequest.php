<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ListConditionalAccessPoliciesForNetworkZoneRequest extends Model
{
    /**
     * @description Instance ID.
     *
     * This parameter is required.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Application ID associated with the conditional access policy
     *
     * This parameter is required.
     *
     * @example app_11111
     *
     * @var string
     */
    public $networkZoneId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'networkZoneId' => 'NetworkZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->networkZoneId) {
            $res['NetworkZoneId'] = $this->networkZoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConditionalAccessPoliciesForNetworkZoneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NetworkZoneId'])) {
            $model->networkZoneId = $map['NetworkZoneId'];
        }

        return $model;
    }
}
