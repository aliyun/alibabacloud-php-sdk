<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertDropDownListRequest\options;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertDropDownListRequest\tenantContext;

class InsertDropDownListRequest extends Model
{
    /**
     * @var options[]
     */
    public $options;

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
        'options' => 'Options',
        'rangeAddress' => 'RangeAddress',
        'sheetId' => 'SheetId',
        'tenantContext' => 'TenantContext',
        'workbookId' => 'WorkbookId',
    ];

    public function validate()
    {
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['Options'] = [];
                $n1 = 0;
                foreach ($this->options as $item1) {
                    $res['Options'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = [];
                $n1 = 0;
                foreach ($map['Options'] as $item1) {
                    $model->options[$n1] = options::fromMap($item1);
                    ++$n1;
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
