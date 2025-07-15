<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateLiveAISubtitleRequest extends Model
{
    /**
     * @description The background color of the subtitles. Color format: RGBA.
     *
     * @example 0xFF0000
     *
     * @var string
     */
    public $bgColor;

    /**
     * @description The size of the background box. Valid values: [0,1].
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
     * @description The description of the subtitle template. The description can be up to 128 characters in length and can contain letters, digits, and special characters.
     *
     * @example live AI subtitle template
     *
     * @var string
     */
    public $description;

    /**
     * @description The target language. Valid values:
     *
     *   en-US: English
     *   zh-CN: Chinese
     *   es-ES: Spanish
     *   ru-RU: Russian
     *
     * @example zh-CN
     *
     * @var string
     */
    public $dstLanguage;

    /**
     * @description The font color. Color format: RGBA.
     *
     * @example 0xFFFFFF
     *
     * @var string
     */
    public $fontColor;

    /**
     * @description The font. Valid values:
     *
     *   KaiTi (default)
     *   AlibabaPuHuiTi-Regular
     *   AlibabaPuHuiTi-Bold
     *   AlibabaPuHuiTi-Light
     *   NotoSansHans-Regular
     *   NotoSansHans-Bold
     *   NotoSansHans-Light
     *
     * @example KaiTi
     *
     * @var string
     */
    public $fontName;

    /**
     * @description The font size. Valid values: [0,1].
     *
     * @example 0.037
     *
     * @var float
     */
    public $fontSizeNormalized;

    /**
     * @description The height of the preview. Unit: pixels.
     *
     * The following preview specifications (width x height) are supported:
     *
     *   360p (640 x 360)
     *   360p (360 x 640)
     *   480p (854 x 480)
     *   480p (480 x 854)
     *   720p (1280 x 720)
     *   720p (720 x 1280)
     *   1080p (1920 x 1080)
     *   1080p (1080 x 1920)
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
     * @description The position of the subtitles relative to the lower-left corner of the screen. The value is a pair of coordinates.
     *
     * @var float[]
     */
    public $positionNormalized;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to display the source language. Valid values: true and false. Default value: false.
     *
     * @example true
     *
     * @var bool
     */
    public $showSourceLan;

    /**
     * @description The source language. Valid values:
     *
     *   en-US: English
     *   zh-CN: Chinese
     *   ru-RU: Russian
     *
     * @example zh-CN
     *
     * @var string
     */
    public $srcLanguage;

    /**
     * @description The ID of the subtitle template.
     *
     * This parameter is required.
     *
     * @example 597991f3-6ef9-4100-9238-82951de1****
     *
     * @var string
     */
    public $subtitleId;

    /**
     * @description The name of the subtitle template. The name can contain digits, letters, and hyphens (-) but cannot start with a hyphen (-).
     *
     * @example live AI subtitle template
     *
     * @var string
     */
    public $subtitleName;

    /**
     * @description The width of the preview. Unit: pixels.
     *
     * @example 1280
     *
     * @var string
     */
    public $width;

    /**
     * @description The number of characters per line. Valid values: 1 to 500.
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
        'subtitleId' => 'SubtitleId',
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
        if (null !== $this->subtitleId) {
            $res['SubtitleId'] = $this->subtitleId;
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
     * @return UpdateLiveAISubtitleRequest
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
        if (isset($map['SubtitleId'])) {
            $model->subtitleId = $map['SubtitleId'];
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
