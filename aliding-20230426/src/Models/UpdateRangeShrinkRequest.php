<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class UpdateRangeShrinkRequest extends Model
{
    /**
     * @example [["#ff0000","#ff0000","#ff0000"]]
     *
     * @var string
     */
    public $backgroundColorsShrink;

    /**
     * @example [["type": "path","link": "https://www.dingtalk.com","text": "test"]]
     *
     * @var string
     */
    public $hyperlinksShrink;

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
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @example [["1","2","3"]]
     *
     * @var string
     */
    public $valuesShrink;

    /**
     * @example stxxxx
     *
     * @var string
     */
    public $workbookId;
    protected $_name = [
        'backgroundColorsShrink' => 'BackgroundColors',
        'hyperlinksShrink'       => 'Hyperlinks',
        'numberFormat'           => 'NumberFormat',
        'rangeAddress'           => 'RangeAddress',
        'sheetId'                => 'SheetId',
        'tenantContextShrink'    => 'TenantContext',
        'valuesShrink'           => 'Values',
        'workbookId'             => 'WorkbookId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundColorsShrink) {
            $res['BackgroundColors'] = $this->backgroundColorsShrink;
        }
        if (null !== $this->hyperlinksShrink) {
            $res['Hyperlinks'] = $this->hyperlinksShrink;
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
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->valuesShrink) {
            $res['Values'] = $this->valuesShrink;
        }
        if (null !== $this->workbookId) {
            $res['WorkbookId'] = $this->workbookId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRangeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackgroundColors'])) {
            $model->backgroundColorsShrink = $map['BackgroundColors'];
        }
        if (isset($map['Hyperlinks'])) {
            $model->hyperlinksShrink = $map['Hyperlinks'];
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
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['Values'])) {
            $model->valuesShrink = $map['Values'];
        }
        if (isset($map['WorkbookId'])) {
            $model->workbookId = $map['WorkbookId'];
        }

        return $model;
    }
}
