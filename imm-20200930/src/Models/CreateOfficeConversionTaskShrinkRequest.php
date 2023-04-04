<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateOfficeConversionTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $credentialConfigShrink;

    /**
     * @example -1
     *
     * @var int
     */
    public $endPage;

    /**
     * @example false
     *
     * @var bool
     */
    public $firstPage;

    /**
     * @example false
     *
     * @var bool
     */
    public $fitToHeight;

    /**
     * @example false
     *
     * @var bool
     */
    public $fitToWidth;

    /**
     * @example false
     *
     * @var bool
     */
    public $holdLineFeed;

    /**
     * @example 96
     *
     * @var int
     */
    public $imageDPI;

    /**
     * @example false
     *
     * @var bool
     */
    public $longPicture;

    /**
     * @example false
     *
     * @var bool
     */
    public $longText;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxSheetColumn;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxSheetRow;

    /**
     * @var string
     */
    public $notificationShrink;

    /**
     * @example 1,2-4,7
     *
     * @var string
     */
    public $pages;

    /**
     * @example false
     *
     * @var bool
     */
    public $paperHorizontal;

    /**
     * @example A4
     *
     * @var string
     */
    public $paperSize;

    /**
     * @example ********
     *
     * @var string
     */
    public $password;

    /**
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 60
     *
     * @var int
     */
    public $quality;

    /**
     * @example 100
     *
     * @var int
     */
    public $scalePercentage;

    /**
     * @example 1
     *
     * @var int
     */
    public $sheetCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $sheetIndex;

    /**
     * @example false
     *
     * @var bool
     */
    public $showComments;

    /**
     * @example doc
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example oss://test-bucket/test-object
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @example 1
     *
     * @var int
     */
    public $startPage;

    /**
     * @example {"test":"val1"}
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @example png
     *
     * @var string
     */
    public $targetType;

    /**
     * @example oss://{bucket}/{tags.custom}/{dirname}/{barename}.{autoext}
     *
     * @var string
     */
    public $targetURI;

    /**
     * @example oss://bucket1/
     *
     * @var string
     */
    public $targetURIPrefix;

    /**
     * @var string
     */
    public $trimPolicyShrink;

    /**
     * @example {"file_id": "abc"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'credentialConfigShrink' => 'CredentialConfig',
        'endPage'                => 'EndPage',
        'firstPage'              => 'FirstPage',
        'fitToHeight'            => 'FitToHeight',
        'fitToWidth'             => 'FitToWidth',
        'holdLineFeed'           => 'HoldLineFeed',
        'imageDPI'               => 'ImageDPI',
        'longPicture'            => 'LongPicture',
        'longText'               => 'LongText',
        'maxSheetColumn'         => 'MaxSheetColumn',
        'maxSheetRow'            => 'MaxSheetRow',
        'notificationShrink'     => 'Notification',
        'pages'                  => 'Pages',
        'paperHorizontal'        => 'PaperHorizontal',
        'paperSize'              => 'PaperSize',
        'password'               => 'Password',
        'projectName'            => 'ProjectName',
        'quality'                => 'Quality',
        'scalePercentage'        => 'ScalePercentage',
        'sheetCount'             => 'SheetCount',
        'sheetIndex'             => 'SheetIndex',
        'showComments'           => 'ShowComments',
        'sourceType'             => 'SourceType',
        'sourceURI'              => 'SourceURI',
        'startPage'              => 'StartPage',
        'tagsShrink'             => 'Tags',
        'targetType'             => 'TargetType',
        'targetURI'              => 'TargetURI',
        'targetURIPrefix'        => 'TargetURIPrefix',
        'trimPolicyShrink'       => 'TrimPolicy',
        'userData'               => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialConfigShrink) {
            $res['CredentialConfig'] = $this->credentialConfigShrink;
        }
        if (null !== $this->endPage) {
            $res['EndPage'] = $this->endPage;
        }
        if (null !== $this->firstPage) {
            $res['FirstPage'] = $this->firstPage;
        }
        if (null !== $this->fitToHeight) {
            $res['FitToHeight'] = $this->fitToHeight;
        }
        if (null !== $this->fitToWidth) {
            $res['FitToWidth'] = $this->fitToWidth;
        }
        if (null !== $this->holdLineFeed) {
            $res['HoldLineFeed'] = $this->holdLineFeed;
        }
        if (null !== $this->imageDPI) {
            $res['ImageDPI'] = $this->imageDPI;
        }
        if (null !== $this->longPicture) {
            $res['LongPicture'] = $this->longPicture;
        }
        if (null !== $this->longText) {
            $res['LongText'] = $this->longText;
        }
        if (null !== $this->maxSheetColumn) {
            $res['MaxSheetColumn'] = $this->maxSheetColumn;
        }
        if (null !== $this->maxSheetRow) {
            $res['MaxSheetRow'] = $this->maxSheetRow;
        }
        if (null !== $this->notificationShrink) {
            $res['Notification'] = $this->notificationShrink;
        }
        if (null !== $this->pages) {
            $res['Pages'] = $this->pages;
        }
        if (null !== $this->paperHorizontal) {
            $res['PaperHorizontal'] = $this->paperHorizontal;
        }
        if (null !== $this->paperSize) {
            $res['PaperSize'] = $this->paperSize;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->quality) {
            $res['Quality'] = $this->quality;
        }
        if (null !== $this->scalePercentage) {
            $res['ScalePercentage'] = $this->scalePercentage;
        }
        if (null !== $this->sheetCount) {
            $res['SheetCount'] = $this->sheetCount;
        }
        if (null !== $this->sheetIndex) {
            $res['SheetIndex'] = $this->sheetIndex;
        }
        if (null !== $this->showComments) {
            $res['ShowComments'] = $this->showComments;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }
        if (null !== $this->startPage) {
            $res['StartPage'] = $this->startPage;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->targetURI) {
            $res['TargetURI'] = $this->targetURI;
        }
        if (null !== $this->targetURIPrefix) {
            $res['TargetURIPrefix'] = $this->targetURIPrefix;
        }
        if (null !== $this->trimPolicyShrink) {
            $res['TrimPolicy'] = $this->trimPolicyShrink;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOfficeConversionTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfigShrink = $map['CredentialConfig'];
        }
        if (isset($map['EndPage'])) {
            $model->endPage = $map['EndPage'];
        }
        if (isset($map['FirstPage'])) {
            $model->firstPage = $map['FirstPage'];
        }
        if (isset($map['FitToHeight'])) {
            $model->fitToHeight = $map['FitToHeight'];
        }
        if (isset($map['FitToWidth'])) {
            $model->fitToWidth = $map['FitToWidth'];
        }
        if (isset($map['HoldLineFeed'])) {
            $model->holdLineFeed = $map['HoldLineFeed'];
        }
        if (isset($map['ImageDPI'])) {
            $model->imageDPI = $map['ImageDPI'];
        }
        if (isset($map['LongPicture'])) {
            $model->longPicture = $map['LongPicture'];
        }
        if (isset($map['LongText'])) {
            $model->longText = $map['LongText'];
        }
        if (isset($map['MaxSheetColumn'])) {
            $model->maxSheetColumn = $map['MaxSheetColumn'];
        }
        if (isset($map['MaxSheetRow'])) {
            $model->maxSheetRow = $map['MaxSheetRow'];
        }
        if (isset($map['Notification'])) {
            $model->notificationShrink = $map['Notification'];
        }
        if (isset($map['Pages'])) {
            $model->pages = $map['Pages'];
        }
        if (isset($map['PaperHorizontal'])) {
            $model->paperHorizontal = $map['PaperHorizontal'];
        }
        if (isset($map['PaperSize'])) {
            $model->paperSize = $map['PaperSize'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Quality'])) {
            $model->quality = $map['Quality'];
        }
        if (isset($map['ScalePercentage'])) {
            $model->scalePercentage = $map['ScalePercentage'];
        }
        if (isset($map['SheetCount'])) {
            $model->sheetCount = $map['SheetCount'];
        }
        if (isset($map['SheetIndex'])) {
            $model->sheetIndex = $map['SheetIndex'];
        }
        if (isset($map['ShowComments'])) {
            $model->showComments = $map['ShowComments'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }
        if (isset($map['StartPage'])) {
            $model->startPage = $map['StartPage'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TargetURI'])) {
            $model->targetURI = $map['TargetURI'];
        }
        if (isset($map['TargetURIPrefix'])) {
            $model->targetURIPrefix = $map['TargetURIPrefix'];
        }
        if (isset($map['TrimPolicy'])) {
            $model->trimPolicyShrink = $map['TrimPolicy'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
