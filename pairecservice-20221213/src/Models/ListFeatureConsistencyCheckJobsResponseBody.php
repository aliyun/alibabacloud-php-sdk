<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobsResponseBody\featureConsistencyCheckJobs;

class ListFeatureConsistencyCheckJobsResponseBody extends Model
{
    /**
     * @var featureConsistencyCheckJobs[]
     */
    public $featureConsistencyCheckJobs;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'featureConsistencyCheckJobs' => 'FeatureConsistencyCheckJobs',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->featureConsistencyCheckJobs)) {
            Model::validateArray($this->featureConsistencyCheckJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureConsistencyCheckJobs) {
            if (\is_array($this->featureConsistencyCheckJobs)) {
                $res['FeatureConsistencyCheckJobs'] = [];
                $n1 = 0;
                foreach ($this->featureConsistencyCheckJobs as $item1) {
                    $res['FeatureConsistencyCheckJobs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FeatureConsistencyCheckJobs'])) {
            if (!empty($map['FeatureConsistencyCheckJobs'])) {
                $model->featureConsistencyCheckJobs = [];
                $n1 = 0;
                foreach ($map['FeatureConsistencyCheckJobs'] as $item1) {
                    $model->featureConsistencyCheckJobs[$n1++] = featureConsistencyCheckJobs::fromMap($item1);
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
