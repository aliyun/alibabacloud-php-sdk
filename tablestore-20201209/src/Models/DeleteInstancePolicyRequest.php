<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstancePolicyRequest extends Model
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
        'policyVersion' => 'PolicyVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteInstancePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }

        return $model;
    }
}
