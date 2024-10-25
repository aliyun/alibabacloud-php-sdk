<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProjectMemberResponseBody\projectMember;
use AlibabaCloud\Tea\Model;

class GetProjectMemberResponseBody extends Model
{
    /**
     * @var projectMember
     */
    public $projectMember;

    /**
     * @example 8abcb91f-d266-4073-b907-2ed670378ed1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'projectMember' => 'ProjectMember',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectMember) {
            $res['ProjectMember'] = null !== $this->projectMember ? $this->projectMember->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectMemberResponseBody
     */
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
