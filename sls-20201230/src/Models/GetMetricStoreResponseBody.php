<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetMetricStoreResponseBody extends Model
{
    /**
     * @description Indicates whether the automatic sharding feature is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $autoSplit;

    /**
     * @description The creation time. The value is a UNIX timestamp.
     *
     * @example 1698933894
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The last update time. The value is a UNIX timestamp.
     *
     * @example 1712023974
     *
     * @var int
     */
    public $lastModifyTime;

    /**
     * @description The maximum number of shards into which existing shards can be automatically split.
     *
     * @example 64
     *
     * @var int
     */
    public $maxSplitShard;

    /**
     * @description The metric type of the Metricstore. Example: prometheus.
     *
     * @example prometheus
     *
     * @var string
     */
    public $metricType;

    /**
     * @description The specification type of the Metricstore. Example: standard.
     *
     * @example standard
     *
     * @var string
     */
    public $mode;

    /**
     * @description The name of the Metricstore.
     *
     * @example my_metric_store
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of shards.
     *
     * @example 2
     *
     * @var int
     */
    public $shardCount;

    /**
     * @description The retention period. Unit: days.
     *
     * @example 7
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'autoSplit'      => 'autoSplit',
        'createTime'     => 'createTime',
        'lastModifyTime' => 'lastModifyTime',
        'maxSplitShard'  => 'maxSplitShard',
        'metricType'     => 'metricType',
        'mode'           => 'mode',
        'name'           => 'name',
        'shardCount'     => 'shardCount',
        'ttl'            => 'ttl',
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
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
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
     * @return GetMetricStoreResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoSplit'])) {
            $model->autoSplit = $map['autoSplit'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
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
