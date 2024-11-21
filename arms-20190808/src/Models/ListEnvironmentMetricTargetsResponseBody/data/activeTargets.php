<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentMetricTargetsResponseBody\data;

use AlibabaCloud\Tea\Model;

class activeTargets extends Model
{
    /**
     * @var string[]
     */
    public $discoveredLabels;

    /**
     * @example http://xxx
     *
     * @var string
     */
    public $globalUrl;

    /**
     * @example up
     *
     * @var string
     */
    public $health;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @example Get \\"http://172.16.0.86:9104/metrics\\": dial tcp 172.16.0.86:9104: connect: connection refused
     *
     * @var string
     */
    public $lastError;

    /**
     * @example 2023-10-12T07:15:47.306691514Z
     *
     * @var string
     */
    public $lastScrape;

    /**
     * @example 0.00127593
     *
     * @var float
     */
    public $lastScrapeDuration;

    /**
     * @example 122
     *
     * @var int
     */
    public $lastScrapeSeries;

    /**
     * @example arms-prom/mysql-exporter-mysql-1694429267986-sm/0"
     *
     * @var string
     */
    public $scrapePool;

    /**
     * @example http://xxxx
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discoveredLabels) {
            $res['DiscoveredLabels'] = $this->discoveredLabels;
        }
        if (null !== $this->globalUrl) {
            $res['GlobalUrl'] = $this->globalUrl;
        }
        if (null !== $this->health) {
            $res['Health'] = $this->health;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
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

    /**
     * @param array $map
     *
     * @return activeTargets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscoveredLabels'])) {
            $model->discoveredLabels = $map['DiscoveredLabels'];
        }
        if (isset($map['GlobalUrl'])) {
            $model->globalUrl = $map['GlobalUrl'];
        }
        if (isset($map['Health'])) {
            $model->health = $map['Health'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
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
