<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\documentControl\backgroundControl;

use AlibabaCloud\Tea\Model;

class bgVisibleControl extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $angle;

    /**
     * @example 0x000000
     *
     * @var string
     */
    public $fontColor;

    /**
     * @example 30
     *
     * @var int
     */
    public $fontSize;

    /**
     * @example 3
     *
     * @var int
     */
    public $horizontalNumber;

    /**
     * @example pos
     *
     * @var string
     */
    public $mode;

    /**
     * @example 100
     *
     * @var int
     */
    public $opacity;

    /**
     * @example 0.5
     *
     * @var string
     */
    public $posX;

    /**
     * @example 0.5
     *
     * @var string
     */
    public $posY;

    /**
     * @example 3
     *
     * @var int
     */
    public $verticalNumber;

    /**
     * @example hello ****
     *
     * @var string
     */
    public $visibleText;
    protected $_name = [
        'angle'            => 'Angle',
        'fontColor'        => 'FontColor',
        'fontSize'         => 'FontSize',
        'horizontalNumber' => 'HorizontalNumber',
        'mode'             => 'Mode',
        'opacity'          => 'Opacity',
        'posX'             => 'PosX',
        'posY'             => 'PosY',
        'verticalNumber'   => 'VerticalNumber',
        'visibleText'      => 'VisibleText',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return bgVisibleControl
     */
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
