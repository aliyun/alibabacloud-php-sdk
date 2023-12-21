<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\Tea\Model;

class CreatePipelineRequest extends Model
{
    /**
     * @example apiVersion: "core/v1"*********
     *
     * @var string
     */
    public $manifest;

    /**
     * @example 72***
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'manifest'    => 'Manifest',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->manifest) {
            $res['Manifest'] = $this->manifest;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePipelineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Manifest'])) {
            $model->manifest = $map['Manifest'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
