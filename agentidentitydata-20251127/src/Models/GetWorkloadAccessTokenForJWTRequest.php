<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentityData\V20251127\Models;

use AlibabaCloud\Dara\Model;

class GetWorkloadAccessTokenForJWTRequest extends Model
{
    /**
     * @var string
     */
    public $userToken;

    /**
     * @var string
     */
    public $workloadIdentityName;
    protected $_name = [
        'userToken' => 'UserToken',
        'workloadIdentityName' => 'WorkloadIdentityName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userToken) {
            $res['UserToken'] = $this->userToken;
        }

        if (null !== $this->workloadIdentityName) {
            $res['WorkloadIdentityName'] = $this->workloadIdentityName;
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
        if (isset($map['UserToken'])) {
            $model->userToken = $map['UserToken'];
        }

        if (isset($map['WorkloadIdentityName'])) {
            $model->workloadIdentityName = $map['WorkloadIdentityName'];
        }

        return $model;
    }
}
