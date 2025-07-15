<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterLayoutRequest;

use AlibabaCloud\Tea\Model;

class videoLayer extends Model
{
    /**
     * @description The scaling mode of the video layer. Valid values:
     *
     *   **none** (default): indicates that the video layer is not scaled. The video layer is displayed based on its original size.
     *   **fit**: indicates that the video layer is adapted to the fill area. In this case, the video layer is scaled proportionally, with its original aspect ratio retained. The video layer is placed in the center, with its longer sides aligned with the fill area. If the aspect ratio of the video layer is different from that of the fill area, the content of the lower layer is displayed alongside the shorter sides. If there is no lower layer, black bars are displayed instead.
     *
     * @example fit
     *
     * @var string
     */
    public $fillMode;

    /**
     * @description The fixed delay of the video layer. This parameter is used to synchronize the video with subtitles. Unit: milliseconds. Default value: **0**. Valid values: **0 to 5000**.
     *
     * @example 5000
     *
     * @var int
     */
    public $fixedDelayDuration;

    /**
     * @description The normalized value of the height of the video layer.
     *
     *   If the FillMode parameter of the video layer is set to none, the width of the video layer is proportionally scaled based on this parameter. The default value is **0**, which indicates that the video layer is not scaled.
     *   If the FillMode parameter of the video layer is set to fit, the value of this parameter is greater than **0**.
     *
     * @example 1
     *
     * @var float
     */
    public $heightNormalized;

    /**
     * @description The normalized value of the position of the video layer, in the format of `[x,y]`. Default value: `[0,0]`.
     *
     * >  The values of x and y are normalized.
     *
     * @example 0.3
     *
     * @var float[]
     */
    public $positionNormalized;

    /**
     * @description The reference coordinates of the video layer. Valid values:
     *
     *   **topLeft** (default): the upper-left corner
     *   **topRight**: the upper-right corner
     *   **bottomLeft**: the lower-left corner
     *   **bottomRight**: the lower-right corner
     *   **center**: the center
     *   **topCenter**: the upper center
     *   **bottomCenter**: the lower center
     *   **leftCenter**: the left center
     *   **rightCenter**: the right center
     *
     * @example topLeft
     *
     * @var string
     */
    public $positionRefer;

    /**
     * @description The normalized value of the width of the video layer.
     *
     *   If the FillMode parameter of the video layer is set to none, the height of the video layer is proportionally scaled based on this parameter. The default value is **0**, which indicates that the video layer is not scaled.
     *   If the FillMode parameter of the video layer is set to fit, the value of this parameter is greater than **0**.
     *
     * @example 1
     *
     * @var float
     */
    public $widthNormalized;
    protected $_name = [
        'fillMode' => 'FillMode',
        'fixedDelayDuration' => 'FixedDelayDuration',
        'heightNormalized' => 'HeightNormalized',
        'positionNormalized' => 'PositionNormalized',
        'positionRefer' => 'PositionRefer',
        'widthNormalized' => 'WidthNormalized',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fillMode) {
            $res['FillMode'] = $this->fillMode;
        }
        if (null !== $this->fixedDelayDuration) {
            $res['FixedDelayDuration'] = $this->fixedDelayDuration;
        }
        if (null !== $this->heightNormalized) {
            $res['HeightNormalized'] = $this->heightNormalized;
        }
        if (null !== $this->positionNormalized) {
            $res['PositionNormalized'] = $this->positionNormalized;
        }
        if (null !== $this->positionRefer) {
            $res['PositionRefer'] = $this->positionRefer;
        }
        if (null !== $this->widthNormalized) {
            $res['WidthNormalized'] = $this->widthNormalized;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoLayer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FillMode'])) {
            $model->fillMode = $map['FillMode'];
        }
        if (isset($map['FixedDelayDuration'])) {
            $model->fixedDelayDuration = $map['FixedDelayDuration'];
        }
        if (isset($map['HeightNormalized'])) {
            $model->heightNormalized = $map['HeightNormalized'];
        }
        if (isset($map['PositionNormalized'])) {
            if (!empty($map['PositionNormalized'])) {
                $model->positionNormalized = $map['PositionNormalized'];
            }
        }
        if (isset($map['PositionRefer'])) {
            $model->positionRefer = $map['PositionRefer'];
        }
        if (isset($map['WidthNormalized'])) {
            $model->widthNormalized = $map['WidthNormalized'];
        }

        return $model;
    }
}
