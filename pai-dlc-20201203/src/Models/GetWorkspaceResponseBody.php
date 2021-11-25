<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetWorkspaceResponseBody extends Model
{
    /**
     * @description 是否是当前工作空间的管理员
     *
     * @var bool
     */
    public $isWorkspaceAdmin;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 工作空间
     *
     * @var Workspace
     */
    public $workspace;
    protected $_name = [
        'isWorkspaceAdmin' => 'IsWorkspaceAdmin',
        'requestId'        => 'RequestId',
        'workspace'        => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isWorkspaceAdmin) {
            $res['IsWorkspaceAdmin'] = $this->isWorkspaceAdmin;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = null !== $this->workspace ? $this->workspace->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorkspaceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsWorkspaceAdmin'])) {
            $model->isWorkspaceAdmin = $map['IsWorkspaceAdmin'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = Workspace::fromMap($map['Workspace']);
        }

        return $model;
    }
}
