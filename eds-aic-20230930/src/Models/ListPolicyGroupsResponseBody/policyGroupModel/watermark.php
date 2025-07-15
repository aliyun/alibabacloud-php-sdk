<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponseBody\policyGroupModel;

use AlibabaCloud\Tea\Model;

class watermark extends Model
{
    /**
     * @var int
     */
    public $watermarkColor;

    /**
     * @var string
     */
    public $watermarkCustomText;

    /**
     * @var int
     */
    public $watermarkFontSize;

    /**
     * @var string
     */
    public $watermarkSwitch;

    /**
     * @var int
     */
    public $watermarkTransparencyValue;

    /**
     * @var string[]
     */
    public $watermarkTypes;
    protected $_name = [
        'watermarkColor' => 'WatermarkColor',
        'watermarkCustomText' => 'WatermarkCustomText',
        'watermarkFontSize' => 'WatermarkFontSize',
        'watermarkSwitch' => 'WatermarkSwitch',
        'watermarkTransparencyValue' => 'WatermarkTransparencyValue',
        'watermarkTypes' => 'WatermarkTypes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->watermarkColor) {
            $res['WatermarkColor'] = $this->watermarkColor;
        }
        if (null !== $this->watermarkCustomText) {
            $res['WatermarkCustomText'] = $this->watermarkCustomText;
        }
        if (null !== $this->watermarkFontSize) {
            $res['WatermarkFontSize'] = $this->watermarkFontSize;
        }
        if (null !== $this->watermarkSwitch) {
            $res['WatermarkSwitch'] = $this->watermarkSwitch;
        }
        if (null !== $this->watermarkTransparencyValue) {
            $res['WatermarkTransparencyValue'] = $this->watermarkTransparencyValue;
        }
        if (null !== $this->watermarkTypes) {
            $res['WatermarkTypes'] = $this->watermarkTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return watermark
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WatermarkColor'])) {
            $model->watermarkColor = $map['WatermarkColor'];
        }
        if (isset($map['WatermarkCustomText'])) {
            $model->watermarkCustomText = $map['WatermarkCustomText'];
        }
        if (isset($map['WatermarkFontSize'])) {
            $model->watermarkFontSize = $map['WatermarkFontSize'];
        }
        if (isset($map['WatermarkSwitch'])) {
            $model->watermarkSwitch = $map['WatermarkSwitch'];
        }
        if (isset($map['WatermarkTransparencyValue'])) {
            $model->watermarkTransparencyValue = $map['WatermarkTransparencyValue'];
        }
        if (isset($map['WatermarkTypes'])) {
            if (!empty($map['WatermarkTypes'])) {
                $model->watermarkTypes = $map['WatermarkTypes'];
            }
        }

        return $model;
    }
}
