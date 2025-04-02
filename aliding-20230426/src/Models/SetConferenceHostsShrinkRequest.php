<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class SetConferenceHostsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var string
     */
    public $userIdsShrink;

    /**
     * @var string
     */
    public $conferenceId;
    protected $_name = [
        'operationType' => 'OperationType',
        'tenantContextShrink' => 'TenantContext',
        'userIdsShrink' => 'UserIds',
        'conferenceId' => 'conferenceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        if (null !== $this->userIdsShrink) {
            $res['UserIds'] = $this->userIdsShrink;
        }

        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
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
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['UserIds'])) {
            $model->userIdsShrink = $map['UserIds'];
        }

        if (isset($map['conferenceId'])) {
            $model->conferenceId = $map['conferenceId'];
        }

        return $model;
    }
}
