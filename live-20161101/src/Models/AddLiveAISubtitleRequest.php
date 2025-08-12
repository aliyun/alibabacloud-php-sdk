<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class AddLiveAISubtitleRequest extends Model
{
    /**
     * @var string
     */
    public $bgColor;

    /**
     * @var float
     */
    public $bgWidthNormalized;

    /**
     * @var float
     */
    public $borderWidthNormalized;

    /**
     * @var string
     */
    public $copyFrom;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dstLanguage;

    /**
     * @var string
     */
    public $fontColor;

    /**
     * @var string
     */
    public $fontName;

    /**
     * @var float
     */
    public $fontSizeNormalized;

    /**
     * @var string
     */
    public $height;

    /**
     * @var int
     */
    public $maxLines;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var float[]
     */
    public $positionNormalized;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $showSourceLan;

    /**
     * @var string
     */
    public $srcLanguage;

    /**
     * @var string
     */
    public $subtitleName;

    /**
     * @var string
     */
    public $width;

    /**
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

    public function validate()
    {
        if (\is_array($this->positionNormalized)) {
            Model::validateArray($this->positionNormalized);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->positionNormalized)) {
                $res['PositionNormalized'] = [];
                $n1 = 0;
                foreach ($this->positionNormalized as $item1) {
                    $res['PositionNormalized'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->positionNormalized = [];
                $n1 = 0;
                foreach ($map['PositionNormalized'] as $item1) {
                    $model->positionNormalized[$n1] = $item1;
                    ++$n1;
                }
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
