<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapioxscross\V20200701\Models;

use AlibabaCloud\SDK\Viapioxscross\V20200701\Models\LingJieApiInvokeCount\metrics;
use AlibabaCloud\Tea\Model;

class LingJieApiInvokeCount extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var metrics[]
     */
    public $metrics;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $statisticsUnit;

    /**
     * @var string
     */
    public $timeUnit;
    protected $_name = [
        'apiName'        => 'ApiName',
        'metrics'        => 'Metrics',
        'projectId'      => 'ProjectId',
        'region'         => 'Region',
        'statisticsUnit' => 'StatisticsUnit',
        'timeUnit'       => 'TimeUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = [];
            if (null !== $this->metrics && \is_array($this->metrics)) {
                $n = 0;
                foreach ($this->metrics as $item) {
                    $res['Metrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->statisticsUnit) {
            $res['StatisticsUnit'] = $this->statisticsUnit;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LingJieApiInvokeCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n              = 0;
                foreach ($map['Metrics'] as $item) {
                    $model->metrics[$n++] = null !== $item ? metrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['StatisticsUnit'])) {
            $model->statisticsUnit = $map['StatisticsUnit'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }

        return $model;
    }
}
