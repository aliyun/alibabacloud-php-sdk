<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteRowsRequest\tenantContext;

class DeleteRowsRequest extends Model
{
    /**
     * @var int
     */
    public $row;
    /**
     * @var int
     */
    public $rowCount;
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
    public $workbookId;
    protected $_name = [
        'row'           => 'Row',
        'rowCount'      => 'RowCount',
        'sheetId'       => 'SheetId',
        'tenantContext' => 'TenantContext',
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
        if (null !== $this->row) {
            $res['Row'] = $this->row;
        }

        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }

        if (null !== $this->sheetId) {
            $res['SheetId'] = $this->sheetId;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['WorkbookId'])) {
            $model->workbookId = $map['WorkbookId'];
        }

        return $model;
    }
}
