<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetRangeShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example A3:C3
     *
     * @var string
     */
    public $rangeAddress;

    /**
     * @example values
     *
     * @var string
     */
    public $select;

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
        'rangeAddress' => 'RangeAddress',
        'select' => 'Select',
        'sheetId' => 'SheetId',
        'tenantContextShrink' => 'TenantContext',
        'workbookId' => 'WorkbookId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetRangeShrinkRequest
     */
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
