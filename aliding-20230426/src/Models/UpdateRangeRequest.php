<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateRangeRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class UpdateRangeRequest extends Model
{
    /**
     * @example [["#ff0000","#ff0000","#ff0000"]]
     *
     * @var string[][]
     */
    public $backgroundColors;

    /**
     * @example [["type": "path","link": "https://www.dingtalk.com","text": "test"]]
     *
     * @var undefined[][]
     */
    public $hyperlinks;

    /**
     * @example General
     *
     * @var string
     */
    public $numberFormat;

    /**
     * @example A3:C3
     *
     * @var string
     */
    public $rangeAddress;

    /**
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
     * @example [["1","2","3"]]
     *
     * @var string[][]
     */
    public $values;

    /**
     * @example stxxxx
     *
     * @var string
     */
    public $workbookId;
    protected $_name = [
        'backgroundColors' => 'BackgroundColors',
        'hyperlinks'       => 'Hyperlinks',
        'numberFormat'     => 'NumberFormat',
        'rangeAddress'     => 'RangeAddress',
        'sheetId'          => 'SheetId',
        'tenantContext'    => 'TenantContext',
        'values'           => 'Values',
        'workbookId'       => 'WorkbookId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundColors) {
            $res['BackgroundColors'] = $this->backgroundColors;
        }
        if (null !== $this->hyperlinks) {
            $res['Hyperlinks'] = $this->hyperlinks;
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
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }
        if (null !== $this->workbookId) {
            $res['WorkbookId'] = $this->workbookId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRangeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackgroundColors'])) {
            if (!empty($map['BackgroundColors'])) {
                $model->backgroundColors = $map['BackgroundColors'];
            }
        }
        if (isset($map['Hyperlinks'])) {
            if (!empty($map['Hyperlinks'])) {
                $model->hyperlinks = $map['Hyperlinks'];
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
                $model->values = $map['Values'];
            }
        }
        if (isset($map['WorkbookId'])) {
            $model->workbookId = $map['WorkbookId'];
        }

        return $model;
    }
}
