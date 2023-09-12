<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\GetMonitorDataResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $dps;

    /**
     * @example 1
     *
     * @var float
     */
    public $integrity;

    /**
     * @example 1689566839447
     *
     * @var int
     */
    public $messageWatermark;

    /**
     * @example elasticsearch-server.logic_cpu.cpu
     *
     * @var string
     */
    public $metric;

    /**
     * @example 172455913.18935508
     *
     * @var float
     */
    public $summary;

    /**
     * @example {
     * }
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
