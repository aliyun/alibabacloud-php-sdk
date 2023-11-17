<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data;

use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\materialInfo\bottoms;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\materialInfo\model_;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\materialInfo\suit;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\materialInfo\tops;
use AlibabaCloud\Tea\Model;

class materialInfo extends Model
{
    /**
     * @var bottoms
     */
    public $bottoms;

    /**
     * @var string
     */
    public $clothingType;

    /**
     * @var model_
     */
    public $model;

    /**
     * @var string
     */
    public $shoeType;

    /**
     * @var suit
     */
    public $suit;

    /**
     * @var tops
     */
    public $tops;
    protected $_name = [
        'bottoms'      => 'Bottoms',
        'clothingType' => 'ClothingType',
        'model'        => 'Model',
        'shoeType'     => 'ShoeType',
        'suit'         => 'Suit',
        'tops'         => 'Tops',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bottoms) {
            $res['Bottoms'] = null !== $this->bottoms ? $this->bottoms->toMap() : null;
        }
        if (null !== $this->clothingType) {
            $res['ClothingType'] = $this->clothingType;
        }
        if (null !== $this->model) {
            $res['Model'] = null !== $this->model ? $this->model->toMap() : null;
        }
        if (null !== $this->shoeType) {
            $res['ShoeType'] = $this->shoeType;
        }
        if (null !== $this->suit) {
            $res['Suit'] = null !== $this->suit ? $this->suit->toMap() : null;
        }
        if (null !== $this->tops) {
            $res['Tops'] = null !== $this->tops ? $this->tops->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return materialInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bottoms'])) {
            $model->bottoms = bottoms::fromMap($map['Bottoms']);
        }
        if (isset($map['ClothingType'])) {
            $model->clothingType = $map['ClothingType'];
        }
        if (isset($map['Model'])) {
            $model->model = model_::fromMap($map['Model']);
        }
        if (isset($map['ShoeType'])) {
            $model->shoeType = $map['ShoeType'];
        }
        if (isset($map['Suit'])) {
            $model->suit = suit::fromMap($map['Suit']);
        }
        if (isset($map['Tops'])) {
            $model->tops = tops::fromMap($map['Tops']);
        }

        return $model;
    }
}
