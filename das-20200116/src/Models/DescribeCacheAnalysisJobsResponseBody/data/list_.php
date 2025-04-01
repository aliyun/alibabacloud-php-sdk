<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobsResponseBody\data\list_\cacheAnalysisJob;

class list_ extends Model
{
    /**
     * @var cacheAnalysisJob[]
     */
    public $cacheAnalysisJob;
    protected $_name = [
        'cacheAnalysisJob' => 'CacheAnalysisJob',
    ];

    public function validate()
    {
        if (\is_array($this->cacheAnalysisJob)) {
            Model::validateArray($this->cacheAnalysisJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheAnalysisJob) {
            if (\is_array($this->cacheAnalysisJob)) {
                $res['CacheAnalysisJob'] = [];
                $n1 = 0;
                foreach ($this->cacheAnalysisJob as $item1) {
                    $res['CacheAnalysisJob'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['CacheAnalysisJob'])) {
            if (!empty($map['CacheAnalysisJob'])) {
                $model->cacheAnalysisJob = [];
                $n1 = 0;
                foreach ($map['CacheAnalysisJob'] as $item1) {
                    $model->cacheAnalysisJob[$n1++] = cacheAnalysisJob::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
