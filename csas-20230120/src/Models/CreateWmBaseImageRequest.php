<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class CreateWmBaseImageRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1080
     *
     * @var int
     */
    public $height;

    /**
     * @description This parameter is required.
     *
     * @example 255
     *
     * @var int
     */
    public $opacity;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $scale;

    /**
     * @description This parameter is required.
     *
     * @example 1920
     *
     * @var int
     */
    public $width;

    /**
     * @example aGVsbG8gc2F*****
     *
     * @var string
     */
    public $wmInfoBytesB64;

    /**
     * @example 32
     *
     * @var int
     */
    public $wmInfoSize;

    /**
     * @example 12*****
     *
     * @var string
     */
    public $wmInfoUint;

    /**
     * @description This parameter is required.
     *
     * @example PureWebappInvisible
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateWmBaseImageRequest
     */
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
