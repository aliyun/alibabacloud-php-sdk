<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentityData\V20251127\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\GetWorkloadAccessTokenForJWTResponseBody\userContext;

class GetWorkloadAccessTokenForJWTResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userContext
     */
    public $userContext;

    /**
     * @var string
     */
    public $workloadAccessToken;

    /**
     * @var string
     */
    public $workloadIdentityArn;
    protected $_name = [
        'requestId' => 'RequestId',
        'userContext' => 'UserContext',
        'workloadAccessToken' => 'WorkloadAccessToken',
        'workloadIdentityArn' => 'WorkloadIdentityArn',
    ];

    public function validate()
    {
        if (null !== $this->userContext) {
            $this->userContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userContext) {
            $res['UserContext'] = null !== $this->userContext ? $this->userContext->toArray($noStream) : $this->userContext;
        }

        if (null !== $this->workloadAccessToken) {
            $res['WorkloadAccessToken'] = $this->workloadAccessToken;
        }

        if (null !== $this->workloadIdentityArn) {
            $res['WorkloadIdentityArn'] = $this->workloadIdentityArn;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserContext'])) {
            $model->userContext = userContext::fromMap($map['UserContext']);
        }

        if (isset($map['WorkloadAccessToken'])) {
            $model->workloadAccessToken = $map['WorkloadAccessToken'];
        }

        if (isset($map['WorkloadIdentityArn'])) {
            $model->workloadIdentityArn = $map['WorkloadIdentityArn'];
        }

        return $model;
    }
}
