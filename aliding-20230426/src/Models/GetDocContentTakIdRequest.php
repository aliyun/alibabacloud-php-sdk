<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDocContentTakIdRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class GetDocContentTakIdRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example qnYMoO1rWxrkmoj2I5L2PYkoJ47Z3je9
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
    protected $_name = [
        'dentryUuid'    => 'DentryUuid',
        'targetFormat'  => 'TargetFormat',
        'tenantContext' => 'TenantContext',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDocContentTakIdRequest
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

        return $model;
    }
}
