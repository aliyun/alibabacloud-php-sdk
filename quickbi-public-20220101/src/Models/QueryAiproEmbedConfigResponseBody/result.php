<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryAiproEmbedConfigResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $aiProId;

    /**
     * @var int
     */
    public $chatHistoryStatus;

    /**
     * @var string
     */
    public $config;

    /**
     * @var int
     */
    public $memoryEnabled;

    /**
     * @var string
     */
    public $showName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $uploadEnabled;
    protected $_name = [
        'agentName' => 'AgentName',
        'aiProId' => 'AiProId',
        'chatHistoryStatus' => 'ChatHistoryStatus',
        'config' => 'Config',
        'memoryEnabled' => 'MemoryEnabled',
        'showName' => 'ShowName',
        'status' => 'Status',
        'uploadEnabled' => 'UploadEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->aiProId) {
            $res['AiProId'] = $this->aiProId;
        }

        if (null !== $this->chatHistoryStatus) {
            $res['ChatHistoryStatus'] = $this->chatHistoryStatus;
        }

        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->memoryEnabled) {
            $res['MemoryEnabled'] = $this->memoryEnabled;
        }

        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->uploadEnabled) {
            $res['UploadEnabled'] = $this->uploadEnabled;
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
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['AiProId'])) {
            $model->aiProId = $map['AiProId'];
        }

        if (isset($map['ChatHistoryStatus'])) {
            $model->chatHistoryStatus = $map['ChatHistoryStatus'];
        }

        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['MemoryEnabled'])) {
            $model->memoryEnabled = $map['MemoryEnabled'];
        }

        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UploadEnabled'])) {
            $model->uploadEnabled = $map['UploadEnabled'];
        }

        return $model;
    }
}
