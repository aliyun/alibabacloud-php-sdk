<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsListByTypeReportRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class StatisticsListByTypeReportRequest extends Model
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

    /**
     * @example 173xxxx
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'offset'        => 'Offset',
        'reportId'      => 'ReportId',
        'size'          => 'Size',
        'tenantContext' => 'TenantContext',
        'type'          => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StatisticsListByTypeReportRequest
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
