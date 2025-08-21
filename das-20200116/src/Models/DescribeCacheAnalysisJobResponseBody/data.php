<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\bigKeys;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\bigKeysOfNum;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\expiryKeysLevelCount;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\keyPrefixes;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\unexBigKeysOfBytes;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\unexBigKeysOfNum;

class data extends Model
{
    /**
     * @var bigKeys
     */
    public $bigKeys;

    /**
     * @var bigKeysOfNum
     */
    public $bigKeysOfNum;

    /**
     * @var expiryKeysLevelCount
     */
    public $expiryKeysLevelCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var keyPrefixes
     */
    public $keyPrefixes;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $taskState;

    /**
     * @var unexBigKeysOfBytes
     */
    public $unexBigKeysOfBytes;

    /**
     * @var unexBigKeysOfNum
     */
    public $unexBigKeysOfNum;
    protected $_name = [
        'bigKeys' => 'BigKeys',
        'bigKeysOfNum' => 'BigKeysOfNum',
        'expiryKeysLevelCount' => 'ExpiryKeysLevelCount',
        'instanceId' => 'InstanceId',
        'jobId' => 'JobId',
        'keyPrefixes' => 'KeyPrefixes',
        'message' => 'Message',
        'nodeId' => 'NodeId',
        'taskState' => 'TaskState',
        'unexBigKeysOfBytes' => 'UnexBigKeysOfBytes',
        'unexBigKeysOfNum' => 'UnexBigKeysOfNum',
    ];

    public function validate()
    {
        if (null !== $this->bigKeys) {
            $this->bigKeys->validate();
        }
        if (null !== $this->bigKeysOfNum) {
            $this->bigKeysOfNum->validate();
        }
        if (null !== $this->expiryKeysLevelCount) {
            $this->expiryKeysLevelCount->validate();
        }
        if (null !== $this->keyPrefixes) {
            $this->keyPrefixes->validate();
        }
        if (null !== $this->unexBigKeysOfBytes) {
            $this->unexBigKeysOfBytes->validate();
        }
        if (null !== $this->unexBigKeysOfNum) {
            $this->unexBigKeysOfNum->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bigKeys) {
            $res['BigKeys'] = null !== $this->bigKeys ? $this->bigKeys->toArray($noStream) : $this->bigKeys;
        }

        if (null !== $this->bigKeysOfNum) {
            $res['BigKeysOfNum'] = null !== $this->bigKeysOfNum ? $this->bigKeysOfNum->toArray($noStream) : $this->bigKeysOfNum;
        }

        if (null !== $this->expiryKeysLevelCount) {
            $res['ExpiryKeysLevelCount'] = null !== $this->expiryKeysLevelCount ? $this->expiryKeysLevelCount->toArray($noStream) : $this->expiryKeysLevelCount;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->keyPrefixes) {
            $res['KeyPrefixes'] = null !== $this->keyPrefixes ? $this->keyPrefixes->toArray($noStream) : $this->keyPrefixes;
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
            $res['UnexBigKeysOfBytes'] = null !== $this->unexBigKeysOfBytes ? $this->unexBigKeysOfBytes->toArray($noStream) : $this->unexBigKeysOfBytes;
        }

        if (null !== $this->unexBigKeysOfNum) {
            $res['UnexBigKeysOfNum'] = null !== $this->unexBigKeysOfNum ? $this->unexBigKeysOfNum->toArray($noStream) : $this->unexBigKeysOfNum;
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
