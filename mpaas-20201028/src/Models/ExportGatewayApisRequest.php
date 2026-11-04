<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;

class ExportGatewayApisRequest extends Model
{
    /**
     * @var int[]
     */
    public $apiIds;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'apiIds' => 'ApiIds',
        'appId' => 'AppId',
        'tenantId' => 'TenantId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->apiIds)) {
            Model::validateArray($this->apiIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiIds) {
            if (\is_array($this->apiIds)) {
                $res['ApiIds'] = [];
                $n1 = 0;
                foreach ($this->apiIds as $item1) {
                    $res['ApiIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ApiIds'])) {
            if (!empty($map['ApiIds'])) {
                $model->apiIds = [];
                $n1 = 0;
                foreach ($map['ApiIds'] as $item1) {
                    $model->apiIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
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
