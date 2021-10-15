<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateOfficeConversionTaskRequest extends Model
{
    /**
     * @description 结束转换页，如果是 excel 需要指定 SheetIndex
     *
     * @var string
     */
    public $endPage;

    /**
     * @description 表格转图片参数，只返回表格的第一张图片，图片包含的行数列数是自动切割的结果。必须在LongPic为true的情况下才有效。默认为false
     *
     * @var bool
     */
    public $firstPage;

    /**
     * @description 表格转图片，所有行输出到一张图片
     *
     * @var bool
     */
    public $fitToHeight;

    /**
     * @description 表格转图片，所有列输出到一张图片
     *
     * @var bool
     */
    public $fitToWidth;

    /**
     * @description 水平放置纸张，默认 false
     *
     * @var bool
     */
    public $isHorizontal;

    /**
     * @description 转图片，合成一个一张产长图，最多20张图片，默认 false
     *
     * @var bool
     */
    public $longPic;

    /**
     * @description mns 消息地址
     *
     * @var string
     */
    public $notifyEndpoint;

    /**
     * @description mns 消息 topic
     *
     * @var string
     */
    public $notifyTopicName;

    /**
     * @description 纸张大小 A4, A2, A0，默认 A4
     *
     * @var string
     */
    public $paperSize;

    /**
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
     * @description 转化质量0~100
     *
     * @var int
     */
    public $quality;

    /**
     * @description 缩放大小 20~200，默认100，小于100缩放，大于100放大
     *
     * @var int
     */
    public $scale;

    /**
     * @description excel 转换 sheet 的数量，默认转换所有
     *
     * @var string
     */
    public $sheetCount;

    /**
     * @description excel 标签页，从 1 开始
     *
     * @var int
     */
    public $sheetIndex;

    /**
     * @description 显示批注
     *
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
    public $sourceUri;

    /**
     * @description 开始转换页，如果是 excel 需要指定 SheetIndex
     *
     * @var string
     */
    public $startPage;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $targetUri;

    /**
     * @description 用户自定义信息，此信息将在 Task 中回传
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'endPage'         => 'EndPage',
        'firstPage'       => 'FirstPage',
        'fitToHeight'     => 'FitToHeight',
        'fitToWidth'      => 'FitToWidth',
        'isHorizontal'    => 'IsHorizontal',
        'longPic'         => 'LongPic',
        'notifyEndpoint'  => 'NotifyEndpoint',
        'notifyTopicName' => 'NotifyTopicName',
        'paperSize'       => 'PaperSize',
        'password'        => 'Password',
        'projectName'     => 'ProjectName',
        'quality'         => 'Quality',
        'scale'           => 'Scale',
        'sheetCount'      => 'SheetCount',
        'sheetIndex'      => 'SheetIndex',
        'showComments'    => 'ShowComments',
        'sourceType'      => 'SourceType',
        'sourceUri'       => 'SourceUri',
        'startPage'       => 'StartPage',
        'targetType'      => 'TargetType',
        'targetUri'       => 'TargetUri',
        'userData'        => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->isHorizontal) {
            $res['IsHorizontal'] = $this->isHorizontal;
        }
        if (null !== $this->longPic) {
            $res['LongPic'] = $this->longPic;
        }
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
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
        if (null !== $this->scale) {
            $res['Scale'] = $this->scale;
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
        if (null !== $this->sourceUri) {
            $res['SourceUri'] = $this->sourceUri;
        }
        if (null !== $this->startPage) {
            $res['StartPage'] = $this->startPage;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->targetUri) {
            $res['TargetUri'] = $this->targetUri;
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
        if (isset($map['IsHorizontal'])) {
            $model->isHorizontal = $map['IsHorizontal'];
        }
        if (isset($map['LongPic'])) {
            $model->longPic = $map['LongPic'];
        }
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
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
        if (isset($map['Scale'])) {
            $model->scale = $map['Scale'];
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
        if (isset($map['SourceUri'])) {
            $model->sourceUri = $map['SourceUri'];
        }
        if (isset($map['StartPage'])) {
            $model->startPage = $map['StartPage'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TargetUri'])) {
            $model->targetUri = $map['TargetUri'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
