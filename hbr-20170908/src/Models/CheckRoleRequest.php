<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class CheckRoleRequest extends Model
{
    /**
     * @example OssRole
     *
     * @var string
     */
    public $checkRoleType;

    /**
     * @example BackupRole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @example 158975xxxxx4625
     *
     * @var int
     */
    public $crossAccountUserId;
    protected $_name = [
        'checkRoleType'        => 'CheckRoleType',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountUserId'   => 'CrossAccountUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkRoleType) {
            $res['CheckRoleType'] = $this->checkRoleType;
        }
        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }
        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckRoleType'])) {
            $model->checkRoleType = $map['CheckRoleType'];
        }
        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }
        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }

        return $model;
    }
}
