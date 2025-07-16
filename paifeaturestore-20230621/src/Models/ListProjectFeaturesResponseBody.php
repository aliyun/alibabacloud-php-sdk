<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectFeaturesResponseBody\features;
use AlibabaCloud\Tea\Model;

class ListProjectFeaturesResponseBody extends Model
{
    /**
     * @var features[]
     */
    public $features;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description Id of the request
     *
     * @example 7D497816-607C-5B67-97B1-61354B6ACB2B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'features' => 'Features',
        'totalCount' => 'TotalCount',
        'requestId' => 'requestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->features) {
            $res['Features'] = [];
            if (null !== $this->features && \is_array($this->features)) {
                $n = 0;
                foreach ($this->features as $item) {
                    $res['Features'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListProjectFeaturesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = [];
                $n = 0;
                foreach ($map['Features'] as $item) {
                    $model->features[$n++] = null !== $item ? features::fromMap($item) : $item;
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
