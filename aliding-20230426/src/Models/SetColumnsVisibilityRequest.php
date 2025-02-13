<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetColumnsVisibilityRequest\tenantContext;

class SetColumnsVisibilityRequest extends Model
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
     * @var tenantContext
     */
    public $tenantContext;
    /**
     * @var string
     */
    public $visibility;
    /**
     * @var string
     */
    public $workbookId;
    protected $_name = [
        'column'        => 'Column',
        'columnCount'   => 'ColumnCount',
        'sheetId'       => 'SheetId',
        'tenantContext' => 'TenantContext',
        'visibility'    => 'Visibility',
        'workbookId'    => 'WorkbookId',
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
        if (null !== $this->column) {
            $res['Column'] = $this->column;
        }

        if (null !== $this->columnCount) {
            $res['ColumnCount'] = $this->columnCount;
        }

        if (null !== $this->sheetId) {
            $res['SheetId'] = $this->sheetId;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
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
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        if (isset($map['WorkbookId'])) {
            $model->workbookId = $map['WorkbookId'];
        }

        return $model;
    }
}
