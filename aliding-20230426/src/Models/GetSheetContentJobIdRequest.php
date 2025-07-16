<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSheetContentJobIdRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class GetSheetContentJobIdRequest extends Model
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
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'dentryUuid' => 'DentryUuid',
        'exportType' => 'ExportType',
        'tenantContext' => 'TenantContext',
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
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSheetContentJobIdRequest
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
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
