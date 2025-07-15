<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLiveAISubtitleRequest extends Model
{
    /**
     * @description The background color of the subtitles, which is an RGBA value.
     *
     * @example 0xFF0000
     *
     * @var string
     */
    public $bgColor;

    /**
     * @description The background size of the subtitles. Valid values: [0,1].
     *
     * @example 0.09
     *
     * @var float
     */
    public $bgWidthNormalized;

    /**
     * @description The font weight. Valid values: [0,1].
     *
     * @example 0.05
     *
     * @var float
     */
    public $borderWidthNormalized;

    /**
     * @description The subtitle template that you copy. Set the value to the name of the subtitle template.
     *
     * @example sub01
     *
     * @var string
     */
    public $copyFrom;

    /**
     * @description The custom description of the subtitle template. The description can be up to 128 characters in length and can contain letters, digits, and special characters.
     *
     * @example live AI subtitle template
     *
     * @var string
     */
    public $description;

    /**
     * @description The target language. Valid values:
     * - en-US: English
     * - zh-CN: Chinese
     * - es-ES: Spanish
     * - ru-RU: Russian
     *
     * @example zh-CN
     *
     * @var string
     */
    public $dstLanguage;

    /**
     * @description The font color, which is an RGBA value.
     *
     * @example 0xFFFFFF
     *
     * @var string
     */
    public $fontColor;

    /**
     * @description The font. Valid values:
     * - KaiTi (default)
     * - AlibabaPuHuiTi-Regular
     * - AlibabaPuHuiTi-Bold
     * - AlibabaPuHuiTi-Light
     * - NotoSansHans-Regular
     * - NotoSansHans-Bold
     * - NotoSansHans-Light
     *
     * @example KaiTi
     *
     * @var string
     */
    public $fontName;

    /**
     * @description The font size. Valid values: [0,1].
     *
     * This parameter is required.
     *
     * @example 0.037
     *
     * @var float
     */
    public $fontSizeNormalized;

    /**
     * @description The preview height. Unit: pixels.
     * The following specifications of preview width × preview height are supported:
     * - Landscape low definition 360p (640×360)
     * - Portrait low definition 360p (360×640)
     * - Landscape standard definition 480p (854×480)
     * - Portrait standard definition 480p (480×854)
     * - Landscape high definition 720p (1280×720)
     * - Portrait high definition 720p (720×1280)
     * - Landscape ultra-high definition 1080p (1920×1080)
     * - Portrait ultra-high definition 1080p (1080×1920)
     *
     * @example 720
     *
     * @var string
     */
    public $height;

    /**
     * @description The number of displayed lines.
     *
     * @example 2
     *
     * @var int
     */
    public $maxLines;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The position of the subtitles. The value is a pair of coordinates for which the origin of the x and y axes is the lower-left corner of the screen.
     *
     * This parameter is required.
     *
     * @var float[]
     */
    public $positionNormalized;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to display the source language. Default value: false.
     *
     * @example true
     *
     * @var bool
     */
    public $showSourceLan;

    /**
     * @description The source language. Valid values:
     * - en-US: English
     * - zh-CN: Chinese
     * - ru-RU: Russian
     *
     * This parameter is required.
     *
     * @example zh-CN
     *
     * @var string
     */
    public $srcLanguage;

    /**
     * @description The name of the subtitle template. The name can contain only digits, letters, and hyphens (-). The name cannot start with a hyphen.
     *
     * This parameter is required.
     *
     * @example sub01
     *
     * @var string
     */
    public $subtitleName;

    /**
     * @description The preview width. Unit: pixels.
     *
     * @example 1280
     *
     * @var string
     */
    public $width;

    /**
     * @description The number of words displayed per line. Valid values: integers from 1 to 500.
     *
     * This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $wordPerLine;
    protected $_name = [
        'bgColor' => 'BgColor',
        'bgWidthNormalized' => 'BgWidthNormalized',
        'borderWidthNormalized' => 'BorderWidthNormalized',
        'copyFrom' => 'CopyFrom',
        'description' => 'Description',
        'dstLanguage' => 'DstLanguage',
        'fontColor' => 'FontColor',
        'fontName' => 'FontName',
        'fontSizeNormalized' => 'FontSizeNormalized',
        'height' => 'Height',
        'maxLines' => 'MaxLines',
        'ownerId' => 'OwnerId',
        'positionNormalized' => 'PositionNormalized',
        'regionId' => 'RegionId',
        'showSourceLan' => 'ShowSourceLan',
        'srcLanguage' => 'SrcLanguage',
        'subtitleName' => 'SubtitleName',
        'width' => 'Width',
        'wordPerLine' => 'WordPerLine',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgColor) {
            $res['BgColor'] = $this->bgColor;
        }
        if (null !== $this->bgWidthNormalized) {
            $res['BgWidthNormalized'] = $this->bgWidthNormalized;
        }
        if (null !== $this->borderWidthNormalized) {
            $res['BorderWidthNormalized'] = $this->borderWidthNormalized;
        }
        if (null !== $this->copyFrom) {
            $res['CopyFrom'] = $this->copyFrom;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dstLanguage) {
            $res['DstLanguage'] = $this->dstLanguage;
        }
        if (null !== $this->fontColor) {
            $res['FontColor'] = $this->fontColor;
        }
        if (null !== $this->fontName) {
            $res['FontName'] = $this->fontName;
        }
        if (null !== $this->fontSizeNormalized) {
            $res['FontSizeNormalized'] = $this->fontSizeNormalized;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->maxLines) {
            $res['MaxLines'] = $this->maxLines;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->positionNormalized) {
            $res['PositionNormalized'] = $this->positionNormalized;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->showSourceLan) {
            $res['ShowSourceLan'] = $this->showSourceLan;
        }
        if (null !== $this->srcLanguage) {
            $res['SrcLanguage'] = $this->srcLanguage;
        }
        if (null !== $this->subtitleName) {
            $res['SubtitleName'] = $this->subtitleName;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->wordPerLine) {
            $res['WordPerLine'] = $this->wordPerLine;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLiveAISubtitleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgColor'])) {
            $model->bgColor = $map['BgColor'];
        }
        if (isset($map['BgWidthNormalized'])) {
            $model->bgWidthNormalized = $map['BgWidthNormalized'];
        }
        if (isset($map['BorderWidthNormalized'])) {
            $model->borderWidthNormalized = $map['BorderWidthNormalized'];
        }
        if (isset($map['CopyFrom'])) {
            $model->copyFrom = $map['CopyFrom'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DstLanguage'])) {
            $model->dstLanguage = $map['DstLanguage'];
        }
        if (isset($map['FontColor'])) {
            $model->fontColor = $map['FontColor'];
        }
        if (isset($map['FontName'])) {
            $model->fontName = $map['FontName'];
        }
        if (isset($map['FontSizeNormalized'])) {
            $model->fontSizeNormalized = $map['FontSizeNormalized'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['MaxLines'])) {
            $model->maxLines = $map['MaxLines'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PositionNormalized'])) {
            if (!empty($map['PositionNormalized'])) {
                $model->positionNormalized = $map['PositionNormalized'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShowSourceLan'])) {
            $model->showSourceLan = $map['ShowSourceLan'];
        }
        if (isset($map['SrcLanguage'])) {
            $model->srcLanguage = $map['SrcLanguage'];
        }
        if (isset($map['SubtitleName'])) {
            $model->subtitleName = $map['SubtitleName'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['WordPerLine'])) {
            $model->wordPerLine = $map['WordPerLine'];
        }

        return $model;
    }
}
