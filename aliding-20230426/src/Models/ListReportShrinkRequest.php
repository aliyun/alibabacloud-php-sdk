<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class ListReportShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $cursor;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var int
     */
    public $modifiedEndTime;
    /**
     * @var int
     */
    public $modifiedStartTime;
    /**
     * @var int
     */
    public $size;
    /**
     * @var int
     */
    public $startTime;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
