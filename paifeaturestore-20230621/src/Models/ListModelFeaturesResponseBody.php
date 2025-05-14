<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListModelFeaturesResponseBody\modelFeatures;

class ListModelFeaturesResponseBody extends Model
{
    /**
     * @var modelFeatures[]
     */
    public $modelFeatures;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'modelFeatures' => 'ModelFeatures',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->modelFeatures)) {
            Model::validateArray($this->modelFeatures);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelFeatures) {
            if (\is_array($this->modelFeatures)) {
                $res['ModelFeatures'] = [];
                $n1 = 0;
                foreach ($this->modelFeatures as $item1) {
                    $res['ModelFeatures'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ModelFeatures'])) {
            if (!empty($map['ModelFeatures'])) {
                $model->modelFeatures = [];
                $n1 = 0;
                foreach ($map['ModelFeatures'] as $item1) {
                    $model->modelFeatures[$n1++] = modelFeatures::fromMap($item1);
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
