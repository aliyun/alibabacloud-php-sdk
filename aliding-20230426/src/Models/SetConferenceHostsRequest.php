<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetConferenceHostsRequest\tenantContext;

class SetConferenceHostsRequest extends Model
{
    /**
     * @var string
     */
    public $operationType;
    /**
     * @var tenantContext
     */
    public $tenantContext;
    /**
     * @var string[]
     */
    public $userIds;
    /**
     * @var string
     */
    public $conferenceId;
    protected $_name = [
        'operationType' => 'OperationType',
        'tenantContext' => 'TenantContext',
        'userIds'       => 'UserIds',
        'conferenceId'  => 'conferenceId',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        if (\is_array($this->userIds)) {
            Model::validateArray($this->userIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->userIds) {
            if (\is_array($this->userIds)) {
                $res['UserIds'] = [];
                $n1             = 0;
                foreach ($this->userIds as $item1) {
                    $res['UserIds'][$n1++] = $item1;
                }
            }
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
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = [];
                $n1             = 0;
                foreach ($map['UserIds'] as $item1) {
                    $model->userIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['conferenceId'])) {
            $model->conferenceId = $map['conferenceId'];
        }

        return $model;
    }
}
