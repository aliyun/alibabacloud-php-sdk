<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetSheetContentJobIdShrinkRequest extends Model
{
    /**
     * @example MNDoBb60VLYDGNPytQe7Gzp4JlemrZQ3
     *
     * @var string
     */
    public $dentryUuid;

    /**
     * @example dingTalksheetToxlsx
     *
     * @var string
     */
    public $exportType;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'dentryUuid' => 'DentryUuid',
        'exportType' => 'ExportType',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dentryUuid) {
            $res['DentryUuid'] = $this->dentryUuid;
        }
        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSheetContentJobIdShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DentryUuid'])) {
            $model->dentryUuid = $map['DentryUuid'];
        }
        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
