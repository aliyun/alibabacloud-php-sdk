<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureEntitiesResponseBody\featureEntities;
use AlibabaCloud\Tea\Model;

class ListFeatureEntitiesResponseBody extends Model
{
    /**
     * @var featureEntities[]
     */
    public $featureEntities;

    /**
     * @example 37D19490-AB69-567D-A852-407C94E510E9
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'featureEntities' => 'FeatureEntities',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureEntities) {
            $res['FeatureEntities'] = [];
            if (null !== $this->featureEntities && \is_array($this->featureEntities)) {
                $n = 0;
                foreach ($this->featureEntities as $item) {
                    $res['FeatureEntities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFeatureEntitiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureEntities'])) {
            if (!empty($map['FeatureEntities'])) {
                $model->featureEntities = [];
                $n                      = 0;
                foreach ($map['FeatureEntities'] as $item) {
                    $model->featureEntities[$n++] = null !== $item ? featureEntities::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
