<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogStoreResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $appendMeta;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoSplit;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableTracking;

    /**
     * @example cloud-siem
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @example 64
     *
     * @var int
     */
    public $maxSplitShard;

    /**
     * @example 2
     *
     * @var int
     */
    public $shardCount;

    /**
     * @example 180
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'appendMeta'     => 'AppendMeta',
        'autoSplit'      => 'AutoSplit',
        'enableTracking' => 'EnableTracking',
        'logStoreName'   => 'LogStoreName',
        'maxSplitShard'  => 'MaxSplitShard',
        'shardCount'     => 'ShardCount',
        'ttl'            => 'Ttl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appendMeta) {
            $res['AppendMeta'] = $this->appendMeta;
        }
        if (null !== $this->autoSplit) {
            $res['AutoSplit'] = $this->autoSplit;
        }
        if (null !== $this->enableTracking) {
            $res['EnableTracking'] = $this->enableTracking;
        }
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }
        if (null !== $this->maxSplitShard) {
            $res['MaxSplitShard'] = $this->maxSplitShard;
        }
        if (null !== $this->shardCount) {
            $res['ShardCount'] = $this->shardCount;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppendMeta'])) {
            $model->appendMeta = $map['AppendMeta'];
        }
        if (isset($map['AutoSplit'])) {
            $model->autoSplit = $map['AutoSplit'];
        }
        if (isset($map['EnableTracking'])) {
            $model->enableTracking = $map['EnableTracking'];
        }
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }
        if (isset($map['MaxSplitShard'])) {
            $model->maxSplitShard = $map['MaxSplitShard'];
        }
        if (isset($map['ShardCount'])) {
            $model->shardCount = $map['ShardCount'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
