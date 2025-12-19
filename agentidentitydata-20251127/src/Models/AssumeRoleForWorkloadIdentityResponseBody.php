<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentityData\V20251127\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\AssumeRoleForWorkloadIdentityResponseBody\assumedRoleUser;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\AssumeRoleForWorkloadIdentityResponseBody\credentials;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\AssumeRoleForWorkloadIdentityResponseBody\workloadContextInfo;

class AssumeRoleForWorkloadIdentityResponseBody extends Model
{
    /**
     * @var assumedRoleUser
     */
    public $assumedRoleUser;

    /**
     * @var credentials
     */
    public $credentials;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var workloadContextInfo
     */
    public $workloadContextInfo;
    protected $_name = [
        'assumedRoleUser' => 'AssumedRoleUser',
        'credentials' => 'Credentials',
        'requestId' => 'RequestId',
        'workloadContextInfo' => 'WorkloadContextInfo',
    ];

    public function validate()
    {
        if (null !== $this->assumedRoleUser) {
            $this->assumedRoleUser->validate();
        }
        if (null !== $this->credentials) {
            $this->credentials->validate();
        }
        if (null !== $this->workloadContextInfo) {
            $this->workloadContextInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assumedRoleUser) {
            $res['AssumedRoleUser'] = null !== $this->assumedRoleUser ? $this->assumedRoleUser->toArray($noStream) : $this->assumedRoleUser;
        }

        if (null !== $this->credentials) {
            $res['Credentials'] = null !== $this->credentials ? $this->credentials->toArray($noStream) : $this->credentials;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->workloadContextInfo) {
            $res['WorkloadContextInfo'] = null !== $this->workloadContextInfo ? $this->workloadContextInfo->toArray($noStream) : $this->workloadContextInfo;
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
        if (isset($map['AssumedRoleUser'])) {
            $model->assumedRoleUser = assumedRoleUser::fromMap($map['AssumedRoleUser']);
        }

        if (isset($map['Credentials'])) {
            $model->credentials = credentials::fromMap($map['Credentials']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WorkloadContextInfo'])) {
            $model->workloadContextInfo = workloadContextInfo::fromMap($map['WorkloadContextInfo']);
        }

        return $model;
    }
}
