<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendImageListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $aiImgId;

    /**
     * @var string
     */
    public $aiImgUrl;

    /**
     * @var string
     */
    public $population;

    /**
     * @var int
     */
    public $priceMax;

    /**
     * @var int
     */
    public $priceMin;
    protected $_name = [
        'aiImgId'    => 'AiImgId',
        'aiImgUrl'   => 'AiImgUrl',
        'population' => 'Population',
        'priceMax'   => 'PriceMax',
        'priceMin'   => 'PriceMin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiImgId) {
            $res['AiImgId'] = $this->aiImgId;
        }
        if (null !== $this->aiImgUrl) {
            $res['AiImgUrl'] = $this->aiImgUrl;
        }
        if (null !== $this->population) {
            $res['Population'] = $this->population;
        }
        if (null !== $this->priceMax) {
            $res['PriceMax'] = $this->priceMax;
        }
        if (null !== $this->priceMin) {
            $res['PriceMin'] = $this->priceMin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiImgId'])) {
            $model->aiImgId = $map['AiImgId'];
        }
        if (isset($map['AiImgUrl'])) {
            $model->aiImgUrl = $map['AiImgUrl'];
        }
        if (isset($map['Population'])) {
            $model->population = $map['Population'];
        }
        if (isset($map['PriceMax'])) {
            $model->priceMax = $map['PriceMax'];
        }
        if (isset($map['PriceMin'])) {
            $model->priceMin = $map['PriceMin'];
        }

        return $model;
    }
}
