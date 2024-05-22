<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceInternetPortRequest extends Model
{
    /**
     * @description The ID of the instance. You can specify the ID of the server or container. You can specify only one ID.
     *
     * This parameter is required.
     * @example i-5s6xbnx9srb3vm6tp9hg9o64e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the NAT gateway. The value must be of the enumerated data type. Valid values:
     *
     *   SNAT
     *   DNAT
     *
     * This parameter is required.
     * @example DNAT
     *
     * @var string
     */
    public $natType;

    /**
     * @description The ID of the rule. If you leave this parameter empty, all rules are queried.
     *
     * @example snat-5ref5fc1l1xgqnpjzrtw1hw5a
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'natType'    => 'NatType',
        'ruleId'     => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->natType) {
            $res['NatType'] = $this->natType;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceInternetPortRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NatType'])) {
            $model->natType = $map['NatType'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
