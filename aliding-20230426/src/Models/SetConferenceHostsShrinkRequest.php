<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class SetConferenceHostsShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example add
     *
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @description This parameter is required.
     *
     * @example [ "012345"]
     *
     * @var string
     */
    public $userIdsShrink;

    /**
     * @description This parameter is required.
     *
     * @example 607452e01401526ee39609e1
     *
     * @var string
     */
    public $conferenceId;
    protected $_name = [
        'operationType' => 'OperationType',
        'tenantContextShrink' => 'TenantContext',
        'userIdsShrink' => 'UserIds',
        'conferenceId' => 'conferenceId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SetConferenceHostsShrinkRequest
     */
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
