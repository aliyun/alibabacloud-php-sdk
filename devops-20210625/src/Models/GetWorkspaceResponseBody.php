<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkspaceResponseBody\workspace;
use AlibabaCloud\Tea\Model;

class GetWorkspaceResponseBody extends Model
{
    /**
     * @example InvalidWorkspace.NotFound
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example The workspace is not found.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example F7B85D1B-D1C2-140F-A039-341859F130B9
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @var workspace
     */
    public $workspace;
    protected $_name = [
        'errorCode'    => 'errorCode',
        'errorMessage' => 'errorMessage',
        'requestId'    => 'requestId',
        'success'      => 'success',
        'workspace'    => 'workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = null !== $this->workspace ? $this->workspace->toMap() : null;
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
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['workspace'])) {
            $model->workspace = workspace::fromMap($map['workspace']);
        }

        return $model;
    }
}
