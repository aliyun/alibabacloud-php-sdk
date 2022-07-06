<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\LogtailConfig;

use AlibabaCloud\SDK\Sls\V20201230\Models\LogtailConfig\inputDetail\sensitiveKeys;
use AlibabaCloud\Tea\Model;

class inputDetail extends Model
{
    /**
     * @description adjustTimezone
     *
     * @var bool
     */
    public $adjustTimezone;

    /**
     * @description delayAlarmBytes
     *
     * @var int
     */
    public $delayAlarmBytes;

    /**
     * @description enableTag
     *
     * @var bool
     */
    public $enableTag;

    /**
     * @description filePattern
     *
     * @var string
     */
    public $filePattern;

    /**
     * @description filterKey
     *
     * @var string[]
     */
    public $filterKey;

    /**
     * @description filterRegex
     *
     * @var string[]
     */
    public $filterRegex;

    /**
     * @description localStorage
     *
     * @var bool
     */
    public $localStorage;

    /**
     * @description logBeginRegex
     *
     * @var string
     */
    public $logBeginRegex;

    /**
     * @description logPath
     *
     * @var string
     */
    public $logPath;

    /**
     * @description logTimezone
     *
     * @var string
     */
    public $logTimezone;

    /**
     * @description logType
     *
     * @var string
     */
    public $logType;

    /**
     * @description maxSendRate
     *
     * @var int
     */
    public $maxSendRate;

    /**
     * @description mergeType
     *
     * @var string
     */
    public $mergeType;

    /**
     * @description priority
     *
     * @var int
     */
    public $priority;

    /**
     * @description sendRateExpire
     *
     * @var int
     */
    public $sendRateExpire;

    /**
     * @description sensitive_keys
     *
     * @var sensitiveKeys[]
     */
    public $sensitiveKeys;

    /**
     * @description shardHashKey
     *
     * @var string[]
     */
    public $shardHashKey;

    /**
     * @description timeFormat
     *
     * @var string
     */
    public $timeFormat;

    /**
     * @description topicFormat
     *
     * @var string
     */
    public $topicFormat;
    protected $_name = [
        'adjustTimezone'  => 'adjustTimezone',
        'delayAlarmBytes' => 'delayAlarmBytes',
        'enableTag'       => 'enableTag',
        'filePattern'     => 'filePattern',
        'filterKey'       => 'filterKey',
        'filterRegex'     => 'filterRegex',
        'localStorage'    => 'localStorage',
        'logBeginRegex'   => 'logBeginRegex',
        'logPath'         => 'logPath',
        'logTimezone'     => 'logTimezone',
        'logType'         => 'logType',
        'maxSendRate'     => 'maxSendRate',
        'mergeType'       => 'mergeType',
        'priority'        => 'priority',
        'sendRateExpire'  => 'sendRateExpire',
        'sensitiveKeys'   => 'sensitive_keys',
        'shardHashKey'    => 'shardHashKey',
        'timeFormat'      => 'timeFormat',
        'topicFormat'     => 'topicFormat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adjustTimezone) {
            $res['adjustTimezone'] = $this->adjustTimezone;
        }
        if (null !== $this->delayAlarmBytes) {
            $res['delayAlarmBytes'] = $this->delayAlarmBytes;
        }
        if (null !== $this->enableTag) {
            $res['enableTag'] = $this->enableTag;
        }
        if (null !== $this->filePattern) {
            $res['filePattern'] = $this->filePattern;
        }
        if (null !== $this->filterKey) {
            $res['filterKey'] = $this->filterKey;
        }
        if (null !== $this->filterRegex) {
            $res['filterRegex'] = $this->filterRegex;
        }
        if (null !== $this->localStorage) {
            $res['localStorage'] = $this->localStorage;
        }
        if (null !== $this->logBeginRegex) {
            $res['logBeginRegex'] = $this->logBeginRegex;
        }
        if (null !== $this->logPath) {
            $res['logPath'] = $this->logPath;
        }
        if (null !== $this->logTimezone) {
            $res['logTimezone'] = $this->logTimezone;
        }
        if (null !== $this->logType) {
            $res['logType'] = $this->logType;
        }
        if (null !== $this->maxSendRate) {
            $res['maxSendRate'] = $this->maxSendRate;
        }
        if (null !== $this->mergeType) {
            $res['mergeType'] = $this->mergeType;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->sendRateExpire) {
            $res['sendRateExpire'] = $this->sendRateExpire;
        }
        if (null !== $this->sensitiveKeys) {
            $res['sensitive_keys'] = [];
            if (null !== $this->sensitiveKeys && \is_array($this->sensitiveKeys)) {
                $n = 0;
                foreach ($this->sensitiveKeys as $item) {
                    $res['sensitive_keys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->shardHashKey) {
            $res['shardHashKey'] = $this->shardHashKey;
        }
        if (null !== $this->timeFormat) {
            $res['timeFormat'] = $this->timeFormat;
        }
        if (null !== $this->topicFormat) {
            $res['topicFormat'] = $this->topicFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['adjustTimezone'])) {
            $model->adjustTimezone = $map['adjustTimezone'];
        }
        if (isset($map['delayAlarmBytes'])) {
            $model->delayAlarmBytes = $map['delayAlarmBytes'];
        }
        if (isset($map['enableTag'])) {
            $model->enableTag = $map['enableTag'];
        }
        if (isset($map['filePattern'])) {
            $model->filePattern = $map['filePattern'];
        }
        if (isset($map['filterKey'])) {
            if (!empty($map['filterKey'])) {
                $model->filterKey = $map['filterKey'];
            }
        }
        if (isset($map['filterRegex'])) {
            if (!empty($map['filterRegex'])) {
                $model->filterRegex = $map['filterRegex'];
            }
        }
        if (isset($map['localStorage'])) {
            $model->localStorage = $map['localStorage'];
        }
        if (isset($map['logBeginRegex'])) {
            $model->logBeginRegex = $map['logBeginRegex'];
        }
        if (isset($map['logPath'])) {
            $model->logPath = $map['logPath'];
        }
        if (isset($map['logTimezone'])) {
            $model->logTimezone = $map['logTimezone'];
        }
        if (isset($map['logType'])) {
            $model->logType = $map['logType'];
        }
        if (isset($map['maxSendRate'])) {
            $model->maxSendRate = $map['maxSendRate'];
        }
        if (isset($map['mergeType'])) {
            $model->mergeType = $map['mergeType'];
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }
        if (isset($map['sendRateExpire'])) {
            $model->sendRateExpire = $map['sendRateExpire'];
        }
        if (isset($map['sensitive_keys'])) {
            if (!empty($map['sensitive_keys'])) {
                $model->sensitiveKeys = [];
                $n                    = 0;
                foreach ($map['sensitive_keys'] as $item) {
                    $model->sensitiveKeys[$n++] = null !== $item ? sensitiveKeys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['shardHashKey'])) {
            if (!empty($map['shardHashKey'])) {
                $model->shardHashKey = $map['shardHashKey'];
            }
        }
        if (isset($map['timeFormat'])) {
            $model->timeFormat = $map['timeFormat'];
        }
        if (isset($map['topicFormat'])) {
            $model->topicFormat = $map['topicFormat'];
        }

        return $model;
    }
}
