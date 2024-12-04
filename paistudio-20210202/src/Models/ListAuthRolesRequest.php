<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class ListAuthRolesRequest extends Model
{
    /**
     * @example true
     *
     * @var string
     */
    public $isGenerateToken;

    /**
     * @example 12345
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'isGenerateToken' => 'IsGenerateToken',
        'workspaceId'     => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isGenerateToken) {
            $res['IsGenerateToken'] = $this->isGenerateToken;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAuthRolesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsGenerateToken'])) {
            $model->isGenerateToken = $map['IsGenerateToken'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
