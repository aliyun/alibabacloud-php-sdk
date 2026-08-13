<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListAuthorizedAgentsRequest extends Model
{
    /**
     * @var string
     */
    public $permission;

    /**
     * @var int
     */
    public $targetUserId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'permission' => 'permission',
        'targetUserId' => 'targetUserId',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->permission) {
            $res['permission'] = $this->permission;
        }

        if (null !== $this->targetUserId) {
            $res['targetUserId'] = $this->targetUserId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['permission'])) {
            $model->permission = $map['permission'];
        }

        if (isset($map['targetUserId'])) {
            $model->targetUserId = $map['targetUserId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
