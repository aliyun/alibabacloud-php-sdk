<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\CreateOfficeConversionTaskRequest\sources;
use AlibabaCloud\Tea\Model;

class CreateOfficeConversionTaskRequest extends Model
{
    /**
     * @description **If you have no special requirements, leave this parameter empty.**
     *
     * The authorization chain settings. For more information, see [Use authorization chains to access resources of other entities](https://help.aliyun.com/document_detail/465340.html).
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @description The ending page for document conversion. The default value is -1, which converts the file until the last page of the file.
     *
     * >
     *
     *   If the source is a spreadsheet file, specify the index number of the corresponding sheet instead.
     *
     *   If you convert a large number of pages within the document, we recommend that you split the pages into several document conversion tasks to prevent conversion timeouts.
     *
     *   This parameter takes effect only when you convert the file into an image. It does not take effect when you convert the file into a PDF or TXT file.
     *
     * @example -1
     *
     * @var int
     */
    public $endPage;

    /**
     * @description Specifies whether to return only the first resulting image when you convert a spreadsheet document to images. The number of rows and the number of columns in the first image are determined by the automatic splitting process. Valid values:
     *
     *   false (default): does not return only the first resulting image. All the resulting images are returned.
     *   true: returns only the first resulting image. A thumbnail is generated.
     *
     * >  This parameter takes effect only when the **LongPicture** parameter is set to `true`.
     * @example false
     *
     * @var bool
     */
    public $firstPage;

    /**
     * @description Specifies whether to convert all rows of a spreadsheet document to one single image or a single-page PDF document when you convert the table document to an image or a PDF document. Valid values:
     *
     *   false (default): converts all rows of the document to multiple images or a multi-page PDF document. This is the default value.
     *   true: converts all rows of the document to one single image or a single-page PDF document.
     *
     * @example false
     *
     * @var bool
     */
    public $fitToHeight;

    /**
     * @description Specifies whether to convert all columns of a spreadsheet document to one single image or a single-page PDF document when you convert the spreadsheet file to an image or a PDF document. Valid values:
     *
     *   false (default): converts all columns of the document to multiple images or a multi-page PDF document.
     *   true: converts all columns of the document to one single image or a single-page PDF document.
     *
     * @example false
     *
     * @var bool
     */
    public $fitToWidth;

    /**
     * @description Specifies whether to retain line feeds in the output file when a document is converted to a text file. Valid values:
     *
     *   false (default): does not retain the line feeds.
     *   true: retains the line feeds.
     *
     * @example false
     *
     * @var bool
     */
    public $holdLineFeed;

    /**
     * @description The dots per inch (DPI) of output images. Valid values: 96 to 600. Default value: 96.
     *
     * @example 96
     *
     * @var int
     */
    public $imageDPI;

    /**
     * @description Specifies whether to convert the document to a long image. Valid values:
     *
     *   false (default): does not convert the document to a long image.
     *   true: converts the document to a long image.
     *
     * >  You can convert up to 20 pages of a document into a long image. If you convert more than 20 pages to a long image, an error may occur.
     * @example false
     *
     * @var bool
     */
    public $longPicture;

    /**
     * @description Specifies whether to convert the document to a long text file. Valid values:
     *
     *   false (default): does not convert the document to a long text file. Each page of the document is converted to a text file.
     *   true: converts the entire document to a long text file.
     *
     * @example false
     *
     * @var bool
     */
    public $longText;

    /**
     * @description The maximum number of spreadsheet columns to be converted to an image. By default, all columns within the spreadsheet file are converted.
     *
     * >  This parameter takes effect only when the **LongPicture** parameter is set to `true`.
     * @example 10
     *
     * @var int
     */
    public $maxSheetColumn;

    /**
     * @description The maximum number of spreadsheet rows to be converted to an image. By default, all rows within the spreadsheet file are converted.
     *
     * >  This parameter takes effect only when the **LongPicture** parameter is set to `true`.
     * @example 10
     *
     * @var int
     */
    public $maxSheetRow;

    /**
     * @description The notification settings. For information about the asynchronous notification format, see [Asynchronous message examples](https://help.aliyun.com/document_detail/2743997.html).
     *
     * @var Notification
     */
    public $notification;

    /**
     * @description The numbers of pages to be converted. This parameter takes precedence over the StartPage and EndPage parameters. The value of this parameter can be in different formats:
     *
     *   If you specify pages separately by page number, separate page numbers with commas (,). Example: 1,2
     *   If you specify consecutive pages by using a page range, connect the starting and ending page numbers with a hyphen (-). Example: 1,2-4,7
     *
     * @example 1,2-4,7
     *
     * @var string
     */
    public $pages;

    /**
     * @description Specifies whether to place sheets of paper horizontally for converting a spreadsheet document to images. Conversion to images is similar to printing the content on a sheet of paper. Valid values:
     *
     *   false (default): does not place sheets of paper horizontally. Paper sheets are placed vertically.
     *   true: places sheets of paper horizontally.
     *
     * @example false
     *
     * @var bool
     */
    public $paperHorizontal;

    /**
     * @description The paper size for converting a spreadsheet document to images. Conversion to images is similar to printing the content on a sheet of paper. Valid values:
     *
     *   A0
     *   A2
     *   A4 (default)
     *
     * >  This parameter takes effect only when the **FitToHeight** and **FitToWidth** parameters are specified.
     * @example A4
     *
     * @var string
     */
    public $paperSize;

    /**
     * @description The password that protects the source document. To convert a password-protected document, specify this parameter.
     *
     * @example ********
     *
     * @var string
     */
    public $password;

    /**
     * @description The name of the project.[](~~478153~~)
     *
     * This parameter is required.
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The quality of the output file. Valid values: 0 to 100. A smaller value indicates lower quality and better conversion performance. By default, the system specifies an appropriate value that provides an optimal balance between the quality and conversion performance based on the document content.
     *
     * @example 60
     *
     * @var int
     */
    public $quality;

    /**
     * @description The percentage scale relative to the source document. Valid values: 20 to 200. The default value is 100, which indicates that the document is not scaled.
     *
     * >  A value that is less than 100 indicates a size reduction. A value that is greater than 100 indicates an enlargement.
     * @example 100
     *
     * @var int
     */
    public $scalePercentage;

    /**
     * @description The number of sheets to be converted to an image. By default, all sheets within the spreadsheet file are converted.
     *
     * @example 1
     *
     * @var int
     */
    public $sheetCount;

    /**
     * @description The index number of the sheet to be converted to an image. The value ranges from 1 to the index number of the last sheet. By default, the conversion starts from the first sheet.
     *
     * @example 1
     *
     * @var int
     */
    public $sheetIndex;

    /**
     * @description Specifies whether to display comments in resulting images when a text document is converted to images. Valid values:
     *
     *   false (default): does not display comments in resulting images.
     *   true: displays comments in resulting images.
     *
     * @example false
     *
     * @var bool
     */
    public $showComments;

    /**
     * @description The name extension of the source file. By default, the type of the source file is determined based on the name extension of the source object in OSS. If the object in OSS does not have a name extension, you can specify this parameter. Valid values:
     *
     *   Text documents: doc, docx, wps, wpss, docm, dotm, dot, dotx, and html
     *   Presentation documents: pptx, ppt, pot, potx, pps, ppsx, dps, dpt, pptm, potm, ppsm, and dpss
     *   Spreadsheet documents: xls, xlt, et, ett, xlsx, xltx, csv, xlsb, xlsm, xltm, and ets
     *   PDF documents: pdf
     *
     * @example doc
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The URI of the source file.
     *
     * Specify the OSS URI in the oss://${Bucket}/${Object} format, where `${Bucket}` is the name of the bucket in the same region as the current project and `${Object}` is the path of the object with the extension included.
     * @example oss://test-bucket/test-object
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @var sources[]
     */
    public $sources;

    /**
     * @description The starting page for document conversion. Default value: 1.
     *
     * >
     *
     *   If the document is a spreadsheet file, specify the index number of the corresponding sheet instead.
     *
     *   This parameter takes effect only when you convert the file to an image format. It does not take effect when you convert the file into a PDF or TXT file.
     *
     * @example 1
     *
     * @var int
     */
    public $startPage;

    /**
     * @description The custom tags in dictionary format. You can use the custom tags to search for the task.
     *
     * @example {"test":"val1"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The format of the output file. Valid values:
     *
     *   png: a PNG image.
     *   jpg: a JPG image.
     *   pdf: a PDF file.
     *   txt: a TXT file. You can specify this value to extract the text content of the source document. Only presentation, text, or spreadsheet documents can be converted to a TXT file. If the source document is a spreadsheet, only one TXT is created and sheet-related parameters do not take effect.
     *
     * This parameter is required.
     * @example png
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The address template of the output file.
     *
     * >  Specify at least one of the TargetURI and TargetURIPrefix parameters.
     * @example oss://{bucket}/{tags.custom}/{dirname}/{barename}.{autoext}
     *
     * @var string
     */
    public $targetURI;

    /**
     * @description The prefix of the storage address of the output file.
     *
     * >  Specify at least one of the TargetURI and TargetURIPrefix parameters.
     * @example oss://bucket1/
     *
     * @var string
     */
    public $targetURIPrefix;

    /**
     * @description The trim policy for converting a spreadsheet file. Empty rows and columns may generate blank spaces in the output file if no appropriate trim policy is specified.
     *
     * @var TrimPolicy
     */
    public $trimPolicy;

    /**
     * @description The custom information, which is returned in an asynchronous notification and facilitates notification management. The maximum information length is 2,048 bytes.
     *
     * @example {"file_id": "abc"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'credentialConfig' => 'CredentialConfig',
        'endPage'          => 'EndPage',
        'firstPage'        => 'FirstPage',
        'fitToHeight'      => 'FitToHeight',
        'fitToWidth'       => 'FitToWidth',
        'holdLineFeed'     => 'HoldLineFeed',
        'imageDPI'         => 'ImageDPI',
        'longPicture'      => 'LongPicture',
        'longText'         => 'LongText',
        'maxSheetColumn'   => 'MaxSheetColumn',
        'maxSheetRow'      => 'MaxSheetRow',
        'notification'     => 'Notification',
        'pages'            => 'Pages',
        'paperHorizontal'  => 'PaperHorizontal',
        'paperSize'        => 'PaperSize',
        'password'         => 'Password',
        'projectName'      => 'ProjectName',
        'quality'          => 'Quality',
        'scalePercentage'  => 'ScalePercentage',
        'sheetCount'       => 'SheetCount',
        'sheetIndex'       => 'SheetIndex',
        'showComments'     => 'ShowComments',
        'sourceType'       => 'SourceType',
        'sourceURI'        => 'SourceURI',
        'sources'          => 'Sources',
        'startPage'        => 'StartPage',
        'tags'             => 'Tags',
        'targetType'       => 'TargetType',
        'targetURI'        => 'TargetURI',
        'targetURIPrefix'  => 'TargetURIPrefix',
        'trimPolicy'       => 'TrimPolicy',
        'userData'         => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
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
        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toMap() : null;
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
        if (null !== $this->sources) {
            $res['Sources'] = [];
            if (null !== $this->sources && \is_array($this->sources)) {
                $n = 0;
                foreach ($this->sources as $item) {
                    $res['Sources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startPage) {
            $res['StartPage'] = $this->startPage;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (null !== $this->trimPolicy) {
            $res['TrimPolicy'] = null !== $this->trimPolicy ? $this->trimPolicy->toMap() : null;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOfficeConversionTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
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
            $model->notification = Notification::fromMap($map['Notification']);
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
        if (isset($map['Sources'])) {
            if (!empty($map['Sources'])) {
                $model->sources = [];
                $n              = 0;
                foreach ($map['Sources'] as $item) {
                    $model->sources[$n++] = null !== $item ? sources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartPage'])) {
            $model->startPage = $map['StartPage'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
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
            $model->trimPolicy = TrimPolicy::fromMap($map['TrimPolicy']);
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
