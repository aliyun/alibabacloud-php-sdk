<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component\componentLayer\positionNormalizeds;
use AlibabaCloud\Tea\Model;

class componentLayer extends Model
{
    /**
     * @description The normalized value for heights of the elements in the layer. The widths of the elements are proportionally scaled based on this parameter.
     *
     * If the value of this parameter is **0**, the elements in the layer are not scaled.
     *
     * @example 0.5
     *
     * @var float
     */
    public $heightNormalized;

    /**
     * @description The normalized value of the position of the layer, in the format of `[x,y]`. Example: `[0,0]`.
     *
     * >  The values of x and y need to be normalized.
     *
     * @var positionNormalizeds
     */
    public $positionNormalizeds;

    /**
     * @description The reference coordinates of the layer. Valid values:
     *
     *   **topLeft**: the upper-left corner
     *   **topRight**: the upper-right corner
     *   **bottomLeft**: the lower-left corner
     *   **bottomRight**: the lower-right corner
     *
     * @example topLeft
     *
     * @var string
     */
    public $positionRefer;

    /**
     * @description The transparency of the layer. Valid values: 0 to 255.
     *
     * A value of **0** indicates that the layer is completely transparent. A value of **255** indicates that the layer is completely opaque.
     *
     * @example 200
     *
     * @var int
     */
    public $transparency;

    /**
     * @description The normalized value for widths of the elements in the layer. The heights of the elements are proportionally scaled based on this parameter. If the value of this parameter is **0**, the elements in the layer are not scaled.
     *
     * >  This parameter conflicts with the HeightNormalized parameter. If both of them are specified, only the HeightNormalized parameter takes effect. If only one of them is specified, the latest specified value is used.
     *
     * @example 0.5
     *
     * @var float
     */
    public $widthNormalized;
    protected $_name = [
        'heightNormalized' => 'HeightNormalized',
        'positionNormalizeds' => 'PositionNormalizeds',
        'positionRefer' => 'PositionRefer',
        'transparency' => 'Transparency',
        'widthNormalized' => 'WidthNormalized',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->heightNormalized) {
            $res['HeightNormalized'] = $this->heightNormalized;
        }
        if (null !== $this->positionNormalizeds) {
            $res['PositionNormalizeds'] = null !== $this->positionNormalizeds ? $this->positionNormalizeds->toMap() : null;
        }
        if (null !== $this->positionRefer) {
            $res['PositionRefer'] = $this->positionRefer;
        }
        if (null !== $this->transparency) {
            $res['Transparency'] = $this->transparency;
        }
        if (null !== $this->widthNormalized) {
            $res['WidthNormalized'] = $this->widthNormalized;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentLayer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HeightNormalized'])) {
            $model->heightNormalized = $map['HeightNormalized'];
        }
        if (isset($map['PositionNormalizeds'])) {
            $model->positionNormalizeds = positionNormalizeds::fromMap($map['PositionNormalizeds']);
        }
        if (isset($map['PositionRefer'])) {
            $model->positionRefer = $map['PositionRefer'];
        }
        if (isset($map['Transparency'])) {
            $model->transparency = $map['Transparency'];
        }
        if (isset($map['WidthNormalized'])) {
            $model->widthNormalized = $map['WidthNormalized'];
        }

        return $model;
    }
}
