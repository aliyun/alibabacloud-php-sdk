<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmBaseImageRequest\imageControl;

use AlibabaCloud\Dara\Model;

class logoVisibleControl extends Model
{
    /**
     * @var int
     */
    public $angle;

    /**
     * @var string
     */
    public $logoBase64;

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
    protected $_name = [
        'angle' => 'Angle',
        'logoBase64' => 'LogoBase64',
        'mode' => 'Mode',
        'opacity' => 'Opacity',
        'posAx' => 'PosAx',
        'posAy' => 'PosAy',
        'posX' => 'PosX',
        'posY' => 'PosY',
        'spaceX' => 'SpaceX',
        'spaceY' => 'SpaceY',
        'visible' => 'Visible',
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

        if (null !== $this->logoBase64) {
            $res['LogoBase64'] = $this->logoBase64;
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

        if (isset($map['LogoBase64'])) {
            $model->logoBase64 = $map['LogoBase64'];
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

        return $model;
    }
}
