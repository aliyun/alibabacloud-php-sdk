<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobConfigsResponseBody\featureConsistencyCheckConfigs;
use AlibabaCloud\Tea\Model;

class ListFeatureConsistencyCheckJobConfigsResponseBody extends Model
{
    /**
     * @var featureConsistencyCheckConfigs[]
     */
    public $featureConsistencyCheckConfigs;

    /**
     * @example FCF741D8-9C30-578E-807F-B935487DB34A
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
        'featureConsistencyCheckConfigs' => 'FeatureConsistencyCheckConfigs',
        'requestId'                      => 'RequestId',
        'totalCount'                     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureConsistencyCheckConfigs) {
            $res['FeatureConsistencyCheckConfigs'] = [];
            if (null !== $this->featureConsistencyCheckConfigs && \is_array($this->featureConsistencyCheckConfigs)) {
                $n = 0;
                foreach ($this->featureConsistencyCheckConfigs as $item) {
                    $res['FeatureConsistencyCheckConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListFeatureConsistencyCheckJobConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureConsistencyCheckConfigs'])) {
            if (!empty($map['FeatureConsistencyCheckConfigs'])) {
                $model->featureConsistencyCheckConfigs = [];
                $n                                     = 0;
                foreach ($map['FeatureConsistencyCheckConfigs'] as $item) {
                    $model->featureConsistencyCheckConfigs[$n++] = null !== $item ? featureConsistencyCheckConfigs::fromMap($item) : $item;
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
