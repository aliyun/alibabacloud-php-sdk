<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component;

use AlibabaCloud\Tea\Model;

class captionLayerContent extends Model
{
    /**
     * @var string
     */
    public $borderColor;

    /**
     * @var float
     */
    public $borderWidthNormalized;

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
    public $lineSpaceNormalized;

    /**
     * @var string
     */
    public $locationId;

    /**
     * @var int
     */
    public $ptsOffset;

    /**
     * @var bool
     */
    public $showSourceLan;

    /**
     * @var float
     */
    public $sizeNormalized;

    /**
     * @var string
     */
    public $sourceLan;

    /**
     * @var string
     */
    public $targetLan;

    /**
     * @var int
     */
    public $wordCountPerLine;

    /**
     * @var float
     */
    public $wordSpaceNormalized;

    /**
     * @var int
     */
    public $wordsCount;
    protected $_name = [
        'borderColor'           => 'BorderColor',
        'borderWidthNormalized' => 'BorderWidthNormalized',
        'color'                 => 'Color',
        'fontName'              => 'FontName',
        'lineSpaceNormalized'   => 'LineSpaceNormalized',
        'locationId'            => 'LocationId',
        'ptsOffset'             => 'PtsOffset',
        'showSourceLan'         => 'ShowSourceLan',
        'sizeNormalized'        => 'SizeNormalized',
        'sourceLan'             => 'SourceLan',
        'targetLan'             => 'TargetLan',
        'wordCountPerLine'      => 'WordCountPerLine',
        'wordSpaceNormalized'   => 'WordSpaceNormalized',
        'wordsCount'            => 'WordsCount',
    ];

    public function validate()
    {
    }

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
