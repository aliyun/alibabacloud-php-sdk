<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCustomScrapeJobRulesResponseBody\customScrapeJobRules;

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
    public $message;

    /**
     * @var string
     */
    public $metricsPath;

    /**
     * @var string
     */
    public $scheme;

    /**
     * @var string
     */
    public $scrapeInterval;

    /**
     * @var string
     */
    public $scrapeTimeout;

    /**
     * @var string[]
     */
    public $serviceDiscoveryConfigs;
    protected $_name = [
        'jobName' => 'jobName',
        'message' => 'message',
        'metricsPath' => 'metricsPath',
        'scheme' => 'scheme',
        'scrapeInterval' => 'scrapeInterval',
        'scrapeTimeout' => 'scrapeTimeout',
        'serviceDiscoveryConfigs' => 'serviceDiscoveryConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->serviceDiscoveryConfigs)) {
            Model::validateArray($this->serviceDiscoveryConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobName) {
            $res['jobName'] = $this->jobName;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->metricsPath) {
            $res['metricsPath'] = $this->metricsPath;
        }

        if (null !== $this->scheme) {
            $res['scheme'] = $this->scheme;
        }

        if (null !== $this->scrapeInterval) {
            $res['scrapeInterval'] = $this->scrapeInterval;
        }

        if (null !== $this->scrapeTimeout) {
            $res['scrapeTimeout'] = $this->scrapeTimeout;
        }

        if (null !== $this->serviceDiscoveryConfigs) {
            if (\is_array($this->serviceDiscoveryConfigs)) {
                $res['serviceDiscoveryConfigs'] = [];
                $n1 = 0;
                foreach ($this->serviceDiscoveryConfigs as $item1) {
                    $res['serviceDiscoveryConfigs'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['jobName'])) {
            $model->jobName = $map['jobName'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['metricsPath'])) {
            $model->metricsPath = $map['metricsPath'];
        }

        if (isset($map['scheme'])) {
            $model->scheme = $map['scheme'];
        }

        if (isset($map['scrapeInterval'])) {
            $model->scrapeInterval = $map['scrapeInterval'];
        }

        if (isset($map['scrapeTimeout'])) {
            $model->scrapeTimeout = $map['scrapeTimeout'];
        }

        if (isset($map['serviceDiscoveryConfigs'])) {
            if (!empty($map['serviceDiscoveryConfigs'])) {
                $model->serviceDiscoveryConfigs = [];
                $n1 = 0;
                foreach ($map['serviceDiscoveryConfigs'] as $item1) {
                    $model->serviceDiscoveryConfigs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
