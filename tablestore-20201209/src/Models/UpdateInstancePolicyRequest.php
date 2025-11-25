<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstancePolicyRequest extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var int
     */
    public $policyVersion;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'policy' => 'Policy',
        'policyVersion' => 'PolicyVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
