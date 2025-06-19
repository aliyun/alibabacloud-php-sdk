<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateRangeRequest\hyperlinks;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateRangeRequest\tenantContext;

class UpdateRangeRequest extends Model
{
    /**
     * @var string[][]
     */
    public $backgroundColors;

    /**
     * @var hyperlinks[][]
     */
    public $hyperlinks;

    /**
     * @var string
     */
    public $numberFormat;

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
     * @var string[][]
     */
    public $values;

    /**
     * @var string
     */
    public $workbookId;
    protected $_name = [
        'backgroundColors' => 'BackgroundColors',
        'hyperlinks' => 'Hyperlinks',
        'numberFormat' => 'NumberFormat',
        'rangeAddress' => 'RangeAddress',
        'sheetId' => 'SheetId',
        'tenantContext' => 'TenantContext',
        'values' => 'Values',
        'workbookId' => 'WorkbookId',
    ];

    public function validate()
    {
        if (\is_array($this->backgroundColors)) {
            Model::validateArray($this->backgroundColors);
        }
        if (\is_array($this->hyperlinks)) {
            Model::validateArray($this->hyperlinks);
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgroundColors) {
            if (\is_array($this->backgroundColors)) {
                $res['BackgroundColors'] = [];
                $n1 = 0;
                foreach ($this->backgroundColors as $item1) {
                    if (\is_array($item1)) {
                        $res['BackgroundColors'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['BackgroundColors'][$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->hyperlinks) {
            if (\is_array($this->hyperlinks)) {
                $res['Hyperlinks'] = [];
                $n1 = 0;
                foreach ($this->hyperlinks as $item1) {
                    if (\is_array($item1)) {
                        $res['Hyperlinks'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['Hyperlinks'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->numberFormat) {
            $res['NumberFormat'] = $this->numberFormat;
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

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    if (\is_array($item1)) {
                        $res['Values'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['Values'][$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
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
        if (isset($map['BackgroundColors'])) {
            if (!empty($map['BackgroundColors'])) {
                $model->backgroundColors = [];
                $n1 = 0;
                foreach ($map['BackgroundColors'] as $item1) {
                    if (!empty($item1)) {
                        $model->backgroundColors[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->backgroundColors[$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['Hyperlinks'])) {
            if (!empty($map['Hyperlinks'])) {
                $model->hyperlinks = [];
                $n1 = 0;
                foreach ($map['Hyperlinks'] as $item1) {
                    if (!empty($item1)) {
                        $model->hyperlinks[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->hyperlinks[$n1][$n2] = hyperlinks::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['NumberFormat'])) {
            $model->numberFormat = $map['NumberFormat'];
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

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['Values'] as $item1) {
                    if (!empty($item1)) {
                        $model->values[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->values[$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkbookId'])) {
            $model->workbookId = $map['WorkbookId'];
        }

        return $model;
    }
}
