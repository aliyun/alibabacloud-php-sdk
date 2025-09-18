<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListModelFeatureAvailableFeaturesResponseBody\avaliableFeatures;

class ListModelFeatureAvailableFeaturesResponseBody extends Model
{
    /**
     * @var avaliableFeatures[]
     */
    public $avaliableFeatures;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'avaliableFeatures' => 'AvaliableFeatures',
        'totalCount' => 'TotalCount',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->avaliableFeatures)) {
            Model::validateArray($this->avaliableFeatures);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avaliableFeatures) {
            if (\is_array($this->avaliableFeatures)) {
                $res['AvaliableFeatures'] = [];
                $n1 = 0;
                foreach ($this->avaliableFeatures as $item1) {
                    $res['AvaliableFeatures'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvaliableFeatures'])) {
            if (!empty($map['AvaliableFeatures'])) {
                $model->avaliableFeatures = [];
                $n1 = 0;
                foreach ($map['AvaliableFeatures'] as $item1) {
                    $model->avaliableFeatures[$n1] = avaliableFeatures::fromMap($item1);
                    ++$n1;
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
