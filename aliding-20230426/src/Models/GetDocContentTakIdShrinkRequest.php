<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetDocContentTakIdShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dentryUuid;

    /**
     * @var bool
     */
    public $generateCp;

    /**
     * @var string
     */
    public $targetFormat;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'dentryUuid' => 'DentryUuid',
        'generateCp' => 'GenerateCp',
        'targetFormat' => 'TargetFormat',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
