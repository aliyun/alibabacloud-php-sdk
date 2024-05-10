<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class InsertRowsBeforeShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $row;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $rowCount;

    /**
     * @description This parameter is required.
     *
     * @example Sheet1
     *
     * @var string
     */
    public $sheetId;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @description This parameter is required.
     *
     * @example stxxxx
     *
     * @var string
     */
    public $workbookId;
    protected $_name = [
        'row'                 => 'Row',
        'rowCount'            => 'RowCount',
        'sheetId'             => 'SheetId',
        'tenantContextShrink' => 'TenantContext',
        'workbookId'          => 'WorkbookId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->row) {
            $res['Row'] = $this->row;
        }
        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
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

    /**
     * @param array $map
     *
     * @return InsertRowsBeforeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Row'])) {
            $model->row = $map['Row'];
        }
        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
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
