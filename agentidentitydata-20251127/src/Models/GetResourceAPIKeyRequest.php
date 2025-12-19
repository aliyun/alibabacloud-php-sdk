<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentityData\V20251127\Models;

use AlibabaCloud\Dara\Model;

class GetResourceAPIKeyRequest extends Model
{
    /**
     * @var string
     */
    public $resourceCredentialProviderName;

    /**
     * @var string
     */
    public $workloadAccessToken;
    protected $_name = [
        'resourceCredentialProviderName' => 'ResourceCredentialProviderName',
        'workloadAccessToken' => 'WorkloadAccessToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceCredentialProviderName) {
            $res['ResourceCredentialProviderName'] = $this->resourceCredentialProviderName;
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
        if (isset($map['ResourceCredentialProviderName'])) {
            $model->resourceCredentialProviderName = $map['ResourceCredentialProviderName'];
        }

        if (isset($map['WorkloadAccessToken'])) {
            $model->workloadAccessToken = $map['WorkloadAccessToken'];
        }

        return $model;
    }
}
