<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateOfficeConversionTaskRequest\sources;

class CreateOfficeConversionTaskRequest extends Model
{
    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @var int
     */
    public $endPage;

    /**
     * @var bool
     */
    public $firstPage;

    /**
     * @var bool
     */
    public $fitToHeight;

    /**
     * @var bool
     */
    public $fitToWidth;

    /**
     * @var bool
     */
    public $holdLineFeed;

    /**
     * @var int
     */
    public $imageDPI;

    /**
     * @var bool
     */
    public $longPicture;

    /**
     * @var bool
     */
    public $longText;

    /**
     * @var int
     */
    public $maxSheetColumn;

    /**
     * @var int
     */
    public $maxSheetRow;

    /**
     * @var Notification
     */
    public $notification;

    /**
     * @var string
     */
    public $pages;

    /**
     * @var bool
     */
    public $paperHorizontal;

    /**
     * @var string
     */
    public $paperSize;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $quality;

    /**
     * @var int
     */
    public $scalePercentage;

    /**
     * @var int
     */
    public $sheetCount;

    /**
     * @var int
     */
    public $sheetIndex;

    /**
     * @var bool
     */
    public $showComments;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $sourceURI;

    /**
     * @var sources[]
     */
    public $sources;

    /**
     * @var int
     */
    public $startPage;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $targetURI;

    /**
     * @var string
     */
    public $targetURIPrefix;

    /**
     * @var TrimPolicy
     */
    public $trimPolicy;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'credentialConfig' => 'CredentialConfig',
        'endPage' => 'EndPage',
        'firstPage' => 'FirstPage',
        'fitToHeight' => 'FitToHeight',
        'fitToWidth' => 'FitToWidth',
        'holdLineFeed' => 'HoldLineFeed',
        'imageDPI' => 'ImageDPI',
        'longPicture' => 'LongPicture',
        'longText' => 'LongText',
        'maxSheetColumn' => 'MaxSheetColumn',
        'maxSheetRow' => 'MaxSheetRow',
        'notification' => 'Notification',
        'pages' => 'Pages',
        'paperHorizontal' => 'PaperHorizontal',
        'paperSize' => 'PaperSize',
        'password' => 'Password',
        'projectName' => 'ProjectName',
        'quality' => 'Quality',
        'scalePercentage' => 'ScalePercentage',
        'sheetCount' => 'SheetCount',
        'sheetIndex' => 'SheetIndex',
        'showComments' => 'ShowComments',
        'sourceType' => 'SourceType',
        'sourceURI' => 'SourceURI',
        'sources' => 'Sources',
        'startPage' => 'StartPage',
        'tags' => 'Tags',
        'targetType' => 'TargetType',
        'targetURI' => 'TargetURI',
        'targetURIPrefix' => 'TargetURIPrefix',
        'trimPolicy' => 'TrimPolicy',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->credentialConfig) {
            $this->credentialConfig->validate();
        }
        if (null !== $this->notification) {
            $this->notification->validate();
        }
        if (\is_array($this->sources)) {
            Model::validateArray($this->sources);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->trimPolicy) {
            $this->trimPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toArray($noStream) : $this->credentialConfig;
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
            $res['Notification'] = null !== $this->notification ? $this->notification->toArray($noStream) : $this->notification;
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
            if (\is_array($this->sources)) {
                $res['Sources'] = [];
                $n1 = 0;
                foreach ($this->sources as $item1) {
                    $res['Sources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->startPage) {
            $res['StartPage'] = $this->startPage;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
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
            $res['TrimPolicy'] = null !== $this->trimPolicy ? $this->trimPolicy->toArray($noStream) : $this->trimPolicy;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
                $n1 = 0;
                foreach ($map['Sources'] as $item1) {
                    $model->sources[$n1++] = sources::fromMap($item1);
                }
            }
        }

        if (isset($map['StartPage'])) {
            $model->startPage = $map['StartPage'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
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
