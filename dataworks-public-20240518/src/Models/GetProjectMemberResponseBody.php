<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProjectMemberResponseBody\projectMember;

class GetProjectMemberResponseBody extends Model
{
    /**
     * @var projectMember
     */
    public $projectMember;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'projectMember' => 'ProjectMember',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->projectMember) {
            $this->projectMember->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectMember) {
            $res['ProjectMember'] = null !== $this->projectMember ? $this->projectMember->toArray($noStream) : $this->projectMember;
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
        if (isset($map['ProjectMember'])) {
            $model->projectMember = projectMember::fromMap($map['ProjectMember']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
