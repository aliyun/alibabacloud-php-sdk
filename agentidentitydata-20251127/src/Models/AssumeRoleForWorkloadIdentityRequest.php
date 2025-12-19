<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentityData\V20251127\Models;

use AlibabaCloud\Dara\Model;

class AssumeRoleForWorkloadIdentityRequest extends Model
{
    /**
     * @var string
     */
    public $durationSeconds;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $roleSessionName;

    /**
     * @var string
     */
    public $workloadAccessToken;
    protected $_name = [
        'durationSeconds' => 'DurationSeconds',
        'policy' => 'Policy',
        'roleSessionName' => 'RoleSessionName',
        'workloadAccessToken' => 'WorkloadAccessToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->durationSeconds) {
            $res['DurationSeconds'] = $this->durationSeconds;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->roleSessionName) {
            $res['RoleSessionName'] = $this->roleSessionName;
        }

        if (null !== $this->workloadAccessToken) {
            $res['WorkloadAccessToken'] = $this->workloadAccessToken;
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
        if (isset($map['DurationSeconds'])) {
            $model->durationSeconds = $map['DurationSeconds'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['RoleSessionName'])) {
            $model->roleSessionName = $map['RoleSessionName'];
        }

        if (isset($map['WorkloadAccessToken'])) {
            $model->workloadAccessToken = $map['WorkloadAccessToken'];
        }

        return $model;
    }
}
