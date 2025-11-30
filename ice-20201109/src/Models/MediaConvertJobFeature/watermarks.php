<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertJobFeature;

use AlibabaCloud\Dara\Model;

class watermarks extends Model
{
    /**
     * @var string
     */
    public $adaptive;

    /**
     * @var string
     */
    public $borderColor;

    /**
     * @var string
     */
    public $borderWidth;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $fontAlpha;

    /**
     * @var string
     */
    public $fontColor;

    /**
     * @var string
     */
    public $fontName;

    /**
     * @var string
     */
    public $fontSize;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $x;

    /**
     * @var string
     */
    public $y;
    protected $_name = [
        'adaptive' => 'Adaptive',
        'borderColor' => 'BorderColor',
        'borderWidth' => 'BorderWidth',
        'content' => 'Content',
        'fontAlpha' => 'FontAlpha',
        'fontColor' => 'FontColor',
        'fontName' => 'FontName',
        'fontSize' => 'FontSize',
        'height' => 'Height',
        'templateId' => 'TemplateId',
        'type' => 'Type',
        'width' => 'Width',
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adaptive) {
            $res['Adaptive'] = $this->adaptive;
        }

        if (null !== $this->borderColor) {
            $res['BorderColor'] = $this->borderColor;
        }

        if (null !== $this->borderWidth) {
            $res['BorderWidth'] = $this->borderWidth;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->fontAlpha) {
            $res['FontAlpha'] = $this->fontAlpha;
        }

        if (null !== $this->fontColor) {
            $res['FontColor'] = $this->fontColor;
        }

        if (null !== $this->fontName) {
            $res['FontName'] = $this->fontName;
        }

        if (null !== $this->fontSize) {
            $res['FontSize'] = $this->fontSize;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        if (null !== $this->x) {
            $res['X'] = $this->x;
        }

        if (null !== $this->y) {
            $res['Y'] = $this->y;
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
        if (isset($map['Adaptive'])) {
            $model->adaptive = $map['Adaptive'];
        }

        if (isset($map['BorderColor'])) {
            $model->borderColor = $map['BorderColor'];
        }

        if (isset($map['BorderWidth'])) {
            $model->borderWidth = $map['BorderWidth'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['FontAlpha'])) {
            $model->fontAlpha = $map['FontAlpha'];
        }

        if (isset($map['FontColor'])) {
            $model->fontColor = $map['FontColor'];
        }

        if (isset($map['FontName'])) {
            $model->fontName = $map['FontName'];
        }

        if (isset($map['FontSize'])) {
            $model->fontSize = $map['FontSize'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        if (isset($map['X'])) {
            $model->x = $map['X'];
        }

        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
