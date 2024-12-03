<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Tea\Model;

class CheckInstancePolicyRequest extends Model
{
    /**
     * @description The name of the instance.
     *
     * This parameter is required.
     * @example workshop-bj-ots1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The instance policy in the JSON format.
     *
     * This parameter is required.
     * @example {
     * "Action": [
     * "ots:*"
     * "Resource": [
     * "acs:ots:*:13791xxxxxxxxxxx:instance/myinstance*"
     * "Principal": [
     * "*"
     * }
     * @var string
     */
    public $policy;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'policy'       => 'Policy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckInstancePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        return $model;
    }
}
