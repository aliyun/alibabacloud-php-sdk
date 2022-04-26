<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateOfficeConversionTaskRequest extends Model
{
    /**
     * @description 链式授权
     *
     * @var AssumeRoleChain
     */
    public $assumeRoleChain;

    /**
     * @description 转换终止页，包含终止页，默认转换到最后一页，表格转图片时需要指定 SheetIndex 才有效
     *
     * @var int
     */
    public $endPage;

    /**
     * @description 表格转图片参数，是否只返回表格的第一张图片，默认为否
     *
     * @var bool
     */
    public $firstPage;

    /**
     * @description 表格转图片参数，是否将所有行输出到一张图片，默认为否
     *
     * @var bool
     */
    public $fitToHeight;

    /**
     * @description 表格转图片参数，是否将所有列输出到一张图片，默认为否
     *
     * @var bool
     */
    public $fitToWidth;

    /**
     * @description 转文本时是否保留文档中的换行符，默认不保留
     *
     * @var bool
     */
    public $holdLineFeed;

    /**
     * @description 转图片时是否转换成一张长图，最多支持将 20 页合成一张长图，超过可能报错，默认为不转成长图
     *
     * @var bool
     */
    public $longPicture;

    /**
     * @description 转文本时是否转换成长文本，默认每页是个独立的文本
     *
     * @var bool
     */
    public $longText;

    /**
     * @description 表格转图片的最大列数，在 LongPicture 为 true 时生效，默认转所有列
     *
     * @var int
     */
    public $maxSheetColumn;

    /**
     * @description 表格转图片的最大行数，在 LongPicture 为 true 时生效，默认转所有行
     *
     * @var int
     */
    public $maxSheetRow;

    /**
     * @description mns 消息通知地址
     *
     * @var string
     */
    public $notifyEndpoint;

    /**
     * @description mns 消息通知 topic
     *
     * @var string
     */
    public $notifyTopicName;

    /**
     * @description 表格转图片纸张是否水平放置，默认为否
     *
     * @var bool
     */
    public $paperHorizontal;

    /**
     * @description 表格转图片纸张大小，支持 A4/A2/A0，默认A4，配合 FitToHeight 或 FitToWidth 一起使用才有效
     *
     * @var string
     */
    public $paperSize;

    /**
     * @description 文档密码
     *
     * @var string
     */
    public $password;

    /**
     * @description 项目名称
     *
     * @var string
     */
    public $projectName;

    /**
     * @description 质量参数，范围是0-100，越大质量越好，默认系统自动选择适合的分辨率
     *
     * @var int
     */
    public $quality;

    /**
     * @description 缩放参数，允许范围 20~200，100代表不缩放，小于100表示缩小，大于100表示放大，默认不缩放
     *
     * @var int
     */
    public $scalePercentage;

    /**
     * @description 表格转图片参数，指定转换表格中的 sheet 数量，默认转换所有 sheet
     *
     * @var int
     */
    public $sheetCount;

    /**
     * @description 表格转图片参数，指定转换哪一个 sheet，从 1 开始，默认从起始页开始转
     *
     * @var int
     */
    public $sheetIndex;

    /**
     * @description 文字转图片，是否显示批注，目前只支持文字转图片时携带批注，默认不显示批注
     *
     * @var bool
     */
    public $showComments;

    /**
     * @description 输入文件格式，默认使用文件名后缀小写格式
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description 文档转换输入文件地址
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @description 转换起始页，从 1 开始，包含起始页，默认从第一页开始转换，表格转图片时需要指定 SheetIndex 才有效
     *
     * @var int
     */
    public $startPage;

    /**
     * @description 用户自定义标签
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description 输出文件格式
     *
     * @var string
     */
    public $targetType;

    /**
     * @description 文档转换输出文件地址前缀
     *
     * @var string
     */
    public $targetURIPrefix;

    /**
     * @description 表格瘦身
     *
     * @var TrimPolicy
     */
    public $trimPolicy;

    /**
     * @description 用户自定义数据，在消息通知中返回
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'assumeRoleChain' => 'AssumeRoleChain',
        'endPage'         => 'EndPage',
        'firstPage'       => 'FirstPage',
        'fitToHeight'     => 'FitToHeight',
        'fitToWidth'      => 'FitToWidth',
        'holdLineFeed'    => 'HoldLineFeed',
        'longPicture'     => 'LongPicture',
        'longText'        => 'LongText',
        'maxSheetColumn'  => 'MaxSheetColumn',
        'maxSheetRow'     => 'MaxSheetRow',
        'notifyEndpoint'  => 'NotifyEndpoint',
        'notifyTopicName' => 'NotifyTopicName',
        'paperHorizontal' => 'PaperHorizontal',
        'paperSize'       => 'PaperSize',
        'password'        => 'Password',
        'projectName'     => 'ProjectName',
        'quality'         => 'Quality',
        'scalePercentage' => 'ScalePercentage',
        'sheetCount'      => 'SheetCount',
        'sheetIndex'      => 'SheetIndex',
        'showComments'    => 'ShowComments',
        'sourceType'      => 'SourceType',
        'sourceURI'       => 'SourceURI',
        'startPage'       => 'StartPage',
        'tags'            => 'Tags',
        'targetType'      => 'TargetType',
        'targetURIPrefix' => 'TargetURIPrefix',
        'trimPolicy'      => 'TrimPolicy',
        'userData'        => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assumeRoleChain) {
            $res['AssumeRoleChain'] = null !== $this->assumeRoleChain ? $this->assumeRoleChain->toMap() : null;
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
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
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
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['AssumeRoleChain'])) {
            $model->assumeRoleChain = AssumeRoleChain::fromMap($map['AssumeRoleChain']);
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
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
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
            $model->tags = $map['Tags'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
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
