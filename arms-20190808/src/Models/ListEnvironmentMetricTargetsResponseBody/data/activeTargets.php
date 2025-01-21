<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentMetricTargetsResponseBody\data;

use AlibabaCloud\Dara\Model;

class activeTargets extends Model
{
    /**
     * @var string[]
     */
    public $discoveredLabels;
    /**
     * @var string
     */
    public $globalUrl;
    /**
     * @var string
     */
    public $health;
    /**
     * @var string[]
     */
    public $labels;
    /**
     * @var string
     */
    public $lastError;
    /**
     * @var string
     */
    public $lastScrape;
    /**
     * @var float
     */
    public $lastScrapeDuration;
    /**
     * @var int
     */
    public $lastScrapeSeries;
    /**
     * @var string
     */
    public $scrapePool;
    /**
     * @var string
     */
    public $scrapeUrl;
    protected $_name = [
        'discoveredLabels'   => 'DiscoveredLabels',
        'globalUrl'          => 'GlobalUrl',
        'health'             => 'Health',
        'labels'             => 'Labels',
        'lastError'          => 'LastError',
        'lastScrape'         => 'LastScrape',
        'lastScrapeDuration' => 'LastScrapeDuration',
        'lastScrapeSeries'   => 'LastScrapeSeries',
        'scrapePool'         => 'ScrapePool',
        'scrapeUrl'          => 'ScrapeUrl',
    ];

    public function validate()
    {
        if (\is_array($this->discoveredLabels)) {
            Model::validateArray($this->discoveredLabels);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->discoveredLabels) {
            if (\is_array($this->discoveredLabels)) {
                $res['DiscoveredLabels'] = [];
                foreach ($this->discoveredLabels as $key1 => $value1) {
                    $res['DiscoveredLabels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->globalUrl) {
            $res['GlobalUrl'] = $this->globalUrl;
        }

        if (null !== $this->health) {
            $res['Health'] = $this->health;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['Labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->lastError) {
            $res['LastError'] = $this->lastError;
        }

        if (null !== $this->lastScrape) {
            $res['LastScrape'] = $this->lastScrape;
        }

        if (null !== $this->lastScrapeDuration) {
            $res['LastScrapeDuration'] = $this->lastScrapeDuration;
        }

        if (null !== $this->lastScrapeSeries) {
            $res['LastScrapeSeries'] = $this->lastScrapeSeries;
        }

        if (null !== $this->scrapePool) {
            $res['ScrapePool'] = $this->scrapePool;
        }

        if (null !== $this->scrapeUrl) {
            $res['ScrapeUrl'] = $this->scrapeUrl;
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
        if (isset($map['DiscoveredLabels'])) {
            if (!empty($map['DiscoveredLabels'])) {
                $model->discoveredLabels = [];
                foreach ($map['DiscoveredLabels'] as $key1 => $value1) {
                    $model->discoveredLabels[$key1] = $value1;
                }
            }
        }

        if (isset($map['GlobalUrl'])) {
            $model->globalUrl = $map['GlobalUrl'];
        }

        if (isset($map['Health'])) {
            $model->health = $map['Health'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                foreach ($map['Labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        if (isset($map['LastError'])) {
            $model->lastError = $map['LastError'];
        }

        if (isset($map['LastScrape'])) {
            $model->lastScrape = $map['LastScrape'];
        }

        if (isset($map['LastScrapeDuration'])) {
            $model->lastScrapeDuration = $map['LastScrapeDuration'];
        }

        if (isset($map['LastScrapeSeries'])) {
            $model->lastScrapeSeries = $map['LastScrapeSeries'];
        }

        if (isset($map['ScrapePool'])) {
            $model->scrapePool = $map['ScrapePool'];
        }

        if (isset($map['ScrapeUrl'])) {
            $model->scrapeUrl = $map['ScrapeUrl'];
        }

        return $model;
    }
}
