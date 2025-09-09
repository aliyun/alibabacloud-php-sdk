<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheTaskResponseBody\flushCacheResults;

class DescribeIspFlushCacheTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var flushCacheResults[]
     */
    public $flushCacheResults;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'domainName' => 'DomainName',
        'flushCacheResults' => 'FlushCacheResults',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'isp' => 'Isp',
        'requestId' => 'RequestId',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        if (\is_array($this->flushCacheResults)) {
            Model::validateArray($this->flushCacheResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->flushCacheResults) {
            if (\is_array($this->flushCacheResults)) {
                $res['FlushCacheResults'] = [];
                $n1 = 0;
                foreach ($this->flushCacheResults as $item1) {
                    $res['FlushCacheResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['FlushCacheResults'])) {
            if (!empty($map['FlushCacheResults'])) {
                $model->flushCacheResults = [];
                $n1 = 0;
                foreach ($map['FlushCacheResults'] as $item1) {
                    $model->flushCacheResults[$n1] = flushCacheResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
