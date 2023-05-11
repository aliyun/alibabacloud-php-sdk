<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ModifyApiDatasourceParametersRequest extends Model
{
    /**
     * @example b66a66de51f24d149116c17718138194
     *
     * @var string
     */
    public $apiId;

    /**
     * @example [{"name":"token","value":"xxxxxxxxxxxx"},{"name":"pageSize","value":100}]
     *
     * @var string
     */
    public $parameters;

    /**
     * @example 726bee5a-****-43e1-9a8e-b550f0120f35
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'apiId'       => 'ApiId',
        'parameters'  => 'Parameters',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApiDatasourceParametersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
