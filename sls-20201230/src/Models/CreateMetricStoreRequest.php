<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class CreateMetricStoreRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic sharding.
     *
     * @example true
     *
     * @var bool
     */
    public $autoSplit;

    /**
     * @description The maximum number of shards into which existing shards can be automatically split. This parameter is valid only when you set the autoSplit parameter to true.
     *
     * @example 64
     *
     * @var int
     */
    public $maxSplitShard;

    /**
     * @description The type of the metric data. Example: prometheus.
     *
     * @example prometheus
     *
     * @var string
     */
    public $metricType;

    /**
     * @description The type of the Metricstore. For example, you can set the parameter to standard to query Standard Metricstores.
     *
     * @example standard
     *
     * @var string
     */
    public $mode;

    /**
     * @description The name of the Metricstore.
     *
     * This parameter is required.
     * @example my_metric_store
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of shards in the Metricstore.
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $shardCount;

    /**
     * @description The retention period of the metric data in the Metricstore. Unit: days.
     *
     * This parameter is required.
     * @example 7
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'autoSplit'     => 'autoSplit',
        'maxSplitShard' => 'maxSplitShard',
        'metricType'    => 'metricType',
        'mode'          => 'mode',
        'name'          => 'name',
        'shardCount'    => 'shardCount',
        'ttl'           => 'ttl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSplit) {
            $res['autoSplit'] = $this->autoSplit;
        }
        if (null !== $this->maxSplitShard) {
            $res['maxSplitShard'] = $this->maxSplitShard;
        }
        if (null !== $this->metricType) {
            $res['metricType'] = $this->metricType;
        }
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->shardCount) {
            $res['shardCount'] = $this->shardCount;
        }
        if (null !== $this->ttl) {
            $res['ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMetricStoreRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoSplit'])) {
            $model->autoSplit = $map['autoSplit'];
        }
        if (isset($map['maxSplitShard'])) {
            $model->maxSplitShard = $map['maxSplitShard'];
        }
        if (isset($map['metricType'])) {
            $model->metricType = $map['metricType'];
        }
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['shardCount'])) {
            $model->shardCount = $map['shardCount'];
        }
        if (isset($map['ttl'])) {
            $model->ttl = $map['ttl'];
        }

        return $model;
    }
}
