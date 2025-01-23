<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class CreateProjectMemberRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $roleCode;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'projectId'   => 'ProjectId',
        'roleCode'    => 'RoleCode',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->roleCode) {
            $res['RoleCode'] = $this->roleCode;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RoleCode'])) {
            $model->roleCode = $map['RoleCode'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
