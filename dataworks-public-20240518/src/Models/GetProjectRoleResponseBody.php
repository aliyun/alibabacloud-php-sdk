<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProjectRoleResponseBody\projectRole;

class GetProjectRoleResponseBody extends Model
{
    /**
     * @var projectRole
     */
    public $projectRole;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'projectRole' => 'ProjectRole',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->projectRole) {
            $this->projectRole->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectRole) {
            $res['ProjectRole'] = null !== $this->projectRole ? $this->projectRole->toArray($noStream) : $this->projectRole;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ProjectRole'])) {
            $model->projectRole = projectRole::fromMap($map['ProjectRole']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
