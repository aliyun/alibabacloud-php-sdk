<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendImageDetailResponseBody;

use AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendImageDetailResponseBody\data\similarGoods;
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
    public $multiPictUrl;

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

    /**
     * @var similarGoods[]
     */
    public $similarGoods;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'aiImgId'      => 'AiImgId',
        'aiImgUrl'     => 'AiImgUrl',
        'multiPictUrl' => 'MultiPictUrl',
        'population'   => 'Population',
        'priceMax'     => 'PriceMax',
        'priceMin'     => 'PriceMin',
        'similarGoods' => 'SimilarGoods',
        'tags'         => 'Tags',
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
        if (null !== $this->multiPictUrl) {
            $res['MultiPictUrl'] = $this->multiPictUrl;
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
        if (null !== $this->similarGoods) {
            $res['SimilarGoods'] = [];
            if (null !== $this->similarGoods && \is_array($this->similarGoods)) {
                $n = 0;
                foreach ($this->similarGoods as $item) {
                    $res['SimilarGoods'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['MultiPictUrl'])) {
            $model->multiPictUrl = $map['MultiPictUrl'];
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
        if (isset($map['SimilarGoods'])) {
            if (!empty($map['SimilarGoods'])) {
                $model->similarGoods = [];
                $n                   = 0;
                foreach ($map['SimilarGoods'] as $item) {
                    $model->similarGoods[$n++] = null !== $item ? similarGoods::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
