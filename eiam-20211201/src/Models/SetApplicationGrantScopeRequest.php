<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class SetApplicationGrantScopeRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string[]
     */
    public $grantScopes;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'grantScopes' => 'GrantScopes',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->grantScopes)) {
            Model::validateArray($this->grantScopes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->grantScopes) {
            if (\is_array($this->grantScopes)) {
                $res['GrantScopes'] = [];
                $n1 = 0;
                foreach ($this->grantScopes as $item1) {
                    $res['GrantScopes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['GrantScopes'])) {
            if (!empty($map['GrantScopes'])) {
                $model->grantScopes = [];
                $n1 = 0;
                foreach ($map['GrantScopes'] as $item1) {
                    $model->grantScopes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
