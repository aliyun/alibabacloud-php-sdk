<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvCustomJobsResponseBody\data;

use AlibabaCloud\Tea\Model;

class scrapeConfigs extends Model
{
    /**
     * @description Job name.
     *
     * @example custom-sd-demo
     *
     * @var string
     */
    public $jobName;

    /**
     * @description scrape the path of the metric.
     *
     * @example /metrics
     *
     * @var string
     */
    public $metricsPath;

    /**
     * @description List of service discovery methods.
     *
     * @var string[]
     */
    public $scrapeDiscoverys;

    /**
     * @description scrape interval.
     *
     * @example 30s
     *
     * @var string
     */
    public $scrapeInterval;
    protected $_name = [
        'jobName'          => 'JobName',
        'metricsPath'      => 'MetricsPath',
        'scrapeDiscoverys' => 'ScrapeDiscoverys',
        'scrapeInterval'   => 'ScrapeInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->metricsPath) {
            $res['MetricsPath'] = $this->metricsPath;
        }
        if (null !== $this->scrapeDiscoverys) {
            $res['ScrapeDiscoverys'] = $this->scrapeDiscoverys;
        }
        if (null !== $this->scrapeInterval) {
            $res['ScrapeInterval'] = $this->scrapeInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scrapeConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['MetricsPath'])) {
            $model->metricsPath = $map['MetricsPath'];
        }
        if (isset($map['ScrapeDiscoverys'])) {
            if (!empty($map['ScrapeDiscoverys'])) {
                $model->scrapeDiscoverys = $map['ScrapeDiscoverys'];
            }
        }
        if (isset($map['ScrapeInterval'])) {
            $model->scrapeInterval = $map['ScrapeInterval'];
        }

        return $model;
    }
}
