<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\videoControl;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\videoControl\textVisibleControl\margin;

class textVisibleControl extends Model
{
    /**
     * @var string
     */
    public $fontColor;

    /**
     * @var int
     */
    public $fontSize;

    /**
     * @var margin
     */
    public $margin;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $opacity;

    /**
     * @var int
     */
    public $posX;

    /**
     * @var int
     */
    public $posY;

    /**
     * @var bool
     */
    public $visible;

    /**
     * @var string
     */
    public $visibleText;
    protected $_name = [
        'fontColor' => 'FontColor',
        'fontSize' => 'FontSize',
        'margin' => 'Margin',
        'mode' => 'Mode',
        'opacity' => 'Opacity',
        'posX' => 'PosX',
        'posY' => 'PosY',
        'visible' => 'Visible',
        'visibleText' => 'VisibleText',
    ];

    public function validate()
    {
        if (null !== $this->margin) {
            $this->margin->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fontColor) {
            $res['FontColor'] = $this->fontColor;
        }

        if (null !== $this->fontSize) {
            $res['FontSize'] = $this->fontSize;
        }

        if (null !== $this->margin) {
            $res['Margin'] = null !== $this->margin ? $this->margin->toArray($noStream) : $this->margin;
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

        if (null !== $this->visible) {
            $res['Visible'] = $this->visible;
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
        if (isset($map['FontColor'])) {
            $model->fontColor = $map['FontColor'];
        }

        if (isset($map['FontSize'])) {
            $model->fontSize = $map['FontSize'];
        }

        if (isset($map['Margin'])) {
            $model->margin = margin::fromMap($map['Margin']);
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

        if (isset($map['Visible'])) {
            $model->visible = $map['Visible'];
        }

        if (isset($map['VisibleText'])) {
            $model->visibleText = $map['VisibleText'];
        }

        return $model;
    }
}
