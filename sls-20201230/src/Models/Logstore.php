<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class Logstore extends Model
{
    /**
     * @description append client ip and receive time
     *
     * @var bool
     */
    public $appendMeta;

    /**
     * @description archiveSeconds
     *
     * @var int
     */
    public $archiveSeconds;

    /**
     * @description auto spilt shard
     *
     * @var bool
     */
    public $autoSplit;

    /**
     * @description create time
     *
     * @var int
     */
    public $createTime;

    /**
     * @description enable web tracking
     *
     * @var bool
     */
    public $enableTracking;

    /**
     * @description last modify time
     *
     * @var int
     */
    public $lastModifyTime;

    /**
     * @description logstore name
     *
     * @var string
     */
    public $logstoreName;

    /**
     * @description max split shard
     *
     * @var int
     */
    public $maxSplitShard;

    /**
     * @description shard count
     *
     * @var int
     */
    public $shardCount;

    /**
     * @description telemetryType
     *
     * @var string
     */
    public $telemetryType;

    /**
     * @description ttl
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'appendMeta'     => 'appendMeta',
        'archiveSeconds' => 'archiveSeconds',
        'autoSplit'      => 'autoSplit',
        'createTime'     => 'createTime',
        'enableTracking' => 'enableTracking',
        'lastModifyTime' => 'lastModifyTime',
        'logstoreName'   => 'logstoreName',
        'maxSplitShard'  => 'maxSplitShard',
        'shardCount'     => 'shardCount',
        'telemetryType'  => 'telemetryType',
        'ttl'            => 'ttl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appendMeta) {
            $res['appendMeta'] = $this->appendMeta;
        }
        if (null !== $this->archiveSeconds) {
            $res['archiveSeconds'] = $this->archiveSeconds;
        }
        if (null !== $this->autoSplit) {
            $res['autoSplit'] = $this->autoSplit;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->enableTracking) {
            $res['enableTracking'] = $this->enableTracking;
        }
        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->logstoreName) {
            $res['logstoreName'] = $this->logstoreName;
        }
        if (null !== $this->maxSplitShard) {
            $res['maxSplitShard'] = $this->maxSplitShard;
        }
        if (null !== $this->shardCount) {
            $res['shardCount'] = $this->shardCount;
        }
        if (null !== $this->telemetryType) {
            $res['telemetryType'] = $this->telemetryType;
        }
        if (null !== $this->ttl) {
            $res['ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Logstore
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appendMeta'])) {
            $model->appendMeta = $map['appendMeta'];
        }
        if (isset($map['archiveSeconds'])) {
            $model->archiveSeconds = $map['archiveSeconds'];
        }
        if (isset($map['autoSplit'])) {
            $model->autoSplit = $map['autoSplit'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['enableTracking'])) {
            $model->enableTracking = $map['enableTracking'];
        }
        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
        }
        if (isset($map['logstoreName'])) {
            $model->logstoreName = $map['logstoreName'];
        }
        if (isset($map['maxSplitShard'])) {
            $model->maxSplitShard = $map['maxSplitShard'];
        }
        if (isset($map['shardCount'])) {
            $model->shardCount = $map['shardCount'];
        }
        if (isset($map['telemetryType'])) {
            $model->telemetryType = $map['telemetryType'];
        }
        if (isset($map['ttl'])) {
            $model->ttl = $map['ttl'];
        }

        return $model;
    }
}
