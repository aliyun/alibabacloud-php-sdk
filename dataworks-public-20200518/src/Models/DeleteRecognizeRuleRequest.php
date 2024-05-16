<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteRecognizeRuleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 27f5f5e2-ec60-4567-b1e4-779ac3681024
     *
     * @var string
     */
    public $sensitiveId;

    /**
     * @description This parameter is required.
     *
     * @example 10241024
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'sensitiveId' => 'SensitiveId',
        'tenantId'    => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sensitiveId) {
            $res['SensitiveId'] = $this->sensitiveId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRecognizeRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SensitiveId'])) {
            $model->sensitiveId = $map['SensitiveId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
