<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class Browser extends Model
{
    /**
     * @var string
     */
    public $browserId;

    /**
     * @var string
     */
    public $browserName;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $credentialId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $executionRoleArn;

    /**
     * @var string
     */
    public $lastUpdatedAt;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var NetworkConfiguration
     */
    public $networkConfiguration;

    /**
     * @var BrowserRecordingConfiguration
     */
    public $recording;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'browserId' => 'browserId',
        'browserName' => 'browserName',
        'cpu' => 'cpu',
        'createdAt' => 'createdAt',
        'credentialId' => 'credentialId',
        'description' => 'description',
        'executionRoleArn' => 'executionRoleArn',
        'lastUpdatedAt' => 'lastUpdatedAt',
        'memory' => 'memory',
        'networkConfiguration' => 'networkConfiguration',
        'recording' => 'recording',
        'status' => 'status',
        'statusReason' => 'statusReason',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (null !== $this->networkConfiguration) {
            $this->networkConfiguration->validate();
        }
        if (null !== $this->recording) {
            $this->recording->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserId) {
            $res['browserId'] = $this->browserId;
        }

        if (null !== $this->browserName) {
            $res['browserName'] = $this->browserName;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->credentialId) {
            $res['credentialId'] = $this->credentialId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->executionRoleArn) {
            $res['executionRoleArn'] = $this->executionRoleArn;
        }

        if (null !== $this->lastUpdatedAt) {
            $res['lastUpdatedAt'] = $this->lastUpdatedAt;
        }

        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->networkConfiguration) {
            $res['networkConfiguration'] = null !== $this->networkConfiguration ? $this->networkConfiguration->toArray($noStream) : $this->networkConfiguration;
        }

        if (null !== $this->recording) {
            $res['recording'] = null !== $this->recording ? $this->recording->toArray($noStream) : $this->recording;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusReason) {
            $res['statusReason'] = $this->statusReason;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['browserId'])) {
            $model->browserId = $map['browserId'];
        }

        if (isset($map['browserName'])) {
            $model->browserName = $map['browserName'];
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['credentialId'])) {
            $model->credentialId = $map['credentialId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['executionRoleArn'])) {
            $model->executionRoleArn = $map['executionRoleArn'];
        }

        if (isset($map['lastUpdatedAt'])) {
            $model->lastUpdatedAt = $map['lastUpdatedAt'];
        }

        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['networkConfiguration'])) {
            $model->networkConfiguration = NetworkConfiguration::fromMap($map['networkConfiguration']);
        }

        if (isset($map['recording'])) {
            $model->recording = BrowserRecordingConfiguration::fromMap($map['recording']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusReason'])) {
            $model->statusReason = $map['statusReason'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
