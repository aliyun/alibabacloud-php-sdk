<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class OpenApiUpdateActiveSceneRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $mpaasMqcpOpenApiUpdateActiveSceneReqJsonStr;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId'                                       => 'AppId',
        'mpaasMqcpOpenApiUpdateActiveSceneReqJsonStr' => 'MpaasMqcpOpenApiUpdateActiveSceneReqJsonStr',
        'tenantId'                                    => 'TenantId',
        'workspaceId'                                 => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->mpaasMqcpOpenApiUpdateActiveSceneReqJsonStr) {
            $res['MpaasMqcpOpenApiUpdateActiveSceneReqJsonStr'] = $this->mpaasMqcpOpenApiUpdateActiveSceneReqJsonStr;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenApiUpdateActiveSceneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['MpaasMqcpOpenApiUpdateActiveSceneReqJsonStr'])) {
            $model->mpaasMqcpOpenApiUpdateActiveSceneReqJsonStr = $map['MpaasMqcpOpenApiUpdateActiveSceneReqJsonStr'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
