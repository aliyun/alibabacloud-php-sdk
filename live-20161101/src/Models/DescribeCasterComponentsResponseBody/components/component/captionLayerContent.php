<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component;

use AlibabaCloud\Tea\Model;

class captionLayerContent extends Model
{
    /**
     * @description The color of the text border.
     *
     * Valid values: **0x000000 to 0xffffff**. If the value of this parameter is "", this parameter does not take effect.
     *
     * @example 0x000000
     *
     * @var string
     */
    public $borderColor;

    /**
     * @description The normalized value of the width of the text border. The value of this parameter equals the border width divided by the font size.
     *
     * The maximum width of the text border is **16**, even if the border width calculated based on this parameter is greater than **16**.
     *
     * @example 0
     *
     * @var float
     */
    public $borderWidthNormalized;

    /**
     * @description The color of the text. Valid values: **0x000000 to 0xffffff**.
     *
     * @example 0x000000
     *
     * @var string
     */
    public $color;

    /**
     * @description The font of the text, which is specified by the system. Valid values:
     *
     *   **KaiTi**
     *   **AlibabaPuHuiTi-Regular**
     *   **AlibabaPuHuiTi-Bold**
     *   **NAlibabaPuHuiTi-Light**
     *   **NotoSansHans-Regular**
     *   **NotoSansHans-Bold**
     *   **NotoSansHans-Light**
     ****
     * @example KaiTi
     *
     * @var string
     */
    public $fontName;

    /**
     * @description The line spacing, which indicates the interval between every two lines.
     *
     * @example 0
     *
     * @var float
     */
    public $lineSpaceNormalized;

    /**
     * @description The location ID of the component. If the value of the ComponentType parameter is caption, the LocationId parameter indicates the channel ID of the video source that is referenced by the component.
     *
     * @example RV01
     *
     * @var string
     */
    public $locationId;

    /**
     * @description The offset between the presentation timestamps (PTS) of the subtitles and the audio.
     *
     * Valid values: **-10000 to 10000**. Default value: **0**.
     *
     * @example 0
     *
     * @var int
     */
    public $ptsOffset;

    /**
     * @description Indicates whether the source language of the subtitles is displayed. Valid values:
     *
     *   **true**: The source language is displayed.
     *   **false**: The source language is not displayed.
     *
     * @example false
     *
     * @var bool
     */
    public $showSourceLan;

    /**
     * @description The normalized value of the font size of the subtitles. The value of this parameter equals the font size divided by the output height.``
     *
     * The maximum font size of the subtitles is **1,024**, even if the font size calculated based on this parameter is greater than **1,024**. If the value of this parameter is **-1**, this parameter does not take effect.
     *
     * @example 0.1
     *
     * @var float
     */
    public $sizeNormalized;

    /**
     * @description The source language of the audio in the video source. Valid values:
     *
     *   **en**: English
     *   **cn**: Chinese
     *   **es**: Spanish
     *   **ru**: Russian
     *
     * @example cn
     *
     * @var string
     */
    public $sourceLan;

    /**
     * @description The target language of the audio in the video source. Valid values:
     *
     *   **en**: English
     *   **cn**: Chinese
     *   **es**: Spanish
     *   **ru**: Russian
     *
     * @example cn
     *
     * @var string
     */
    public $targetLan;

    /**
     * @description The maximum number of words displayed in each line.
     *
     * @example 15
     *
     * @var int
     */
    public $wordCountPerLine;

    /**
     * @description The word spacing, which indicates the interval between every two words.
     *
     * @example 0
     *
     * @var float
     */
    public $wordSpaceNormalized;

    /**
     * @description The number of words displayed on the component. The value of this parameter can be specified based on the font size.
     *
     * Valid values: **10 to 50**.
     *
     * @example 35
     *
     * @var int
     */
    public $wordsCount;
    protected $_name = [
        'borderColor' => 'BorderColor',
        'borderWidthNormalized' => 'BorderWidthNormalized',
        'color' => 'Color',
        'fontName' => 'FontName',
        'lineSpaceNormalized' => 'LineSpaceNormalized',
        'locationId' => 'LocationId',
        'ptsOffset' => 'PtsOffset',
        'showSourceLan' => 'ShowSourceLan',
        'sizeNormalized' => 'SizeNormalized',
        'sourceLan' => 'SourceLan',
        'targetLan' => 'TargetLan',
        'wordCountPerLine' => 'WordCountPerLine',
        'wordSpaceNormalized' => 'WordSpaceNormalized',
        'wordsCount' => 'WordsCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->borderColor) {
            $res['BorderColor'] = $this->borderColor;
        }
        if (null !== $this->borderWidthNormalized) {
            $res['BorderWidthNormalized'] = $this->borderWidthNormalized;
        }
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->fontName) {
            $res['FontName'] = $this->fontName;
        }
        if (null !== $this->lineSpaceNormalized) {
            $res['LineSpaceNormalized'] = $this->lineSpaceNormalized;
        }
        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }
        if (null !== $this->ptsOffset) {
            $res['PtsOffset'] = $this->ptsOffset;
        }
        if (null !== $this->showSourceLan) {
            $res['ShowSourceLan'] = $this->showSourceLan;
        }
        if (null !== $this->sizeNormalized) {
            $res['SizeNormalized'] = $this->sizeNormalized;
        }
        if (null !== $this->sourceLan) {
            $res['SourceLan'] = $this->sourceLan;
        }
        if (null !== $this->targetLan) {
            $res['TargetLan'] = $this->targetLan;
        }
        if (null !== $this->wordCountPerLine) {
            $res['WordCountPerLine'] = $this->wordCountPerLine;
        }
        if (null !== $this->wordSpaceNormalized) {
            $res['WordSpaceNormalized'] = $this->wordSpaceNormalized;
        }
        if (null !== $this->wordsCount) {
            $res['WordsCount'] = $this->wordsCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return captionLayerContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BorderColor'])) {
            $model->borderColor = $map['BorderColor'];
        }
        if (isset($map['BorderWidthNormalized'])) {
            $model->borderWidthNormalized = $map['BorderWidthNormalized'];
        }
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['FontName'])) {
            $model->fontName = $map['FontName'];
        }
        if (isset($map['LineSpaceNormalized'])) {
            $model->lineSpaceNormalized = $map['LineSpaceNormalized'];
        }
        if (isset($map['LocationId'])) {
            $model->locationId = $map['LocationId'];
        }
        if (isset($map['PtsOffset'])) {
            $model->ptsOffset = $map['PtsOffset'];
        }
        if (isset($map['ShowSourceLan'])) {
            $model->showSourceLan = $map['ShowSourceLan'];
        }
        if (isset($map['SizeNormalized'])) {
            $model->sizeNormalized = $map['SizeNormalized'];
        }
        if (isset($map['SourceLan'])) {
            $model->sourceLan = $map['SourceLan'];
        }
        if (isset($map['TargetLan'])) {
            $model->targetLan = $map['TargetLan'];
        }
        if (isset($map['WordCountPerLine'])) {
            $model->wordCountPerLine = $map['WordCountPerLine'];
        }
        if (isset($map['WordSpaceNormalized'])) {
            $model->wordSpaceNormalized = $map['WordSpaceNormalized'];
        }
        if (isset($map['WordsCount'])) {
            $model->wordsCount = $map['WordsCount'];
        }

        return $model;
    }
}
