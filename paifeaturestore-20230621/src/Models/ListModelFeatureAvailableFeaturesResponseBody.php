<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListModelFeatureAvailableFeaturesResponseBody\avaliableFeatures;
use AlibabaCloud\Tea\Model;

class ListModelFeatureAvailableFeaturesResponseBody extends Model
{
    /**
     * @var avaliableFeatures[]
     */
    public $avaliableFeatures;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example ED4DEA2F-F216-57F0-AE28-08D791233280
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'avaliableFeatures' => 'AvaliableFeatures',
        'totalCount'        => 'TotalCount',
        'requestId'         => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avaliableFeatures) {
            $res['AvaliableFeatures'] = [];
            if (null !== $this->avaliableFeatures && \is_array($this->avaliableFeatures)) {
                $n = 0;
                foreach ($this->avaliableFeatures as $item) {
                    $res['AvaliableFeatures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListModelFeatureAvailableFeaturesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvaliableFeatures'])) {
            if (!empty($map['AvaliableFeatures'])) {
                $model->avaliableFeatures = [];
                $n                        = 0;
                foreach ($map['AvaliableFeatures'] as $item) {
                    $model->avaliableFeatures[$n++] = null !== $item ? avaliableFeatures::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
