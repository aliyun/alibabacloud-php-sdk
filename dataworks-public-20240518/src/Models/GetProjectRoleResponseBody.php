<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProjectRoleResponseBody\projectRole;
use AlibabaCloud\Tea\Model;

class GetProjectRoleResponseBody extends Model
{
    /**
     * @description The role in the DataWorks workspace.
     *
     * @var projectRole
     */
    public $projectRole;

    /**
     * @description The request ID.
     *
     * @example 82F28E60-CF48-5EDF-AB25-D806847B97D1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'projectRole' => 'ProjectRole',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectRole) {
            $res['ProjectRole'] = null !== $this->projectRole ? $this->projectRole->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectRoleResponseBody
     */
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
