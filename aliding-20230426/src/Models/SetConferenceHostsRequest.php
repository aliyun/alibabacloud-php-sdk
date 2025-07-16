<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\SetConferenceHostsRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class SetConferenceHostsRequest extends Model
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
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @description This parameter is required.
     *
     * @example [ "012345"]
     *
     * @var string[]
     */
    public $userIds;

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
        'tenantContext' => 'TenantContext',
        'userIds' => 'UserIds',
        'conferenceId' => 'conferenceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }
        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetConferenceHostsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = $map['UserIds'];
            }
        }
        if (isset($map['conferenceId'])) {
            $model->conferenceId = $map['conferenceId'];
        }

        return $model;
    }
}
