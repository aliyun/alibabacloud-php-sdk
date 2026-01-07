<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForUserResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForUserResponseBody\applications\applicationRoles;

class applications extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var applicationRoles[]
     */
    public $applicationRoles;

    /**
     * @var bool
     */
    public $hasDirectAuthorization;

    /**
     * @var bool
     */
    public $hasInheritAuthorization;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'applicationRoles' => 'ApplicationRoles',
        'hasDirectAuthorization' => 'HasDirectAuthorization',
        'hasInheritAuthorization' => 'HasInheritAuthorization',
    ];

    public function validate()
    {
        if (\is_array($this->applicationRoles)) {
            Model::validateArray($this->applicationRoles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationRoles) {
            if (\is_array($this->applicationRoles)) {
                $res['ApplicationRoles'] = [];
                $n1 = 0;
                foreach ($this->applicationRoles as $item1) {
                    $res['ApplicationRoles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hasDirectAuthorization) {
            $res['HasDirectAuthorization'] = $this->hasDirectAuthorization;
        }

        if (null !== $this->hasInheritAuthorization) {
            $res['HasInheritAuthorization'] = $this->hasInheritAuthorization;
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

        if (isset($map['ApplicationRoles'])) {
            if (!empty($map['ApplicationRoles'])) {
                $model->applicationRoles = [];
                $n1 = 0;
                foreach ($map['ApplicationRoles'] as $item1) {
                    $model->applicationRoles[$n1] = applicationRoles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HasDirectAuthorization'])) {
            $model->hasDirectAuthorization = $map['HasDirectAuthorization'];
        }

        if (isset($map['HasInheritAuthorization'])) {
            $model->hasInheritAuthorization = $map['HasInheritAuthorization'];
        }

        return $model;
    }
}
