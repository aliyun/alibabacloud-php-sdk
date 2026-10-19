<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetNodeDetailResponseBody\agentWorkProcess;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetNodeDetailResponseBody\artifacts;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetNodeDetailResponseBody\runLog;

class GetNodeDetailResponseBody extends Model
{
    /**
     * @var agentWorkProcess
     */
    public $agentWorkProcess;

    /**
     * @var artifacts[]
     */
    public $artifacts;

    /**
     * @var int
     */
    public $attemptSeq;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var bool
     */
    public $conversationWritable;

    /**
     * @var string
     */
    public $handler;

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
    public $nodeName;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $result;

    /**
     * @var bool
     */
    public $resumePending;

    /**
     * @var runLog[]
     */
    public $runLog;

    /**
     * @var int
     */
    public $stateVersion;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $todoIds;

    /**
     * @var int
     */
    public $turnSeq;

    /**
     * @var string
     */
    public $waitType;
    protected $_name = [
        'agentWorkProcess' => 'agentWorkProcess',
        'artifacts' => 'artifacts',
        'attemptSeq' => 'attemptSeq',
        'code' => 'code',
        'conversationId' => 'conversationId',
        'conversationWritable' => 'conversationWritable',
        'handler' => 'handler',
        'message' => 'message',
        'nodeId' => 'nodeId',
        'nodeName' => 'nodeName',
        'nodeType' => 'nodeType',
        'requestId' => 'requestId',
        'result' => 'result',
        'resumePending' => 'resumePending',
        'runLog' => 'runLog',
        'stateVersion' => 'stateVersion',
        'status' => 'status',
        'todoIds' => 'todoIds',
        'turnSeq' => 'turnSeq',
        'waitType' => 'waitType',
    ];

    public function validate()
    {
        if (null !== $this->agentWorkProcess) {
            $this->agentWorkProcess->validate();
        }
        if (\is_array($this->artifacts)) {
            Model::validateArray($this->artifacts);
        }
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        if (\is_array($this->runLog)) {
            Model::validateArray($this->runLog);
        }
        if (\is_array($this->todoIds)) {
            Model::validateArray($this->todoIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentWorkProcess) {
            $res['agentWorkProcess'] = null !== $this->agentWorkProcess ? $this->agentWorkProcess->toArray($noStream) : $this->agentWorkProcess;
        }

        if (null !== $this->artifacts) {
            if (\is_array($this->artifacts)) {
                $res['artifacts'] = [];
                $n1 = 0;
                foreach ($this->artifacts as $item1) {
                    $res['artifacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->attemptSeq) {
            $res['attemptSeq'] = $this->attemptSeq;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->conversationId) {
            $res['conversationId'] = $this->conversationId;
        }

        if (null !== $this->conversationWritable) {
            $res['conversationWritable'] = $this->conversationWritable;
        }

        if (null !== $this->handler) {
            $res['handler'] = $this->handler;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->nodeId) {
            $res['nodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['nodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->result) {
            if (\is_array($this->result)) {
                $res['result'] = [];
                foreach ($this->result as $key1 => $value1) {
                    $res['result'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resumePending) {
            $res['resumePending'] = $this->resumePending;
        }

        if (null !== $this->runLog) {
            if (\is_array($this->runLog)) {
                $res['runLog'] = [];
                $n1 = 0;
                foreach ($this->runLog as $item1) {
                    $res['runLog'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stateVersion) {
            $res['stateVersion'] = $this->stateVersion;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->todoIds) {
            if (\is_array($this->todoIds)) {
                $res['todoIds'] = [];
                $n1 = 0;
                foreach ($this->todoIds as $item1) {
                    $res['todoIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->turnSeq) {
            $res['turnSeq'] = $this->turnSeq;
        }

        if (null !== $this->waitType) {
            $res['waitType'] = $this->waitType;
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
        if (isset($map['agentWorkProcess'])) {
            $model->agentWorkProcess = agentWorkProcess::fromMap($map['agentWorkProcess']);
        }

        if (isset($map['artifacts'])) {
            if (!empty($map['artifacts'])) {
                $model->artifacts = [];
                $n1 = 0;
                foreach ($map['artifacts'] as $item1) {
                    $model->artifacts[$n1] = artifacts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['attemptSeq'])) {
            $model->attemptSeq = $map['attemptSeq'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['conversationId'])) {
            $model->conversationId = $map['conversationId'];
        }

        if (isset($map['conversationWritable'])) {
            $model->conversationWritable = $map['conversationWritable'];
        }

        if (isset($map['handler'])) {
            $model->handler = $map['handler'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['nodeId'])) {
            $model->nodeId = $map['nodeId'];
        }

        if (isset($map['nodeName'])) {
            $model->nodeName = $map['nodeName'];
        }

        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['result'])) {
            if (!empty($map['result'])) {
                $model->result = [];
                foreach ($map['result'] as $key1 => $value1) {
                    $model->result[$key1] = $value1;
                }
            }
        }

        if (isset($map['resumePending'])) {
            $model->resumePending = $map['resumePending'];
        }

        if (isset($map['runLog'])) {
            if (!empty($map['runLog'])) {
                $model->runLog = [];
                $n1 = 0;
                foreach ($map['runLog'] as $item1) {
                    $model->runLog[$n1] = runLog::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['stateVersion'])) {
            $model->stateVersion = $map['stateVersion'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['todoIds'])) {
            if (!empty($map['todoIds'])) {
                $model->todoIds = [];
                $n1 = 0;
                foreach ($map['todoIds'] as $item1) {
                    $model->todoIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['turnSeq'])) {
            $model->turnSeq = $map['turnSeq'];
        }

        if (isset($map['waitType'])) {
            $model->waitType = $map['waitType'];
        }

        return $model;
    }
}
