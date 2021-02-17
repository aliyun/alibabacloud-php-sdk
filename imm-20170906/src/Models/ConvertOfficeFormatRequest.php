<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class ConvertOfficeFormatRequest extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $srcUri;

    /**
     * @var string
     */
    public $tgtType;

    /**
     * @var string
     */
    public $tgtUri;

    /**
     * @var string
     */
    public $srcType;

    /**
     * @var int
     */
    public $startPage;

    /**
     * @var int
     */
    public $endPage;

    /**
     * @var int
     */
    public $maxSheetRow;

    /**
     * @var int
     */
    public $maxSheetCol;

    /**
     * @var int
     */
    public $maxSheetCount;

    /**
     * @var bool
     */
    public $sheetOnePage;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $tgtFilePrefix;

    /**
     * @var string
     */
    public $tgtFileSuffix;

    /**
     * @var string
     */
    public $tgtFilePages;

    /**
     * @var bool
     */
    public $fitToPagesTall;

    /**
     * @var bool
     */
    public $fitToPagesWide;

    /**
     * @var bool
     */
    public $pdfVector;

    /**
     * @var bool
     */
    public $hidecomments;
    protected $_name = [
        'project'        => 'Project',
        'srcUri'         => 'SrcUri',
        'tgtType'        => 'TgtType',
        'tgtUri'         => 'TgtUri',
        'srcType'        => 'SrcType',
        'startPage'      => 'StartPage',
        'endPage'        => 'EndPage',
        'maxSheetRow'    => 'MaxSheetRow',
        'maxSheetCol'    => 'MaxSheetCol',
        'maxSheetCount'  => 'MaxSheetCount',
        'sheetOnePage'   => 'SheetOnePage',
        'modelId'        => 'ModelId',
        'password'       => 'Password',
        'tgtFilePrefix'  => 'TgtFilePrefix',
        'tgtFileSuffix'  => 'TgtFileSuffix',
        'tgtFilePages'   => 'TgtFilePages',
        'fitToPagesTall' => 'FitToPagesTall',
        'fitToPagesWide' => 'FitToPagesWide',
        'pdfVector'      => 'PdfVector',
        'hidecomments'   => 'Hidecomments',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->srcUri) {
            $res['SrcUri'] = $this->srcUri;
        }
        if (null !== $this->tgtType) {
            $res['TgtType'] = $this->tgtType;
        }
        if (null !== $this->tgtUri) {
            $res['TgtUri'] = $this->tgtUri;
        }
        if (null !== $this->srcType) {
            $res['SrcType'] = $this->srcType;
        }
        if (null !== $this->startPage) {
            $res['StartPage'] = $this->startPage;
        }
        if (null !== $this->endPage) {
            $res['EndPage'] = $this->endPage;
        }
        if (null !== $this->maxSheetRow) {
            $res['MaxSheetRow'] = $this->maxSheetRow;
        }
        if (null !== $this->maxSheetCol) {
            $res['MaxSheetCol'] = $this->maxSheetCol;
        }
        if (null !== $this->maxSheetCount) {
            $res['MaxSheetCount'] = $this->maxSheetCount;
        }
        if (null !== $this->sheetOnePage) {
            $res['SheetOnePage'] = $this->sheetOnePage;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->tgtFilePrefix) {
            $res['TgtFilePrefix'] = $this->tgtFilePrefix;
        }
        if (null !== $this->tgtFileSuffix) {
            $res['TgtFileSuffix'] = $this->tgtFileSuffix;
        }
        if (null !== $this->tgtFilePages) {
            $res['TgtFilePages'] = $this->tgtFilePages;
        }
        if (null !== $this->fitToPagesTall) {
            $res['FitToPagesTall'] = $this->fitToPagesTall;
        }
        if (null !== $this->fitToPagesWide) {
            $res['FitToPagesWide'] = $this->fitToPagesWide;
        }
        if (null !== $this->pdfVector) {
            $res['PdfVector'] = $this->pdfVector;
        }
        if (null !== $this->hidecomments) {
            $res['Hidecomments'] = $this->hidecomments;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertOfficeFormatRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['SrcUri'])) {
            $model->srcUri = $map['SrcUri'];
        }
        if (isset($map['TgtType'])) {
            $model->tgtType = $map['TgtType'];
        }
        if (isset($map['TgtUri'])) {
            $model->tgtUri = $map['TgtUri'];
        }
        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }
        if (isset($map['StartPage'])) {
            $model->startPage = $map['StartPage'];
        }
        if (isset($map['EndPage'])) {
            $model->endPage = $map['EndPage'];
        }
        if (isset($map['MaxSheetRow'])) {
            $model->maxSheetRow = $map['MaxSheetRow'];
        }
        if (isset($map['MaxSheetCol'])) {
            $model->maxSheetCol = $map['MaxSheetCol'];
        }
        if (isset($map['MaxSheetCount'])) {
            $model->maxSheetCount = $map['MaxSheetCount'];
        }
        if (isset($map['SheetOnePage'])) {
            $model->sheetOnePage = $map['SheetOnePage'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['TgtFilePrefix'])) {
            $model->tgtFilePrefix = $map['TgtFilePrefix'];
        }
        if (isset($map['TgtFileSuffix'])) {
            $model->tgtFileSuffix = $map['TgtFileSuffix'];
        }
        if (isset($map['TgtFilePages'])) {
            $model->tgtFilePages = $map['TgtFilePages'];
        }
        if (isset($map['FitToPagesTall'])) {
            $model->fitToPagesTall = $map['FitToPagesTall'];
        }
        if (isset($map['FitToPagesWide'])) {
            $model->fitToPagesWide = $map['FitToPagesWide'];
        }
        if (isset($map['PdfVector'])) {
            $model->pdfVector = $map['PdfVector'];
        }
        if (isset($map['Hidecomments'])) {
            $model->hidecomments = $map['Hidecomments'];
        }

        return $model;
    }
}
