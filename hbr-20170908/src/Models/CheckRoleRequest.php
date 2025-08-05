<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class CheckRoleRequest extends Model
{
    /**
     * @var string
     */
    public $checkRoleType;

    /**
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @var int
     */
    public $crossAccountUserId;
    protected $_name = [
        'checkRoleType' => 'CheckRoleType',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountUserId' => 'CrossAccountUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
