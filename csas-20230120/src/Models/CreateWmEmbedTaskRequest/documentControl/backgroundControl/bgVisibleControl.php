<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\documentControl\backgroundControl;

use AlibabaCloud\Dara\Model;

class bgVisibleControl extends Model
{
    /**
     * @var int
     */
    public $angle;

    /**
     * @var string
     */
    public $fontColor;

    /**
     * @var int
     */
    public $fontSize;

    /**
     * @var int
     */
    public $horizontalNumber;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $opacity;

    /**
     * @var string
     */
    public $posX;

    /**
     * @var string
     */
    public $posY;

    /**
     * @var int
     */
    public $verticalNumber;

    /**
     * @var string
     */
    public $visibleText;
    protected $_name = [
        'angle' => 'Angle',
        'fontColor' => 'FontColor',
        'fontSize' => 'FontSize',
        'horizontalNumber' => 'HorizontalNumber',
        'mode' => 'Mode',
        'opacity' => 'Opacity',
        'posX' => 'PosX',
        'posY' => 'PosY',
        'verticalNumber' => 'VerticalNumber',
        'visibleText' => 'VisibleText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }

        if (null !== $this->fontColor) {
            $res['FontColor'] = $this->fontColor;
        }

        if (null !== $this->fontSize) {
            $res['FontSize'] = $this->fontSize;
        }

        if (null !== $this->horizontalNumber) {
            $res['HorizontalNumber'] = $this->horizontalNumber;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->opacity) {
            $res['Opacity'] = $this->opacity;
        }

        if (null !== $this->posX) {
            $res['PosX'] = $this->posX;
        }

        if (null !== $this->posY) {
            $res['PosY'] = $this->posY;
        }

        if (null !== $this->verticalNumber) {
            $res['VerticalNumber'] = $this->verticalNumber;
        }

        if (null !== $this->visibleText) {
            $res['VisibleText'] = $this->visibleText;
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
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }

        if (isset($map['FontColor'])) {
            $model->fontColor = $map['FontColor'];
        }

        if (isset($map['FontSize'])) {
            $model->fontSize = $map['FontSize'];
        }

        if (isset($map['HorizontalNumber'])) {
            $model->horizontalNumber = $map['HorizontalNumber'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Opacity'])) {
            $model->opacity = $map['Opacity'];
        }

        if (isset($map['PosX'])) {
            $model->posX = $map['PosX'];
        }

        if (isset($map['PosY'])) {
            $model->posY = $map['PosY'];
        }

        if (isset($map['VerticalNumber'])) {
            $model->verticalNumber = $map['VerticalNumber'];
        }

        if (isset($map['VisibleText'])) {
            $model->visibleText = $map['VisibleText'];
        }

        return $model;
    }
}
