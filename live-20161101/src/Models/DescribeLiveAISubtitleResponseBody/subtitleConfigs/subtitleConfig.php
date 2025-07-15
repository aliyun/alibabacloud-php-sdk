<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAISubtitleResponseBody\subtitleConfigs;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAISubtitleResponseBody\subtitleConfigs\subtitleConfig\positionNormalized;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAISubtitleResponseBody\subtitleConfigs\subtitleConfig\rulesRefer;
use AlibabaCloud\Tea\Model;

class subtitleConfig extends Model
{
    /**
     * @description The background color of the subtitles.
     *
     * @example 0xFF0000
     *
     * @var string
     */
    public $bgColor;

    /**
     * @description The size of the background image.
     *
     * @example 0.09
     *
     * @var float
     */
    public $bgWidthNormalized;

    /**
     * @description The font weight.
     *
     * @example 0.05
     *
     * @var float
     */
    public $borderWidthNormalized;

    /**
     * @description The description of the template.
     *
     * @example live AI subtitle template
     *
     * @var string
     */
    public $description;

    /**
     * @description The language to which the subtitles are translated.
     *
     * @example zh-CN
     *
     * @var string
     */
    public $dstLanguage;

    /**
     * @description The font color.
     *
     * @example 0xFFFFFF
     *
     * @var string
     */
    public $fontColor;

    /**
     * @description The font.
     *
     * @example AlibabaPuHuiTi-Regular
     *
     * @var string
     */
    public $fontName;

    /**
     * @description The font size.
     *
     * @example 0.037
     *
     * @var string
     */
    public $fontSizeNormalized;

    /**
     * @description The height of the preview image.
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
     * @description The position of the subtitles.
     *
     * @var positionNormalized
     */
    public $positionNormalized;

    /**
     * @description The ID of the subtitle rule.
     *
     * @var rulesRefer
     */
    public $rulesRefer;

    /**
     * @description Indicates whether the source language of the subtitle is displayed.
     *
     * @example true
     *
     * @var int
     */
    public $showSourceLan;

    /**
     * @description The source language of the subtitles.
     *
     * @example zh-CN
     *
     * @var string
     */
    public $srcLanguage;

    /**
     * @description The ID of the subtitle template.
     *
     * @example 597991f3-6ef9-4100-9238-82951de1****
     *
     * @var string
     */
    public $subtitleId;

    /**
     * @description The name of the subtitle template.
     *
     * @example sub1
     *
     * @var string
     */
    public $subtitleName;

    /**
     * @description The width of the preview image.
     *
     * @example 1280
     *
     * @var string
     */
    public $width;

    /**
     * @description The number of words per line.
     *
     * @example 20
     *
     * @var int
     */
    public $wordPerline;
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
        'positionNormalized' => 'PositionNormalized',
        'rulesRefer' => 'RulesRefer',
        'showSourceLan' => 'ShowSourceLan',
        'srcLanguage' => 'SrcLanguage',
        'subtitleId' => 'SubtitleId',
        'subtitleName' => 'SubtitleName',
        'width' => 'Width',
        'wordPerline' => 'WordPerline',
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
        if (null !== $this->positionNormalized) {
            $res['PositionNormalized'] = null !== $this->positionNormalized ? $this->positionNormalized->toMap() : null;
        }
        if (null !== $this->rulesRefer) {
            $res['RulesRefer'] = null !== $this->rulesRefer ? $this->rulesRefer->toMap() : null;
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
        if (null !== $this->wordPerline) {
            $res['WordPerline'] = $this->wordPerline;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subtitleConfig
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
        if (isset($map['PositionNormalized'])) {
            $model->positionNormalized = positionNormalized::fromMap($map['PositionNormalized']);
        }
        if (isset($map['RulesRefer'])) {
            $model->rulesRefer = rulesRefer::fromMap($map['RulesRefer']);
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
        if (isset($map['WordPerline'])) {
            $model->wordPerline = $map['WordPerline'];
        }

        return $model;
    }
}
