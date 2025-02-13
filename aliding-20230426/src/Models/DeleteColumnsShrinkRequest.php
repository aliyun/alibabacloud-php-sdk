<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class DeleteColumnsShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $column;
    /**
     * @var int
     */
    public $columnCount;
    /**
     * @var string
     */
    public $sheetId;
    /**
     * @var string
     */
    public $tenantContextShrink;
    /**
     * @var string
     */
    public $workbookId;
    protected $_name = [
        'column'              => 'Column',
        'columnCount'         => 'ColumnCount',
        'sheetId'             => 'SheetId',
        'tenantContextShrink' => 'TenantContext',
        'workbookId'          => 'WorkbookId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->column) {
            $res['Column'] = $this->column;
        }

        if (null !== $this->columnCount) {
            $res['ColumnCount'] = $this->columnCount;
        }

        if (null !== $this->sheetId) {
            $res['SheetId'] = $this->sheetId;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        if (null !== $this->workbookId) {
            $res['WorkbookId'] = $this->workbookId;
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
        if (isset($map['Column'])) {
            $model->column = $map['Column'];
        }

        if (isset($map['ColumnCount'])) {
            $model->columnCount = $map['ColumnCount'];
        }

        if (isset($map['SheetId'])) {
            $model->sheetId = $map['SheetId'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['WorkbookId'])) {
            $model->workbookId = $map['WorkbookId'];
        }

        return $model;
    }
}
