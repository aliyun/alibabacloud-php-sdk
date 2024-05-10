<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDocContentRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class GetDocContentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example dentry_uuid
     *
     * @var string
     */
    public $dentryUuid;

    /**
     * @example markdown
     *
     * @var string
     */
    public $targetFormat;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $userToken;
    protected $_name = [
        'dentryUuid'    => 'DentryUuid',
        'targetFormat'  => 'TargetFormat',
        'tenantContext' => 'TenantContext',
        'userToken'     => 'userToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dentryUuid) {
            $res['DentryUuid'] = $this->dentryUuid;
        }
        if (null !== $this->targetFormat) {
            $res['TargetFormat'] = $this->targetFormat;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->userToken) {
            $res['userToken'] = $this->userToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDocContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DentryUuid'])) {
            $model->dentryUuid = $map['DentryUuid'];
        }
        if (isset($map['TargetFormat'])) {
            $model->targetFormat = $map['TargetFormat'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['userToken'])) {
            $model->userToken = $map['userToken'];
        }

        return $model;
    }
}
