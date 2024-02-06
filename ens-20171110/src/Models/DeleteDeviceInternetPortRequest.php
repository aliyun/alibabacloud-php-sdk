<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteDeviceInternetPortRequest extends Model
{
    /**
     * @description The ID of the instance. You can specify the ID of the server or container.
     *
     * @example i-5scdmgpdegymqyugf85q66l1a
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
     * @example DNAT
     *
     * @var string
     */
    public $natType;

    /**
     * @description The ID of the rule.
     *
     * @example snat-5rfzxah5gzfo869fl6epvon3y
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
     * @return DeleteDeviceInternetPortRequest
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
