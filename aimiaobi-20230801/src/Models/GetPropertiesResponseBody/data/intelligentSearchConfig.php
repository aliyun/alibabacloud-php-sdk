<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\intelligentSearchConfig\copilotPreciseSearchSources;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\intelligentSearchConfig\searchSamples;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\intelligentSearchConfig\searchSources;
use AlibabaCloud\Tea\Model;

class intelligentSearchConfig extends Model
{
    /**
     * @var copilotPreciseSearchSources[]
     */
    public $copilotPreciseSearchSources;

    /**
     * @example xxx
     *
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
        'copilotPreciseSearchSources' => 'CopilotPreciseSearchSources',
        'productDescription' => 'ProductDescription',
        'searchSamples' => 'SearchSamples',
        'searchSources' => 'SearchSources',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->copilotPreciseSearchSources) {
            $res['CopilotPreciseSearchSources'] = [];
            if (null !== $this->copilotPreciseSearchSources && \is_array($this->copilotPreciseSearchSources)) {
                $n = 0;
                foreach ($this->copilotPreciseSearchSources as $item) {
                    $res['CopilotPreciseSearchSources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->productDescription) {
            $res['ProductDescription'] = $this->productDescription;
        }
        if (null !== $this->searchSamples) {
            $res['SearchSamples'] = [];
            if (null !== $this->searchSamples && \is_array($this->searchSamples)) {
                $n = 0;
                foreach ($this->searchSamples as $item) {
                    $res['SearchSamples'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->searchSources) {
            $res['SearchSources'] = [];
            if (null !== $this->searchSources && \is_array($this->searchSources)) {
                $n = 0;
                foreach ($this->searchSources as $item) {
                    $res['SearchSources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return intelligentSearchConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CopilotPreciseSearchSources'])) {
            if (!empty($map['CopilotPreciseSearchSources'])) {
                $model->copilotPreciseSearchSources = [];
                $n = 0;
                foreach ($map['CopilotPreciseSearchSources'] as $item) {
                    $model->copilotPreciseSearchSources[$n++] = null !== $item ? copilotPreciseSearchSources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProductDescription'])) {
            $model->productDescription = $map['ProductDescription'];
        }
        if (isset($map['SearchSamples'])) {
            if (!empty($map['SearchSamples'])) {
                $model->searchSamples = [];
                $n = 0;
                foreach ($map['SearchSamples'] as $item) {
                    $model->searchSamples[$n++] = null !== $item ? searchSamples::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SearchSources'])) {
            if (!empty($map['SearchSources'])) {
                $model->searchSources = [];
                $n = 0;
                foreach ($map['SearchSources'] as $item) {
                    $model->searchSources[$n++] = null !== $item ? searchSources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
