<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvCustomJobsResponseBody\data;

use AlibabaCloud\Dara\Model;

class scrapeConfigs extends Model
{
    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $metricsPath;

    /**
     * @var string[]
     */
    public $scrapeDiscoverys;

    /**
     * @var string
     */
    public $scrapeInterval;
    protected $_name = [
        'jobName' => 'JobName',
        'metricsPath' => 'MetricsPath',
        'scrapeDiscoverys' => 'ScrapeDiscoverys',
        'scrapeInterval' => 'ScrapeInterval',
    ];

    public function validate()
    {
        if (\is_array($this->scrapeDiscoverys)) {
            Model::validateArray($this->scrapeDiscoverys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->metricsPath) {
            $res['MetricsPath'] = $this->metricsPath;
        }

        if (null !== $this->scrapeDiscoverys) {
            if (\is_array($this->scrapeDiscoverys)) {
                $res['ScrapeDiscoverys'] = [];
                $n1 = 0;
                foreach ($this->scrapeDiscoverys as $item1) {
                    $res['ScrapeDiscoverys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scrapeInterval) {
            $res['ScrapeInterval'] = $this->scrapeInterval;
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
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['MetricsPath'])) {
            $model->metricsPath = $map['MetricsPath'];
        }

        if (isset($map['ScrapeDiscoverys'])) {
            if (!empty($map['ScrapeDiscoverys'])) {
                $model->scrapeDiscoverys = [];
                $n1 = 0;
                foreach ($map['ScrapeDiscoverys'] as $item1) {
                    $model->scrapeDiscoverys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ScrapeInterval'])) {
            $model->scrapeInterval = $map['ScrapeInterval'];
        }

        return $model;
    }
}
