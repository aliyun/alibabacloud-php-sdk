<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\SDK\Avatar\V20220130\Models\CancelVideoTaskRequest\app;
use AlibabaCloud\Tea\Model;

class CancelVideoTaskRequest extends Model
{
    /**
     * @var app
     */
    public $app;

    /**
     * @example xxxx-xxxx-xxxx
     *
     * @var string
     */
    public $taskUuid;

    /**
     * @example xxxxx
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'app'      => 'App',
        'taskUuid' => 'TaskUuid',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = null !== $this->app ? $this->app->toMap() : null;
        }
        if (null !== $this->taskUuid) {
            $res['TaskUuid'] = $this->taskUuid;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelVideoTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = app::fromMap($map['App']);
        }
        if (isset($map['TaskUuid'])) {
            $model->taskUuid = $map['TaskUuid'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
