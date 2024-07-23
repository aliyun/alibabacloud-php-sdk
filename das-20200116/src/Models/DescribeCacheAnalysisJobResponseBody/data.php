<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\bigKeys;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\bigKeysOfNum;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\expiryKeysLevelCount;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\keyPrefixes;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\unexBigKeysOfBytes;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\unexBigKeysOfNum;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The details of the large keys. The returned large keys are sorted in descending order based on the number of bytes occupied by the keys.
     *
     * @var bigKeys
     */
    public $bigKeys;

    /**
     * @description The details of the large keys. The returned large keys are sorted in descending order based on the number of keys.
     *
     * @var bigKeysOfNum
     */
    public $bigKeysOfNum;

    /**
     * @description The statistics of the keys that have expired.
     *
     * @var expiryKeysLevelCount
     */
    public $expiryKeysLevelCount;

    /**
     * @description The instance ID.
     *
     * @example r-bp18ff4a195d****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the cache analysis task.
     *
     * @example sf79-sd99-sa37-****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The prefixes of the keys.
     *
     * @var keyPrefixes
     */
    public $keyPrefixes;

    /**
     * @description The message that is returned for the request.
     *
     * >  If the request is successful, **Successful** is returned. If the request fails, an error message that contains information such as an error code is returned.
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the data node on the instance.
     *
     * @example r-x****-db-0
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The state of the cache analysis task. Valid values:
     *
     *   **BACKUP**: The data is being backed up.
     *   **ANALYZING**: The data is being analyzed.
     *   **FINISHED**: The data is analyzed.
     *   **FAILED**: An error occurred.
     *
     * @example BACKUP
     *
     * @var string
     */
    public $taskState;

    /**
     * @description The details of permanent keys. The returned keys are sorted in descending order based on the number of bytes occupied by the keys.
     *
     * @var unexBigKeysOfBytes
     */
    public $unexBigKeysOfBytes;

    /**
     * @description The details of permanent keys. The returned keys are sorted in descending order based on the number of keys.
     *
     * @var unexBigKeysOfNum
     */
    public $unexBigKeysOfNum;
    protected $_name = [
        'bigKeys'              => 'BigKeys',
        'bigKeysOfNum'         => 'BigKeysOfNum',
        'expiryKeysLevelCount' => 'ExpiryKeysLevelCount',
        'instanceId'           => 'InstanceId',
        'jobId'                => 'JobId',
        'keyPrefixes'          => 'KeyPrefixes',
        'message'              => 'Message',
        'nodeId'               => 'NodeId',
        'taskState'            => 'TaskState',
        'unexBigKeysOfBytes'   => 'UnexBigKeysOfBytes',
        'unexBigKeysOfNum'     => 'UnexBigKeysOfNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bigKeys) {
            $res['BigKeys'] = null !== $this->bigKeys ? $this->bigKeys->toMap() : null;
        }
        if (null !== $this->bigKeysOfNum) {
            $res['BigKeysOfNum'] = null !== $this->bigKeysOfNum ? $this->bigKeysOfNum->toMap() : null;
        }
        if (null !== $this->expiryKeysLevelCount) {
            $res['ExpiryKeysLevelCount'] = null !== $this->expiryKeysLevelCount ? $this->expiryKeysLevelCount->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->keyPrefixes) {
            $res['KeyPrefixes'] = null !== $this->keyPrefixes ? $this->keyPrefixes->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
        }
        if (null !== $this->unexBigKeysOfBytes) {
            $res['UnexBigKeysOfBytes'] = null !== $this->unexBigKeysOfBytes ? $this->unexBigKeysOfBytes->toMap() : null;
        }
        if (null !== $this->unexBigKeysOfNum) {
            $res['UnexBigKeysOfNum'] = null !== $this->unexBigKeysOfNum ? $this->unexBigKeysOfNum->toMap() : null;
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
        if (isset($map['BigKeys'])) {
            $model->bigKeys = bigKeys::fromMap($map['BigKeys']);
        }
        if (isset($map['BigKeysOfNum'])) {
            $model->bigKeysOfNum = bigKeysOfNum::fromMap($map['BigKeysOfNum']);
        }
        if (isset($map['ExpiryKeysLevelCount'])) {
            $model->expiryKeysLevelCount = expiryKeysLevelCount::fromMap($map['ExpiryKeysLevelCount']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['KeyPrefixes'])) {
            $model->keyPrefixes = keyPrefixes::fromMap($map['KeyPrefixes']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }
        if (isset($map['UnexBigKeysOfBytes'])) {
            $model->unexBigKeysOfBytes = unexBigKeysOfBytes::fromMap($map['UnexBigKeysOfBytes']);
        }
        if (isset($map['UnexBigKeysOfNum'])) {
            $model->unexBigKeysOfNum = unexBigKeysOfNum::fromMap($map['UnexBigKeysOfNum']);
        }

        return $model;
    }
}
