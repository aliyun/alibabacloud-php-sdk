<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateIntegrationPolicyResponseBody\policy;

class CreateIntegrationPolicyResponseBody extends Model
{
    /**
     * @var bool
     */
    public $created;

    /**
     * @var policy
     */
    public $policy;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'created' => 'created',
        'policy' => 'policy',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->policy) {
            $this->policy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }

        if (null !== $this->policy) {
            $res['policy'] = null !== $this->policy ? $this->policy->toArray($noStream) : $this->policy;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }

        if (isset($map['policy'])) {
            $model->policy = policy::fromMap($map['policy']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
