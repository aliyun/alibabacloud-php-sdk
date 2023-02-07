<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineAgentDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2235****
     *
     * @var int
     */
    public $agentId;

    /**
     * @example 1
     *
     * @var int
     */
    public $agentStatus;

    /**
     * @example AgentCheckout
     *
     * @var string
     */
    public $agentStatusCode;

    /**
     * @example false
     *
     * @var bool
     */
    public $assigned;

    /**
     * @example 1
     *
     * @var int
     */
    public $restType;

    /**
     * @example ccc_xp_pre-cn-***
     *
     * @var int
     */
    public $tenantId;

    /**
     * @example dnthF_oinHg7JMJDmKqex3Ux****
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'agentId'         => 'AgentId',
        'agentStatus'     => 'AgentStatus',
        'agentStatusCode' => 'AgentStatusCode',
        'assigned'        => 'Assigned',
        'restType'        => 'RestType',
        'tenantId'        => 'TenantId',
        'token'           => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
