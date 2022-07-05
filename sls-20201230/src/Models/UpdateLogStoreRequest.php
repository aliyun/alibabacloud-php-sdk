<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateLogStoreRequest extends Model
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
     * @var EncryptConf
     */
    public $encryptConf;

    /**
     * @var int
     */
    public $hotTtl;

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
     * @var string
     */
    public $telemetryType;

    /**
     * @var int
     */
    public $ttl;
    protected $_name = [
        'appendMeta'     => 'appendMeta',
        'autoSplit'      => 'autoSplit',
        'enableTracking' => 'enable_tracking',
        'encryptConf'    => 'encrypt_conf',
        'hotTtl'         => 'hot_ttl',
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
        if (null !== $this->autoSplit) {
            $res['autoSplit'] = $this->autoSplit;
        }
        if (null !== $this->enableTracking) {
            $res['enable_tracking'] = $this->enableTracking;
        }
        if (null !== $this->encryptConf) {
            $res['encrypt_conf'] = null !== $this->encryptConf ? $this->encryptConf->toMap() : null;
        }
        if (null !== $this->hotTtl) {
            $res['hot_ttl'] = $this->hotTtl;
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
     * @return UpdateLogStoreRequest
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
            $model->encryptConf = EncryptConf::fromMap($map['encrypt_conf']);
        }
        if (isset($map['hot_ttl'])) {
            $model->hotTtl = $map['hot_ttl'];
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
