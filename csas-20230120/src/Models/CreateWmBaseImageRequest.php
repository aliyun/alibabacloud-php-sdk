<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class CreateWmBaseImageRequest extends Model
{
    /**
     * @var int
     */
    public $height;
    /**
     * @var int
     */
    public $opacity;
    /**
     * @var int
     */
    public $scale;
    /**
     * @var int
     */
    public $width;
    /**
     * @var string
     */
    public $wmInfoBytesB64;
    /**
     * @var int
     */
    public $wmInfoSize;
    /**
     * @var string
     */
    public $wmInfoUint;
    /**
     * @var string
     */
    public $wmType;
    protected $_name = [
        'height'         => 'Height',
        'opacity'        => 'Opacity',
        'scale'          => 'Scale',
        'width'          => 'Width',
        'wmInfoBytesB64' => 'WmInfoBytesB64',
        'wmInfoSize'     => 'WmInfoSize',
        'wmInfoUint'     => 'WmInfoUint',
        'wmType'         => 'WmType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->opacity) {
            $res['Opacity'] = $this->opacity;
        }

        if (null !== $this->scale) {
            $res['Scale'] = $this->scale;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        if (null !== $this->wmInfoBytesB64) {
            $res['WmInfoBytesB64'] = $this->wmInfoBytesB64;
        }

        if (null !== $this->wmInfoSize) {
            $res['WmInfoSize'] = $this->wmInfoSize;
        }

        if (null !== $this->wmInfoUint) {
            $res['WmInfoUint'] = $this->wmInfoUint;
        }

        if (null !== $this->wmType) {
            $res['WmType'] = $this->wmType;
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
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['Opacity'])) {
            $model->opacity = $map['Opacity'];
        }

        if (isset($map['Scale'])) {
            $model->scale = $map['Scale'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        if (isset($map['WmInfoBytesB64'])) {
            $model->wmInfoBytesB64 = $map['WmInfoBytesB64'];
        }

        if (isset($map['WmInfoSize'])) {
            $model->wmInfoSize = $map['WmInfoSize'];
        }

        if (isset($map['WmInfoUint'])) {
            $model->wmInfoUint = $map['WmInfoUint'];
        }

        if (isset($map['WmType'])) {
            $model->wmType = $map['WmType'];
        }

        return $model;
    }
}
