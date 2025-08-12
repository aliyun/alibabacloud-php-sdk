<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component\componentLayer\positionNormalizeds;

class componentLayer extends Model
{
    /**
     * @var float
     */
    public $heightNormalized;

    /**
     * @var positionNormalizeds
     */
    public $positionNormalizeds;

    /**
     * @var string
     */
    public $positionRefer;

    /**
     * @var int
     */
    public $transparency;

    /**
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

    public function validate()
    {
        if (null !== $this->positionNormalizeds) {
            $this->positionNormalizeds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->heightNormalized) {
            $res['HeightNormalized'] = $this->heightNormalized;
        }

        if (null !== $this->positionNormalizeds) {
            $res['PositionNormalizeds'] = null !== $this->positionNormalizeds ? $this->positionNormalizeds->toArray($noStream) : $this->positionNormalizeds;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
