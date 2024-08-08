<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetDocContentTakIdShrinkRequest extends Model
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
     * @var bool
     */
    public $generateCp;

    /**
     * @example markdown
     *
     * @var string
     */
    public $targetFormat;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'dentryUuid'          => 'DentryUuid',
        'generateCp'          => 'GenerateCp',
        'targetFormat'        => 'TargetFormat',
        'tenantContextShrink' => 'TenantContext',
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
        if (null !== $this->generateCp) {
            $res['GenerateCp'] = $this->generateCp;
        }
        if (null !== $this->targetFormat) {
            $res['TargetFormat'] = $this->targetFormat;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDocContentTakIdShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DentryUuid'])) {
            $model->dentryUuid = $map['DentryUuid'];
        }
        if (isset($map['GenerateCp'])) {
            $model->generateCp = $map['GenerateCp'];
        }
        if (isset($map['TargetFormat'])) {
            $model->targetFormat = $map['TargetFormat'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
