<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportUnReadCountRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class GetReportUnReadCountRequest extends Model
{
    /**
     * @example null
     *
     * @var mixed[]
     */
    public $request;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'request' => 'Request',
        'tenantContext' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->request) {
            $res['Request'] = $this->request;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetReportUnReadCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Request'])) {
            $model->request = $map['Request'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
