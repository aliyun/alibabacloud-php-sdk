<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportRequest\tenantContext;

class CommentListReportRequest extends Model
{
    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'offset' => 'Offset',
        'reportId' => 'ReportId',
        'size' => 'Size',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
