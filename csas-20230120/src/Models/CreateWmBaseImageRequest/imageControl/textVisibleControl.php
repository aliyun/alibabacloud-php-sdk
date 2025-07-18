<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmBaseImageRequest\imageControl;

use AlibabaCloud\Tea\Model;

class textVisibleControl extends Model
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
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $opacity;

    /**
     * @var float
     */
    public $posAx;

    /**
     * @var float
     */
    public $posAy;

    /**
     * @var int
     */
    public $posX;

    /**
     * @var int
     */
    public $posY;

    /**
     * @var int
     */
    public $spaceX;

    /**
     * @var int
     */
    public $spaceY;

    /**
     * @var bool
     */
    public $visible;

    /**
     * @var string
     */
    public $visibleText;
    protected $_name = [
        'angle' => 'Angle',
        'fontColor' => 'FontColor',
        'fontSize' => 'FontSize',
        'mode' => 'Mode',
        'opacity' => 'Opacity',
        'posAx' => 'PosAx',
        'posAy' => 'PosAy',
        'posX' => 'PosX',
        'posY' => 'PosY',
        'spaceX' => 'SpaceX',
        'spaceY' => 'SpaceY',
        'visible' => 'Visible',
        'visibleText' => 'VisibleText',
    ];

    public function validate() {}

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
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->opacity) {
            $res['Opacity'] = $this->opacity;
        }
        if (null !== $this->posAx) {
            $res['PosAx'] = $this->posAx;
        }
        if (null !== $this->posAy) {
            $res['PosAy'] = $this->posAy;
        }
        if (null !== $this->posX) {
            $res['PosX'] = $this->posX;
        }
        if (null !== $this->posY) {
            $res['PosY'] = $this->posY;
        }
        if (null !== $this->spaceX) {
            $res['SpaceX'] = $this->spaceX;
        }
        if (null !== $this->spaceY) {
            $res['SpaceY'] = $this->spaceY;
        }
        if (null !== $this->visible) {
            $res['Visible'] = $this->visible;
        }
        if (null !== $this->visibleText) {
            $res['VisibleText'] = $this->visibleText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textVisibleControl
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
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Opacity'])) {
            $model->opacity = $map['Opacity'];
        }
        if (isset($map['PosAx'])) {
            $model->posAx = $map['PosAx'];
        }
        if (isset($map['PosAy'])) {
            $model->posAy = $map['PosAy'];
        }
        if (isset($map['PosX'])) {
            $model->posX = $map['PosX'];
        }
        if (isset($map['PosY'])) {
            $model->posY = $map['PosY'];
        }
        if (isset($map['SpaceX'])) {
            $model->spaceX = $map['SpaceX'];
        }
        if (isset($map['SpaceY'])) {
            $model->spaceY = $map['SpaceY'];
        }
        if (isset($map['Visible'])) {
            $model->visible = $map['Visible'];
        }
        if (isset($map['VisibleText'])) {
            $model->visibleText = $map['VisibleText'];
        }

        return $model;
    }
}
