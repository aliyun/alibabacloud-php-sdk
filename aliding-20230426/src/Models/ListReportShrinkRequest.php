<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class ListReportShrinkRequest extends Model
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
     * @example 1507564800000
     *
     * @var int
     */
    public $modifiedEndTime;

    /**
     * @example 1507564800000
     *
     * @var int
     */
    public $modifiedStartTime;

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
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'cursor'              => 'Cursor',
        'endTime'             => 'EndTime',
        'modifiedEndTime'     => 'ModifiedEndTime',
        'modifiedStartTime'   => 'ModifiedStartTime',
        'size'                => 'Size',
        'startTime'           => 'StartTime',
        'templateName'        => 'TemplateName',
        'tenantContextShrink' => 'TenantContext',
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
        if (null !== $this->modifiedEndTime) {
            $res['ModifiedEndTime'] = $this->modifiedEndTime;
        }
        if (null !== $this->modifiedStartTime) {
            $res['ModifiedStartTime'] = $this->modifiedStartTime;
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
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListReportShrinkRequest
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
        if (isset($map['ModifiedEndTime'])) {
            $model->modifiedEndTime = $map['ModifiedEndTime'];
        }
        if (isset($map['ModifiedStartTime'])) {
            $model->modifiedStartTime = $map['ModifiedStartTime'];
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
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
