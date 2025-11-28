<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\DescribeAccountRoleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $authorizedBaaS;

    /**
     * @var string
     */
    public $roleType;
    protected $_name = [
        'authorizedBaaS' => 'AuthorizedBaaS',
        'roleType' => 'RoleType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizedBaaS) {
            $res['AuthorizedBaaS'] = $this->authorizedBaaS;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
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
        if (isset($map['AuthorizedBaaS'])) {
            $model->authorizedBaaS = $map['AuthorizedBaaS'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        return $model;
    }
}
