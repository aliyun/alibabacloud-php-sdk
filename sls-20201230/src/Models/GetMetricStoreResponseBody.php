<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class GetMetricStoreResponseBody extends Model
{
    /**
     * @var bool
     */
    public $appendMeta;

    /**
     * @var bool
     */
    public $autoSplit;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $hotTtl;

    /**
     * @var int
     */
    public $infrequentAccessTTL;

    /**
     * @var int
     */
    public $lastModifyTime;

    /**
     * @var int
     */
    public $maxSplitShard;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $processorId;

    /**
     * @var int
     */
    public $shardCount;

    /**
     * @var ShardingPolicy
     */
    public $shardingPolicy;

    /**
     * @var int
     */
    public $ttl;
    protected $_name = [
        'appendMeta' => 'appendMeta',
        'autoSplit' => 'autoSplit',
        'createTime' => 'createTime',
        'hotTtl' => 'hot_ttl',
        'infrequentAccessTTL' => 'infrequentAccessTTL',
        'lastModifyTime' => 'lastModifyTime',
        'maxSplitShard' => 'maxSplitShard',
        'metricType' => 'metricType',
        'mode' => 'mode',
        'name' => 'name',
        'processorId' => 'processorId',
        'shardCount' => 'shardCount',
        'shardingPolicy' => 'shardingPolicy',
        'ttl' => 'ttl',
    ];

    public function validate()
    {
        if (null !== $this->shardingPolicy) {
            $this->shardingPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appendMeta) {
            $res['appendMeta'] = $this->appendMeta;
        }

        if (null !== $this->autoSplit) {
            $res['autoSplit'] = $this->autoSplit;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->hotTtl) {
            $res['hot_ttl'] = $this->hotTtl;
        }

        if (null !== $this->infrequentAccessTTL) {
            $res['infrequentAccessTTL'] = $this->infrequentAccessTTL;
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

        if (null !== $this->processorId) {
            $res['processorId'] = $this->processorId;
        }

        if (null !== $this->shardCount) {
            $res['shardCount'] = $this->shardCount;
        }

        if (null !== $this->shardingPolicy) {
            $res['shardingPolicy'] = null !== $this->shardingPolicy ? $this->shardingPolicy->toArray($noStream) : $this->shardingPolicy;
        }

        if (null !== $this->ttl) {
            $res['ttl'] = $this->ttl;
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
        if (isset($map['appendMeta'])) {
            $model->appendMeta = $map['appendMeta'];
        }

        if (isset($map['autoSplit'])) {
            $model->autoSplit = $map['autoSplit'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['hot_ttl'])) {
            $model->hotTtl = $map['hot_ttl'];
        }

        if (isset($map['infrequentAccessTTL'])) {
            $model->infrequentAccessTTL = $map['infrequentAccessTTL'];
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

        if (isset($map['processorId'])) {
            $model->processorId = $map['processorId'];
        }

        if (isset($map['shardCount'])) {
            $model->shardCount = $map['shardCount'];
        }

        if (isset($map['shardingPolicy'])) {
            $model->shardingPolicy = ShardingPolicy::fromMap($map['shardingPolicy']);
        }

        if (isset($map['ttl'])) {
            $model->ttl = $map['ttl'];
        }

        return $model;
    }
}
