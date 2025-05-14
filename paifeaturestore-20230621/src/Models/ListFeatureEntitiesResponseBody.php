<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureEntitiesResponseBody\featureEntities;

class ListFeatureEntitiesResponseBody extends Model
{
    /**
     * @var featureEntities[]
     */
    public $featureEntities;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'featureEntities' => 'FeatureEntities',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->featureEntities)) {
            Model::validateArray($this->featureEntities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureEntities) {
            if (\is_array($this->featureEntities)) {
                $res['FeatureEntities'] = [];
                $n1 = 0;
                foreach ($this->featureEntities as $item1) {
                    $res['FeatureEntities'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureEntities'])) {
            if (!empty($map['FeatureEntities'])) {
                $model->featureEntities = [];
                $n1 = 0;
                foreach ($map['FeatureEntities'] as $item1) {
                    $model->featureEntities[$n1++] = featureEntities::fromMap($item1);
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
