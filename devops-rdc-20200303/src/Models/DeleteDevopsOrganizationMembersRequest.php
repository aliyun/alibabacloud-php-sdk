<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class DeleteDevopsOrganizationMembersRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $realPk;
    protected $_name = [
        'orgId'  => 'OrgId',
        'userId' => 'UserId',
        'realPk' => 'RealPk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->realPk) {
            $res['RealPk'] = $this->realPk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDevopsOrganizationMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['RealPk'])) {
            $model->realPk = $map['RealPk'];
        }

        return $model;
    }
}
