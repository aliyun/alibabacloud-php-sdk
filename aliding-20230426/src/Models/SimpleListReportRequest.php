<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\SimpleListReportRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class SimpleListReportRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $cursor;

    /**
     * @description This parameter is required.
     *
     * @example 1507564800000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @description This parameter is required.
     *
     * @example 1507564800000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 我管理的模版
     *
     * @var string
     */
    public $templateName;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'cursor'        => 'Cursor',
        'endTime'       => 'EndTime',
        'size'          => 'Size',
        'startTime'     => 'StartTime',
        'templateName'  => 'TemplateName',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cursor) {
            $res['Cursor'] = $this->cursor;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SimpleListReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cursor'])) {
            $model->cursor = $map['Cursor'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
