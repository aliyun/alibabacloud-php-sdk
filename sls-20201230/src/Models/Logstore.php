<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class Logstore extends Model
{
    /**
     * @description 接收日志后，自动添加客户端外网IP和日志到达时间
     *
     * @var bool
     */
    public $appendMeta;

    /**
     * @description 是否开启 shard 自动分裂。当写入数据量超过已有分区（Shard）写入服务能力且持续5分钟以上时，开启自动分裂功能可自动根据数据量增加分区数量
     *
     * @var bool
     */
    public $autoSplit;

    /**
     * @description 创建时间。
     *
     * @var int
     */
    public $createTime;

    /**
     * @description WebTracking功能支持快速采集各种浏览器以及iOS/Android/APP访问信息，默认关闭
     *
     * @var bool
     */
    public $enableTracking;

    /**
     * @description Encrypt configuration
     *
     * @var EncryptConf
     */
    public $encryptConf;

    /**
     * @description 必须在 (30, ttl) 之间
     *
     * @var int
     */
    public $hotTtl;

    /**
     * @description 最后修改时间。
     *
     * @var int
     */
    public $lastModifyTime;

    /**
     * @description logstore 的名称。
     *
     * @var string
     */
    public $logstoreName;

    /**
     * @description 最大 shard 数量。
     *
     * @var int
     */
    public $maxSplitShard;

    /**
     * @description shard 数量。
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
     * @description 数据保存的天数。
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'appendMeta'     => 'appendMeta',
        'autoSplit'      => 'autoSplit',
        'createTime'     => 'createTime',
        'enableTracking' => 'enable_tracking',
        'encryptConf'    => 'encrypt_conf',
        'hotTtl'         => 'hot_ttl',
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
