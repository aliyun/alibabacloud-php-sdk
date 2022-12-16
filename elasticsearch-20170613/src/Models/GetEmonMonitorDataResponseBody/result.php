<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonMonitorDataResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example { "1586249280": 465.1980465119913, "1586249300": 213.45243650423305 }
     *
     * @var mixed[]
     */
    public $dps;

    /**
     * @example 1.0
     *
     * @var float
     */
    public $integrity;

    /**
     * @example 1522127381471
     *
     * @var int
     */
    public $messageWatermark;

    /**
     * @example elasticbuild.elasticsearch.source.total_doc_count
     *
     * @var string
     */
    public $metric;

    /**
     * @example 10
     *
     * @var float
     */
    public $summary;

    /**
     * @example {"taskName":"et-xxx","userId":"123456"}
     *
     * @var mixed[]
     */
    public $tags;
    protected $_name = [
        'dps'              => 'dps',
        'integrity'        => 'integrity',
        'messageWatermark' => 'messageWatermark',
        'metric'           => 'metric',
        'summary'          => 'summary',
        'tags'             => 'tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dps) {
            $res['dps'] = $this->dps;
        }
        if (null !== $this->integrity) {
            $res['integrity'] = $this->integrity;
        }
        if (null !== $this->messageWatermark) {
            $res['messageWatermark'] = $this->messageWatermark;
        }
        if (null !== $this->metric) {
            $res['metric'] = $this->metric;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dps'])) {
            $model->dps = $map['dps'];
        }
        if (isset($map['integrity'])) {
            $model->integrity = $map['integrity'];
        }
        if (isset($map['messageWatermark'])) {
            $model->messageWatermark = $map['messageWatermark'];
        }
        if (isset($map['metric'])) {
            $model->metric = $map['metric'];
        }
        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }

        return $model;
    }
}
