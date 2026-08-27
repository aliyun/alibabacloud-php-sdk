<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalDingtalkChatRequest\updateFrequency;

class CreatePersonalDingtalkChatRequest extends Model
{
    /**
     * @var string
     */
    public $chatId;

    /**
     * @var string
     */
    public $chatName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $historyStartTime;

    /**
     * @var string
     */
    public $notes;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $sourceTags;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var updateFrequency
     */
    public $updateFrequency;
    protected $_name = [
        'chatId' => 'chatId',
        'chatName' => 'chatName',
        'description' => 'description',
        'directoryId' => 'directoryId',
        'historyStartTime' => 'historyStartTime',
        'notes' => 'notes',
        'operatingObjectName' => 'operatingObjectName',
        'sourceTags' => 'sourceTags',
        'tenantId' => 'tenantId',
        'updateFrequency' => 'updateFrequency',
    ];

    public function validate()
    {
        if (null !== $this->updateFrequency) {
            $this->updateFrequency->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatId) {
            $res['chatId'] = $this->chatId;
        }

        if (null !== $this->chatName) {
            $res['chatName'] = $this->chatName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->historyStartTime) {
            $res['historyStartTime'] = $this->historyStartTime;
        }

        if (null !== $this->notes) {
            $res['notes'] = $this->notes;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->sourceTags) {
            $res['sourceTags'] = $this->sourceTags;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->updateFrequency) {
            $res['updateFrequency'] = null !== $this->updateFrequency ? $this->updateFrequency->toArray($noStream) : $this->updateFrequency;
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
        if (isset($map['chatId'])) {
            $model->chatId = $map['chatId'];
        }

        if (isset($map['chatName'])) {
            $model->chatName = $map['chatName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['historyStartTime'])) {
            $model->historyStartTime = $map['historyStartTime'];
        }

        if (isset($map['notes'])) {
            $model->notes = $map['notes'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['sourceTags'])) {
            $model->sourceTags = $map['sourceTags'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['updateFrequency'])) {
            $model->updateFrequency = updateFrequency::fromMap($map['updateFrequency']);
        }

        return $model;
    }
}
