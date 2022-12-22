<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\Tea\Model;

class CancelVideoTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appShrink;

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
        'appShrink' => 'App',
        'taskUuid'  => 'TaskUuid',
        'tenantId'  => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appShrink) {
            $res['App'] = $this->appShrink;
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
     * @return CancelVideoTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->appShrink = $map['App'];
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
