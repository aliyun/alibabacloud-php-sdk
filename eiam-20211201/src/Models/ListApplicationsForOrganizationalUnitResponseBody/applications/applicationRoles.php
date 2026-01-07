<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForOrganizationalUnitResponseBody\applications;

use AlibabaCloud\Dara\Model;

class applicationRoles extends Model
{
    /**
     * @var string
     */
    public $applicationRoleId;
    protected $_name = [
        'applicationRoleId' => 'ApplicationRoleId',
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

        return $model;
    }
}
