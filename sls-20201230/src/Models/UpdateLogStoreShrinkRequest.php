<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateLogStoreShrinkRequest extends Model
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
     * @var bool
     */
    public $enableTracking;

    /**
     * @var string
     */
    public $encryptConfShrink;

    /**
     * @var string
     */
    public $logstoreName;

    /**
     * @var int
     */
    public $maxSplitShard;

    /**
     * @var int
     */
    public $shardCount;

    /**
     * @var int
     */
    public $ttl;
    protected $_name = [
        'appendMeta'        => 'appendMeta',
        'autoSplit'         => 'autoSplit',
        'enableTracking'    => 'enable_tracking',
        'encryptConfShrink' => 'encrypt_conf',
        'logstoreName'      => 'logstoreName',
        'maxSplitShard'     => 'maxSplitShard',
        'shardCount'        => 'shardCount',
        'ttl'               => 'ttl',
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
        if (null !== $this->autoSplit) {
            $res['autoSplit'] = $this->autoSplit;
        }
        if (null !== $this->enableTracking) {
            $res['enable_tracking'] = $this->enableTracking;
        }
        if (null !== $this->encryptConfShrink) {
            $res['encrypt_conf'] = $this->encryptConfShrink;
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
        if (null !== $this->ttl) {
            $res['ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLogStoreShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appendMeta'])) {
            $model->appendMeta = $map['appendMeta'];
        }
        if (isset($map['autoSplit'])) {
            $model->autoSplit = $map['autoSplit'];
        }
        if (isset($map['enable_tracking'])) {
            $model->enableTracking = $map['enable_tracking'];
        }
        if (isset($map['encrypt_conf'])) {
            $model->encryptConfShrink = $map['encrypt_conf'];
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
        if (isset($map['ttl'])) {
            $model->ttl = $map['ttl'];
        }

        return $model;
    }
}
