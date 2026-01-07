<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForUserResponseBody\applications;

use AlibabaCloud\Dara\Model;

class applicationRoles extends Model
{
    /**
     * @var string
     */
    public $applicationRoleId;

    /**
     * @var bool
     */
    public $hasDirectAuthorization;

    /**
     * @var bool
     */
    public $hasInheritAuthorization;
    protected $_name = [
        'applicationRoleId' => 'ApplicationRoleId',
        'hasDirectAuthorization' => 'HasDirectAuthorization',
        'hasInheritAuthorization' => 'HasInheritAuthorization',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationRoleId) {
            $res['ApplicationRoleId'] = $this->applicationRoleId;
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
        if (isset($map['ApplicationRoleId'])) {
            $model->applicationRoleId = $map['ApplicationRoleId'];
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
