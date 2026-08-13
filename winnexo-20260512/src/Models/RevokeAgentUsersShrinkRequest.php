<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class RevokeAgentUsersShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userGroupIdsShrink;

    /**
     * @var string
     */
    public $userIdsShrink;
    protected $_name = [
        'operatingObjectName' => 'operatingObjectName',
        'tenantId' => 'tenantId',
        'userGroupIdsShrink' => 'userGroupIds',
        'userIdsShrink' => 'userIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->userGroupIdsShrink) {
            $res['userGroupIds'] = $this->userGroupIdsShrink;
        }

        if (null !== $this->userIdsShrink) {
            $res['userIds'] = $this->userIdsShrink;
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
        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['userGroupIds'])) {
            $model->userGroupIdsShrink = $map['userGroupIds'];
        }

        if (isset($map['userIds'])) {
            $model->userIdsShrink = $map['userIds'];
        }

        return $model;
    }
}
