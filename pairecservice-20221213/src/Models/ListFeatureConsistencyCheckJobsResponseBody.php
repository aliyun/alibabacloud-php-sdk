<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobsResponseBody\featureConsistencyCheckJobs;
use AlibabaCloud\Tea\Model;

class ListFeatureConsistencyCheckJobsResponseBody extends Model
{
    /**
     * @var featureConsistencyCheckJobs[]
     */
    public $featureConsistencyCheckJobs;

    /**
     * @example A04CB8C0-E74A-5E83-BC61-64D153574EC7
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'featureConsistencyCheckJobs' => 'FeatureConsistencyCheckJobs',
        'requestId'                   => 'RequestId',
        'totalCount'                  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureConsistencyCheckJobs) {
            $res['FeatureConsistencyCheckJobs'] = [];
            if (null !== $this->featureConsistencyCheckJobs && \is_array($this->featureConsistencyCheckJobs)) {
                $n = 0;
                foreach ($this->featureConsistencyCheckJobs as $item) {
                    $res['FeatureConsistencyCheckJobs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListFeatureConsistencyCheckJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureConsistencyCheckJobs'])) {
            if (!empty($map['FeatureConsistencyCheckJobs'])) {
                $model->featureConsistencyCheckJobs = [];
                $n                                  = 0;
                foreach ($map['FeatureConsistencyCheckJobs'] as $item) {
                    $model->featureConsistencyCheckJobs[$n++] = null !== $item ? featureConsistencyCheckJobs::fromMap($item) : $item;
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
