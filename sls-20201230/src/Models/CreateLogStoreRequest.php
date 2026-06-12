<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class CreateLogStoreRequest extends Model
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
    public $enableModify;

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
     * @var int
     */
    public $infrequentAccessTTL;

    /**
     * @var string
     */
    public $logstoreName;

    /**
     * @var int
     */
    public $maxSplitShard;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $processorId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $shardCount;

    /**
     * @var ShardingPolicy
     */
    public $shardingPolicy;

    /**
     * @var string
     */
    public $telemetryType;

    /**
     * @var int
     */
    public $ttl;
    protected $_name = [
        'appendMeta' => 'appendMeta',
        'autoSplit' => 'autoSplit',
        'enableModify' => 'enableModify',
        'enableTracking' => 'enable_tracking',
        'encryptConf' => 'encrypt_conf',
        'hotTtl' => 'hot_ttl',
        'infrequentAccessTTL' => 'infrequentAccessTTL',
        'logstoreName' => 'logstoreName',
        'maxSplitShard' => 'maxSplitShard',
        'mode' => 'mode',
        'processorId' => 'processorId',
        'resourceGroupId' => 'resourceGroupId',
        'shardCount' => 'shardCount',
        'shardingPolicy' => 'shardingPolicy',
        'telemetryType' => 'telemetryType',
        'ttl' => 'ttl',
    ];

    public function validate()
    {
        if (null !== $this->encryptConf) {
            $this->encryptConf->validate();
        }
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

        if (null !== $this->enableModify) {
            $res['enableModify'] = $this->enableModify;
        }

        if (null !== $this->enableTracking) {
            $res['enable_tracking'] = $this->enableTracking;
        }

        if (null !== $this->encryptConf) {
            $res['encrypt_conf'] = null !== $this->encryptConf ? $this->encryptConf->toArray($noStream) : $this->encryptConf;
        }

        if (null !== $this->hotTtl) {
            $res['hot_ttl'] = $this->hotTtl;
        }

        if (null !== $this->infrequentAccessTTL) {
            $res['infrequentAccessTTL'] = $this->infrequentAccessTTL;
        }

        if (null !== $this->logstoreName) {
            $res['logstoreName'] = $this->logstoreName;
        }

        if (null !== $this->maxSplitShard) {
            $res['maxSplitShard'] = $this->maxSplitShard;
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->processorId) {
            $res['processorId'] = $this->processorId;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->shardCount) {
            $res['shardCount'] = $this->shardCount;
        }

        if (null !== $this->shardingPolicy) {
            $res['shardingPolicy'] = null !== $this->shardingPolicy ? $this->shardingPolicy->toArray($noStream) : $this->shardingPolicy;
        }

        if (null !== $this->telemetryType) {
            $res['telemetryType'] = $this->telemetryType;
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

        if (isset($map['enableModify'])) {
            $model->enableModify = $map['enableModify'];
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

        if (isset($map['infrequentAccessTTL'])) {
            $model->infrequentAccessTTL = $map['infrequentAccessTTL'];
        }

        if (isset($map['logstoreName'])) {
            $model->logstoreName = $map['logstoreName'];
        }

        if (isset($map['maxSplitShard'])) {
            $model->maxSplitShard = $map['maxSplitShard'];
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['processorId'])) {
            $model->processorId = $map['processorId'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['shardCount'])) {
            $model->shardCount = $map['shardCount'];
        }

        if (isset($map['shardingPolicy'])) {
            $model->shardingPolicy = ShardingPolicy::fromMap($map['shardingPolicy']);
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
