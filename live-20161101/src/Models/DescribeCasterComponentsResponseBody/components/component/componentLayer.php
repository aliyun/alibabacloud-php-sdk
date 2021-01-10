<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component\componentLayer\positionNormalizeds;
use AlibabaCloud\Tea\Model;

class componentLayer extends Model
{
    /**
     * @var int
     */
    public $transparency;

    /**
     * @var positionNormalizeds
     */
    public $positionNormalizeds;

    /**
     * @var float
     */
    public $heightNormalized;

    /**
     * @var string
     */
    public $positionRefer;

    /**
     * @var float
     */
    public $widthNormalized;
    protected $_name = [
        'transparency'        => 'Transparency',
        'positionNormalizeds' => 'PositionNormalizeds',
        'heightNormalized'    => 'HeightNormalized',
        'positionRefer'       => 'PositionRefer',
        'widthNormalized'     => 'WidthNormalized',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transparency) {
            $res['Transparency'] = $this->transparency;
        }
        if (null !== $this->positionNormalizeds) {
            $res['PositionNormalizeds'] = null !== $this->positionNormalizeds ? $this->positionNormalizeds->toMap() : null;
        }
        if (null !== $this->heightNormalized) {
            $res['HeightNormalized'] = $this->heightNormalized;
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
     * @return componentLayer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Transparency'])) {
            $model->transparency = $map['Transparency'];
        }
        if (isset($map['PositionNormalizeds'])) {
            $model->positionNormalizeds = positionNormalizeds::fromMap($map['PositionNormalizeds']);
        }
        if (isset($map['HeightNormalized'])) {
            $model->heightNormalized = $map['HeightNormalized'];
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
