<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentityData\V20251127\Models;

use AlibabaCloud\Dara\Model;

class GetWorkloadAccessTokenForUserIdRequest extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workloadIdentityName;
    protected $_name = [
        'userId' => 'UserId',
        'workloadIdentityName' => 'WorkloadIdentityName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['WorkloadIdentityName'])) {
            $model->workloadIdentityName = $map['WorkloadIdentityName'];
        }

        return $model;
    }
}
