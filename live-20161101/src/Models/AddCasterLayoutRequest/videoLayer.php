<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddCasterLayoutRequest;

use AlibabaCloud\Tea\Model;

class videoLayer extends Model
{
    /**
     * @description The scaling mode of video layer N. Valid values:
     *
     *   **none**: The image is not scaled to fill in the specified layout section. Set video layer N based on the image size of the video resource. This is the default value.
     *   **fit**: The image is scaled with the original aspect ratio to fill in the specified layout section. Set video layer N based on the section size. The image is centered in the layout section with the long side of the image equaling that of the section. If the aspect ratio of the image is inconsistent with that of the section, the short side of the image may be shorter than that of the section. The area outside the image displays the next video layer or the background if no next video layer exists. By default, the background color is black.
     *
     * @example fit
     *
     * @var string
     */
    public $fillMode;

    /**
     * @description The fixed delay of video layer N. You can use this parameter to synchronize the video with subtitles. Unit: milliseconds. Valid values: **0 to 5000**. Default value: **0**.
     *
     * @example 5000
     *
     * @var int
     */
    public $fixedDelayDuration;

    /**
     * @description The normalized value of the height of the image of video layer N.
     *
     *   If the FillMode parameter of video layer N is set to none, the width of the video image is scaled based on this parameter. The default value is **0**, which indicates that the video image is displayed in the original size.
     *   If the FillMode parameter of video layer N is set to fit, you must set this parameter to a value greater than **0**. In this case, the video image is scaled with the original aspect ratio to fill in the specified layout section based on this parameter.
     *
     * @example 1
     *
     * @var float
     */
    public $heightNormalized;

    /**
     * @description The normalized value of the `[x,y]` coordinates of video layer N in the production studio. The default coordinates are `[0,0]`.
     *
     * >  The coordinates indicate the location of video layer N in the production studio. Set this parameter to the normalized value of the coordinates.
     *
     * @example 0.3
     *
     * @var float[]
     */
    public $positionNormalized;

    /**
     * @description The reference coordinates of video layer N in the production studio. Valid values:
     *
     *   **topLeft**: the upper-left corner. This is the default value.
     *   **topRight**: the upper-right corner.
     *   **bottomLeft**: the lower-left corner.
     *   **bottomRight**: the lower-right corner.
     *   **center**: the center position.
     *   **topCenter**: the upper center position.
     *   **bottomCenter**: the lower center position.
     *   **leftCenter**: the left center position.
     *   **rightCenter**: the right center position.
     *
     * @example topLeft
     *
     * @var string
     */
    public $positionRefer;

    /**
     * @description The normalized value of the width of the image of video layer N.
     *
     *   If the FillMode parameter of video layer N is set to none, the height of the video image is scaled based on this parameter. The default value is **0**, which indicates that the video image is displayed in the original size.
     *   If the FillMode parameter of video layer N is set to fit, you must set this parameter to a value greater than **0**. In this case, the video image is scaled with the original aspect ratio to fill in the specified layout section based on this parameter.
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
