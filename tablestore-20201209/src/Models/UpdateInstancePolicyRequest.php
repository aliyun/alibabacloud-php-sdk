<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstancePolicyRequest extends Model
{
    /**
     * @description The name of the instance.
     *
     * This parameter is required.
     *
     * @example my-test-12345
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The instance policy in the JSON format.
     *
     * This parameter is required.
     *
     * @example {
     * "Version": "1",
     * "Statement": [
     * {
     * "Action": [
     * "ots:*"
     * ],
     * "Resource": [
     * "acs:ots:*:13791xxxxxxxxxxx:instance/myinstance*"
     * ],
     * "Principal": [
     * "*"
     * ],
     * "Effect": "Allow",
     * "Condition": {
     * "StringEquals": {
     * "ots:TLSVersion": [
     * "1.2"
     * ]
     * },
     * "IpAddress": {
     * "acs:SourceIp": [
     * "192.168.0.1",
     * "172.16.0.1"
     * ]
     * }
     * }
     * }
     * ]
     * }
     *
     * @var string
     */
    public $policy;

    /**
     * @description The version of the instance policy.
     *
     * This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $policyVersion;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'policy' => 'Policy',
        'policyVersion' => 'PolicyVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstancePolicyRequest
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
        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }

        return $model;
    }
}
