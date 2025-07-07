<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountQueryAccountGrantedRolesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bizRoleCode;

    /**
     * @var string
     */
    public $bizRoleName;
    protected $_name = [
        'bizRoleCode' => 'BizRoleCode',
        'bizRoleName' => 'BizRoleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizRoleCode) {
            $res['BizRoleCode'] = $this->bizRoleCode;
        }

        if (null !== $this->bizRoleName) {
            $res['BizRoleName'] = $this->bizRoleName;
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
        if (isset($map['BizRoleCode'])) {
            $model->bizRoleCode = $map['BizRoleCode'];
        }

        if (isset($map['BizRoleName'])) {
            $model->bizRoleName = $map['BizRoleName'];
        }

        return $model;
    }
}
