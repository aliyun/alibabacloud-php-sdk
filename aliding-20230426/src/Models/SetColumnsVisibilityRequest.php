<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\SetColumnsVisibilityRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class SetColumnsVisibilityRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $column;

    /**
     * @description This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $columnCount;

    /**
     * @description This parameter is required.
     *
     * @example Sheet1
     *
     * @var string
     */
    public $sheetId;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @description This parameter is required.
     *
     * @example hidden
     *
     * @var string
     */
    public $visibility;

    /**
     * @description This parameter is required.
     *
     * @example stxxxx
     *
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
    }

    public function toMap()
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
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->workbookId) {
            $res['WorkbookId'] = $this->workbookId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetColumnsVisibilityRequest
     */
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
