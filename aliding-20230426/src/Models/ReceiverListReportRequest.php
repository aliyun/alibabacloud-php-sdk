<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ReceiverListReportRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class ReceiverListReportRequest extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $offset;

    /**
     * @example 173xxxx
     *
     * @var string
     */
    public $reportId;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'offset'        => 'Offset',
        'reportId'      => 'ReportId',
        'size'          => 'Size',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReceiverListReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}