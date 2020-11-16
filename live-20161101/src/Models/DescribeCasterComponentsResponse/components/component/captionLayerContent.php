<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponse\components\component;

use AlibabaCloud\Tea\Model;

class captionLayerContent extends Model
{
    /**
     * @var string
     */
    public $locationId;

    /**
     * @var int
     */
    public $ptsOffset;

    /**
     * @var int
     */
    public $wordsCount;

    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $fontName;

    /**
     * @var float
     */
    public $sizeNormalized;

    /**
     * @var float
     */
    public $borderWidthNormalized;

    /**
     * @var string
     */
    public $borderColor;

    /**
     * @var int
     */
    public $wordCountPerLine;

    /**
     * @var float
     */
    public $wordSpaceNormalized;

    /**
     * @var float
     */
    public $lineSpaceNormalized;
    protected $_name = [
        'locationId'            => 'LocationId',
        'ptsOffset'             => 'PtsOffset',
        'wordsCount'            => 'WordsCount',
        'color'                 => 'Color',
        'fontName'              => 'FontName',
        'sizeNormalized'        => 'SizeNormalized',
        'borderWidthNormalized' => 'BorderWidthNormalized',
        'borderColor'           => 'BorderColor',
        'wordCountPerLine'      => 'WordCountPerLine',
        'wordSpaceNormalized'   => 'WordSpaceNormalized',
        'lineSpaceNormalized'   => 'LineSpaceNormalized',
    ];

    public function validate()
    {
        Model::validateRequired('locationId', $this->locationId, true);
        Model::validateRequired('ptsOffset', $this->ptsOffset, true);
        Model::validateRequired('wordsCount', $this->wordsCount, true);
        Model::validateRequired('color', $this->color, true);
        Model::validateRequired('fontName', $this->fontName, true);
        Model::validateRequired('sizeNormalized', $this->sizeNormalized, true);
        Model::validateRequired('borderWidthNormalized', $this->borderWidthNormalized, true);
        Model::validateRequired('borderColor', $this->borderColor, true);
        Model::validateRequired('wordCountPerLine', $this->wordCountPerLine, true);
        Model::validateRequired('wordSpaceNormalized', $this->wordSpaceNormalized, true);
        Model::validateRequired('lineSpaceNormalized', $this->lineSpaceNormalized, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }
        if (null !== $this->ptsOffset) {
            $res['PtsOffset'] = $this->ptsOffset;
        }
        if (null !== $this->wordsCount) {
            $res['WordsCount'] = $this->wordsCount;
        }
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->fontName) {
            $res['FontName'] = $this->fontName;
        }
        if (null !== $this->sizeNormalized) {
            $res['SizeNormalized'] = $this->sizeNormalized;
        }
        if (null !== $this->borderWidthNormalized) {
            $res['BorderWidthNormalized'] = $this->borderWidthNormalized;
        }
        if (null !== $this->borderColor) {
            $res['BorderColor'] = $this->borderColor;
        }
        if (null !== $this->wordCountPerLine) {
            $res['WordCountPerLine'] = $this->wordCountPerLine;
        }
        if (null !== $this->wordSpaceNormalized) {
            $res['WordSpaceNormalized'] = $this->wordSpaceNormalized;
        }
        if (null !== $this->lineSpaceNormalized) {
            $res['LineSpaceNormalized'] = $this->lineSpaceNormalized;
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
        if (isset($map['LocationId'])) {
            $model->locationId = $map['LocationId'];
        }
        if (isset($map['PtsOffset'])) {
            $model->ptsOffset = $map['PtsOffset'];
        }
        if (isset($map['WordsCount'])) {
            $model->wordsCount = $map['WordsCount'];
        }
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['FontName'])) {
            $model->fontName = $map['FontName'];
        }
        if (isset($map['SizeNormalized'])) {
            $model->sizeNormalized = $map['SizeNormalized'];
        }
        if (isset($map['BorderWidthNormalized'])) {
            $model->borderWidthNormalized = $map['BorderWidthNormalized'];
        }
        if (isset($map['BorderColor'])) {
            $model->borderColor = $map['BorderColor'];
        }
        if (isset($map['WordCountPerLine'])) {
            $model->wordCountPerLine = $map['WordCountPerLine'];
        }
        if (isset($map['WordSpaceNormalized'])) {
            $model->wordSpaceNormalized = $map['WordSpaceNormalized'];
        }
        if (isset($map['LineSpaceNormalized'])) {
            $model->lineSpaceNormalized = $map['LineSpaceNormalized'];
        }

        return $model;
    }
}
