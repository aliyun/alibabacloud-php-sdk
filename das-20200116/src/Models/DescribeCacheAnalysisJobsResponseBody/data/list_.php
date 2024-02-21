<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobsResponseBody\data;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobsResponseBody\data\list_\cacheAnalysisJob;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheAnalysisJob) {
            $res['CacheAnalysisJob'] = [];
            if (null !== $this->cacheAnalysisJob && \is_array($this->cacheAnalysisJob)) {
                $n = 0;
                foreach ($this->cacheAnalysisJob as $item) {
                    $res['CacheAnalysisJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheAnalysisJob'])) {
            if (!empty($map['CacheAnalysisJob'])) {
                $model->cacheAnalysisJob = [];
                $n                       = 0;
                foreach ($map['CacheAnalysisJob'] as $item) {
                    $model->cacheAnalysisJob[$n++] = null !== $item ? cacheAnalysisJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
