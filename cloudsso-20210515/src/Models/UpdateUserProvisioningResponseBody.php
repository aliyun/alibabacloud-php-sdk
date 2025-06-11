<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserProvisioningResponseBody\userProvisioning;

class UpdateUserProvisioningResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userProvisioning
     */
    public $userProvisioning;
    protected $_name = [
        'requestId' => 'RequestId',
        'userProvisioning' => 'UserProvisioning',
    ];

    public function validate()
    {
        if (null !== $this->userProvisioning) {
            $this->userProvisioning->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userProvisioning) {
            $res['UserProvisioning'] = null !== $this->userProvisioning ? $this->userProvisioning->toArray($noStream) : $this->userProvisioning;
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

        if (isset($map['UserProvisioning'])) {
            $model->userProvisioning = userProvisioning::fromMap($map['UserProvisioning']);
        }

        return $model;
    }
}
