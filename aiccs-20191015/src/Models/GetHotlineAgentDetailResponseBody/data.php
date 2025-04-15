<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineAgentDetailResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $agentId;

    /**
     * @var int
     */
    public $agentStatus;

    /**
     * @var string
     */
    public $agentStatusCode;

    /**
     * @var bool
     */
    public $assigned;

    /**
     * @var int
     */
    public $restType;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentStatus' => 'AgentStatus',
        'agentStatusCode' => 'AgentStatusCode',
        'assigned' => 'Assigned',
        'restType' => 'RestType',
        'tenantId' => 'TenantId',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }

        if (null !== $this->agentStatusCode) {
            $res['AgentStatusCode'] = $this->agentStatusCode;
        }

        if (null !== $this->assigned) {
            $res['Assigned'] = $this->assigned;
        }

        if (null !== $this->restType) {
            $res['RestType'] = $this->restType;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }

        if (isset($map['AgentStatusCode'])) {
            $model->agentStatusCode = $map['AgentStatusCode'];
        }

        if (isset($map['Assigned'])) {
            $model->assigned = $map['Assigned'];
        }

        if (isset($map['RestType'])) {
            $model->restType = $map['RestType'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
