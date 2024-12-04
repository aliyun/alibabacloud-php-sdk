<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class CreateLogStoreRequest extends Model
{
    /**
     * @description Specifies whether to record the **public IP address** and **log receiving time**. Default value: false. Valid values:
     *
     *   true********
     *   false********
     *
     * @example false
     *
     * @var bool
     */
    public $appendMeta;

    /**
     * @description Specifies whether to enable automatic sharding. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $autoSplit;

    /**
     * @description Specifies whether to enable the web tracking feature. Default value: false. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $enableTracking;

    /**
     * @description The data structure of the encryption configuration. The following parameters are included: `enable`, `encrypt_type`, and `user_cmk_info`. For more information, see [EncryptConf](https://help.aliyun.com/document_detail/409461.html).
     *
     * @var EncryptConf
     */
    public $encryptConf;

    /**
     * @description The retention period of data in the hot storage tier of the Logstore. Valid values: 7 to 3000. Unit: days.
     *
     * After the retention period that is specified for the hot storage tier elapses, the data is moved to the Infrequent Access (IA) storage tier. For more information, see [Enable hot and cold-tiered storage for a Logstore](https://help.aliyun.com/document_detail/308645.html).
     * @example 60
     *
     * @var int
     */
    public $hotTtl;

    /**
     * @description The retention period of data in the IA storage tier of the Logstore. You must set this parameter to at least 30 days. After the data retention period that you specify for the IA storage tier elapses, the data is moved to the Archive storage tier.
     *
     * @example 30
     *
     * @var int
     */
    public $infrequentAccessTTL;

    /**
     * @description The name of the Logstore. The name must meet the following requirements:
     *
     *   The name must be unique in a project.
     *   The name can contain only lowercase letters, digits, hyphens (-), and underscores (_).
     *   The name must start and end with a lowercase letter or a digit.
     *   The name must be 3 to 63 characters in length.
     *
     * This parameter is required.
     * @example my-logstore
     *
     * @var string
     */
    public $logstoreName;

    /**
     * @description The maximum number of shards into which existing shards can be automatically split. Valid values: 1 to 256.
     *
     * >  If you set autoSplit to true, you must specify this parameter.
     * @example 64
     *
     * @var int
     */
    public $maxSplitShard;

    /**
     * @description The type of the Logstore. Simple Log Service provides two types of Logstores: Standard Logstores and Query Logstores. Valid values:
     *
     *   **standard**: Standard Logstore. This type of Logstore supports the log analysis feature and is suitable for scenarios such as real-time monitoring and interactive analysis. You can also use this type of Logstore to build a comprehensive observability system.
     *   **query**: Query Logstore. This type of Logstore supports high-performance queries. The index traffic fee of a Query Logstore is approximately half that of a Standard Logstore. Query Logstores do not support SQL analysis. Query Logstores are suitable for scenarios in which the amount of data is large, the log retention period is long, or log analysis is not required. If logs are stored for weeks or months, the log retention period is considered long.
     *
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
     * @description The number of shards.
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $shardCount;

    /**
     * @description The type of the observable data. Valid values:
     *
     *   **None** (default): log data
     *   **Metrics**: metric data
     *
     * @example None
     *
     * @var string
     */
    public $telemetryType;

    /**
     * @description The retention period of data. Unit: days. Valid values: 1 to 3000. If you set this parameter to 3650, data is permanently stored.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'appendMeta'          => 'appendMeta',
        'autoSplit'           => 'autoSplit',
        'enableTracking'      => 'enable_tracking',
        'encryptConf'         => 'encrypt_conf',
        'hotTtl'              => 'hot_ttl',
        'infrequentAccessTTL' => 'infrequentAccessTTL',
        'logstoreName'        => 'logstoreName',
        'maxSplitShard'       => 'maxSplitShard',
        'mode'                => 'mode',
        'processorId'         => 'processorId',
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
     * @return CreateLogStoreRequest
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
