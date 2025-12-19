<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentityData\V20251127\Models;

use AlibabaCloud\Dara\Model;

class GetWorkloadAccessTokenForJWTResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $workloadAccessToken;
    protected $_name = [
        'requestId' => 'RequestId',
        'workloadAccessToken' => 'WorkloadAccessToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WorkloadAccessToken'])) {
            $model->workloadAccessToken = $map['WorkloadAccessToken'];
        }

        return $model;
    }
}
