<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearDataRequest\tenantContext;

class ClearDataRequest extends Model
{
    /**
     * @var string
     */
    public $rangeAddress;

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
        'rangeAddress' => 'RangeAddress',
        'sheetId' => 'SheetId',
        'tenantContext' => 'TenantContext',
        'workbookId' => 'WorkbookId',
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
        if (null !== $this->rangeAddress) {
            $res['RangeAddress'] = $this->rangeAddress;
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
        if (isset($map['RangeAddress'])) {
            $model->rangeAddress = $map['RangeAddress'];
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
