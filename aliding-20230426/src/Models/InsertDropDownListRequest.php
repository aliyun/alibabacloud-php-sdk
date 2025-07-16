<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertDropDownListRequest\options;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertDropDownListRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class InsertDropDownListRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var options[]
     */
    public $options;

    /**
     * @description This parameter is required.
     *
     * @example A3:C3
     *
     * @var string
     */
    public $rangeAddress;

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
     * @example stxxxx
     *
     * @var string
     */
    public $workbookId;
    protected $_name = [
        'options' => 'Options',
        'rangeAddress' => 'RangeAddress',
        'sheetId' => 'SheetId',
        'tenantContext' => 'TenantContext',
        'workbookId' => 'WorkbookId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->options) {
            $res['Options'] = [];
            if (null !== $this->options && \is_array($this->options)) {
                $n = 0;
                foreach ($this->options as $item) {
                    $res['Options'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rangeAddress) {
            $res['RangeAddress'] = $this->rangeAddress;
        }
        if (null !== $this->sheetId) {
            $res['SheetId'] = $this->sheetId;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->workbookId) {
            $res['WorkbookId'] = $this->workbookId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertDropDownListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = [];
                $n = 0;
                foreach ($map['Options'] as $item) {
                    $model->options[$n++] = null !== $item ? options::fromMap($item) : $item;
                }
            }
        }
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
