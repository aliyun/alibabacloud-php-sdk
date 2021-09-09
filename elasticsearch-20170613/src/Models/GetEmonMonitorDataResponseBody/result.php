<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonMonitorDataResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var float
     */
    public $integrity;

    /**
     * @var float
     */
    public $summary;

    /**
     * @var int
     */
    public $messageWatermark;

    /**
     * @var mixed[]
     */
    public $dps;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $metric;
    protected $_name = [
        'integrity'        => 'integrity',
        'summary'          => 'summary',
        'messageWatermark' => 'messageWatermark',
        'dps'              => 'dps',
        'tags'             => 'tags',
        'metric'           => 'metric',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->integrity) {
            $res['integrity'] = $this->integrity;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->messageWatermark) {
            $res['messageWatermark'] = $this->messageWatermark;
        }
        if (null !== $this->dps) {
            $res['dps'] = $this->dps;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->metric) {
            $res['metric'] = $this->metric;
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
        if (isset($map['integrity'])) {
            $model->integrity = $map['integrity'];
        }
        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }
        if (isset($map['messageWatermark'])) {
            $model->messageWatermark = $map['messageWatermark'];
        }
        if (isset($map['dps'])) {
            $model->dps = $map['dps'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }
        if (isset($map['metric'])) {
            $model->metric = $map['metric'];
        }

        return $model;
    }
}
