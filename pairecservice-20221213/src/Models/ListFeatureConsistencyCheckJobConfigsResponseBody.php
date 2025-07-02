<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobConfigsResponseBody\featureConsistencyCheckConfigs;

class ListFeatureConsistencyCheckJobConfigsResponseBody extends Model
{
    /**
     * @var featureConsistencyCheckConfigs[]
     */
    public $featureConsistencyCheckConfigs;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'featureConsistencyCheckConfigs' => 'FeatureConsistencyCheckConfigs',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->featureConsistencyCheckConfigs)) {
            Model::validateArray($this->featureConsistencyCheckConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureConsistencyCheckConfigs) {
            if (\is_array($this->featureConsistencyCheckConfigs)) {
                $res['FeatureConsistencyCheckConfigs'] = [];
                $n1 = 0;
                foreach ($this->featureConsistencyCheckConfigs as $item1) {
                    $res['FeatureConsistencyCheckConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['FeatureConsistencyCheckConfigs'])) {
            if (!empty($map['FeatureConsistencyCheckConfigs'])) {
                $model->featureConsistencyCheckConfigs = [];
                $n1 = 0;
                foreach ($map['FeatureConsistencyCheckConfigs'] as $item1) {
                    $model->featureConsistencyCheckConfigs[$n1] = featureConsistencyCheckConfigs::fromMap($item1);
                    ++$n1;
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
