<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class GetPodLogsResponseBody extends Model
{
    /**
     * @var ContainerInfo
     */
    public $containerInfo;

    /**
     * @var string
     */
    public $containers;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string[]
     */
    public $logs;

    /**
     * @var string
     */
    public $podId;

    /**
     * @var string
     */
    public $podUid;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'containerInfo' => 'ContainerInfo',
        'containers' => 'Containers',
        'jobId' => 'JobId',
        'logs' => 'Logs',
        'podId' => 'PodId',
        'podUid' => 'PodUid',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->containerInfo) {
            $this->containerInfo->validate();
        }
        if (\is_array($this->logs)) {
            Model::validateArray($this->logs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerInfo) {
            $res['ContainerInfo'] = null !== $this->containerInfo ? $this->containerInfo->toArray($noStream) : $this->containerInfo;
        }

        if (null !== $this->containers) {
            $res['Containers'] = $this->containers;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->logs) {
            if (\is_array($this->logs)) {
                $res['Logs'] = [];
                $n1 = 0;
                foreach ($this->logs as $item1) {
                    $res['Logs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->podId) {
            $res['PodId'] = $this->podId;
        }

        if (null !== $this->podUid) {
            $res['PodUid'] = $this->podUid;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ContainerInfo'])) {
            $model->containerInfo = ContainerInfo::fromMap($map['ContainerInfo']);
        }

        if (isset($map['Containers'])) {
            $model->containers = $map['Containers'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = [];
                $n1 = 0;
                foreach ($map['Logs'] as $item1) {
                    $model->logs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PodId'])) {
            $model->podId = $map['PodId'];
        }

        if (isset($map['PodUid'])) {
            $model->podUid = $map['PodUid'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
