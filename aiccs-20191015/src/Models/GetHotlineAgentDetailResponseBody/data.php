<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineAgentDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $agentStatusCode;

    /**
     * @var string
     */
    public $token;

    /**
     * @var int
     */
    public $agentId;

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
    public $agentStatus;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'agentStatusCode' => 'AgentStatusCode',
        'token'           => 'Token',
        'agentId'         => 'AgentId',
        'assigned'        => 'Assigned',
        'restType'        => 'RestType',
        'agentStatus'     => 'AgentStatus',
        'tenantId'        => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentStatusCode) {
            $res['AgentStatusCode'] = $this->agentStatusCode;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->assigned) {
            $res['Assigned'] = $this->assigned;
        }
        if (null !== $this->restType) {
            $res['RestType'] = $this->restType;
        }
        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['AgentStatusCode'])) {
            $model->agentStatusCode = $map['AgentStatusCode'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['Assigned'])) {
            $model->assigned = $map['Assigned'];
        }
        if (isset($map['RestType'])) {
            $model->restType = $map['RestType'];
        }
        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
