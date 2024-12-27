<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\AddImageMosaicRequest;

use AlibabaCloud\SDK\Imm\V20200930\Models\AddImageMosaicRequest\targets\boundary;
use AlibabaCloud\Tea\Model;

class targets extends Model
{
    /**
     * @description The radius of the Gaussian blur. Valid values: 1 to 50. Default value: 3. Unit: pixels.
     *
     * >  This parameter takes effect only for a Gaussian blur.
     * @example 3
     *
     * @var int
     */
    public $blurRadius;

    /**
     * @description The position of the bounding box.
     *
     * This parameter is required.
     * @var boundary
     */
    public $boundary;

    /**
     * @description The color of the color shape. You can specify a color by using a color code such as`#RRGGBB` or preset color names such as `red` and `white`. The default value is #FFFFFF, which is white.
     *
     * >  This parameter takes effect only for solid color shapes.
     * @example #FFFFFF
     *
     * @var string
     */
    public $color;

    /**
     * @description The radius of the mosaic. Default value: 5. Unit: pixels.
     *
     * >  This parameter does not take effect for Gaussian blurs and solid color shapes.
     * @example 5
     *
     * @var int
     */
    public $mosaicRadius;

    /**
     * @description The standard deviation of the Gaussian blur. The value must be greater than 0. Default value: 5.
     *
     * >  This parameter takes effect only for a Gaussian blur.
     * @example 5
     *
     * @var int
     */
    public $sigma;

    /**
     * @description The type of the mosaic effect. Valid values:
     *
     *   square: squares.
     *   diamond: diamonds.
     *   hexagon: hexagons.
     *   blur: Gaussian blurs.
     *   pure: solid color shapes.
     *
     * This parameter is required.
     * @example square
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'blurRadius'   => 'BlurRadius',
        'boundary'     => 'Boundary',
        'color'        => 'Color',
        'mosaicRadius' => 'MosaicRadius',
        'sigma'        => 'Sigma',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blurRadius) {
            $res['BlurRadius'] = $this->blurRadius;
        }
        if (null !== $this->boundary) {
            $res['Boundary'] = null !== $this->boundary ? $this->boundary->toMap() : null;
        }
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->mosaicRadius) {
            $res['MosaicRadius'] = $this->mosaicRadius;
        }
        if (null !== $this->sigma) {
            $res['Sigma'] = $this->sigma;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlurRadius'])) {
            $model->blurRadius = $map['BlurRadius'];
        }
        if (isset($map['Boundary'])) {
            $model->boundary = boundary::fromMap($map['Boundary']);
        }
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['MosaicRadius'])) {
            $model->mosaicRadius = $map['MosaicRadius'];
        }
        if (isset($map['Sigma'])) {
            $model->sigma = $map['Sigma'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
