<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class Logstore extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $appendMeta;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoSplit;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @example false
     *
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
     * @example 30
     *
     * @var int
     */
    public $infrequentAccessTTL;

    /**
     * @var int
     */
    public $lastModifyTime;

    /**
     * @description This parameter is required.
     *
     * @example my-logstore
     *
     * @var string
     */
    public $logstoreName;

    /**
     * @example 2
     *
     * @var int
     */
    public $maxSplitShard;

    /**
     * @example standard
     *
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
    public $productType;

    /**
     * @description This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $shardCount;

    /**
     * @var string
     */
    public $telemetryType;

    /**
     * @description This parameter is required.
     *
     * @example 30
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'appendMeta'          => 'appendMeta',
        'autoSplit'           => 'autoSplit',
        'createTime'          => 'createTime',
        'enableTracking'      => 'enable_tracking',
        'encryptConf'         => 'encrypt_conf',
        'hotTtl'              => 'hot_ttl',
        'infrequentAccessTTL' => 'infrequentAccessTTL',
        'lastModifyTime'      => 'lastModifyTime',
        'logstoreName'        => 'logstoreName',
        'maxSplitShard'       => 'maxSplitShard',
        'mode'                => 'mode',
        'processorId'         => 'processorId',
        'productType'         => 'productType',
        'shardCount'          => 'shardCount',
        'telemetryType'       => 'telemetryType',
        'ttl'                 => 'ttl',
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
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
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
        if (null !== $this->infrequentAccessTTL) {
            $res['infrequentAccessTTL'] = $this->infrequentAccessTTL;
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
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->processorId) {
            $res['processorId'] = $this->processorId;
        }
        if (null !== $this->productType) {
            $res['productType'] = $this->productType;
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
        if (isset($map['autoSplit'])) {
            $model->autoSplit = $map['autoSplit'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
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
        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
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
        if (isset($map['productType'])) {
            $model->productType = $map['productType'];
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
