<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\intelligentSearchConfig\searchSamples;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\intelligentSearchConfig\searchSources;

class intelligentSearchConfig extends Model
{
    /**
     * @var string
     */
    public $productDescription;

    /**
     * @var searchSamples[]
     */
    public $searchSamples;

    /**
     * @var searchSources[]
     */
    public $searchSources;
    protected $_name = [
        'productDescription' => 'ProductDescription',
        'searchSamples' => 'SearchSamples',
        'searchSources' => 'SearchSources',
    ];

    public function validate()
    {
        if (\is_array($this->searchSamples)) {
            Model::validateArray($this->searchSamples);
        }
        if (\is_array($this->searchSources)) {
            Model::validateArray($this->searchSources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productDescription) {
            $res['ProductDescription'] = $this->productDescription;
        }

        if (null !== $this->searchSamples) {
            if (\is_array($this->searchSamples)) {
                $res['SearchSamples'] = [];
                $n1 = 0;
                foreach ($this->searchSamples as $item1) {
                    $res['SearchSamples'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->searchSources) {
            if (\is_array($this->searchSources)) {
                $res['SearchSources'] = [];
                $n1 = 0;
                foreach ($this->searchSources as $item1) {
                    $res['SearchSources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ProductDescription'])) {
            $model->productDescription = $map['ProductDescription'];
        }

        if (isset($map['SearchSamples'])) {
            if (!empty($map['SearchSamples'])) {
                $model->searchSamples = [];
                $n1 = 0;
                foreach ($map['SearchSamples'] as $item1) {
                    $model->searchSamples[$n1++] = searchSamples::fromMap($item1);
                }
            }
        }

        if (isset($map['SearchSources'])) {
            if (!empty($map['SearchSources'])) {
                $model->searchSources = [];
                $n1 = 0;
                foreach ($map['SearchSources'] as $item1) {
                    $model->searchSources[$n1++] = searchSources::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
