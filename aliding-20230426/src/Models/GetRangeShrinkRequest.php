<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetRangeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $rangeAddress;

    /**
     * @var string
     */
    public $select;

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
        'rangeAddress' => 'RangeAddress',
        'select' => 'Select',
        'sheetId' => 'SheetId',
        'tenantContextShrink' => 'TenantContext',
        'workbookId' => 'WorkbookId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rangeAddress) {
            $res['RangeAddress'] = $this->rangeAddress;
        }

        if (null !== $this->select) {
            $res['Select'] = $this->select;
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
        if (isset($map['RangeAddress'])) {
            $model->rangeAddress = $map['RangeAddress'];
        }

        if (isset($map['Select'])) {
            $model->select = $map['Select'];
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
