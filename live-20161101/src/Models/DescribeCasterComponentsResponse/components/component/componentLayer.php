<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponse\components\component;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponse\components\component\componentLayer\positionNormalizeds;
use AlibabaCloud\Tea\Model;

class componentLayer extends Model
{
    /**
     * @var float
     */
    public $heightNormalized;

    /**
     * @var float
     */
    public $widthNormalized;

    /**
     * @var string
     */
    public $positionRefer;

    /**
     * @var int
     */
    public $transparency;

    /**
     * @var positionNormalizeds
     */
    public $positionNormalizeds;
    protected $_name = [
        'heightNormalized'    => 'HeightNormalized',
        'widthNormalized'     => 'WidthNormalized',
        'positionRefer'       => 'PositionRefer',
        'transparency'        => 'Transparency',
        'positionNormalizeds' => 'PositionNormalizeds',
    ];

    public function validate()
    {
        Model::validateRequired('heightNormalized', $this->heightNormalized, true);
        Model::validateRequired('widthNormalized', $this->widthNormalized, true);
        Model::validateRequired('positionRefer', $this->positionRefer, true);
        Model::validateRequired('transparency', $this->transparency, true);
        Model::validateRequired('positionNormalizeds', $this->positionNormalizeds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->heightNormalized) {
            $res['HeightNormalized'] = $this->heightNormalized;
        }
        if (null !== $this->widthNormalized) {
            $res['WidthNormalized'] = $this->widthNormalized;
        }
        if (null !== $this->positionRefer) {
            $res['PositionRefer'] = $this->positionRefer;
        }
        if (null !== $this->transparency) {
            $res['Transparency'] = $this->transparency;
        }
        if (null !== $this->positionNormalizeds) {
            $res['PositionNormalizeds'] = null !== $this->positionNormalizeds ? $this->positionNormalizeds->toMap() : null;
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
        if (isset($map['WidthNormalized'])) {
            $model->widthNormalized = $map['WidthNormalized'];
        }
        if (isset($map['PositionRefer'])) {
            $model->positionRefer = $map['PositionRefer'];
        }
        if (isset($map['Transparency'])) {
            $model->transparency = $map['Transparency'];
        }
        if (isset($map['PositionNormalizeds'])) {
            $model->positionNormalizeds = positionNormalizeds::fromMap($map['PositionNormalizeds']);
        }

        return $model;
    }
}
