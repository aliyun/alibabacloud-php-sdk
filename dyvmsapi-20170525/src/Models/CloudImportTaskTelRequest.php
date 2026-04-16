<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudImportTaskTelRequest\taskTelList;

class CloudImportTaskTelRequest extends Model
{
    /**
     * @var string
     */
    public $bridgeVoicePath;

    /**
     * @var int
     */
    public $bridgeVoiceType;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var int
     */
    public $importTelAutoStart;

    /**
     * @var int
     */
    public $isRepeat;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var taskTelList[]
     */
    public $taskTelList;
    protected $_name = [
        'bridgeVoicePath' => 'BridgeVoicePath',
        'bridgeVoiceType' => 'BridgeVoiceType',
        'enterpriseId' => 'EnterpriseId',
        'fileId' => 'FileId',
        'importTelAutoStart' => 'ImportTelAutoStart',
        'isRepeat' => 'IsRepeat',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'priority' => 'Priority',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'taskId' => 'TaskId',
        'taskTelList' => 'TaskTelList',
    ];

    public function validate()
    {
        if (\is_array($this->taskTelList)) {
            Model::validateArray($this->taskTelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bridgeVoicePath) {
            $res['BridgeVoicePath'] = $this->bridgeVoicePath;
        }

        if (null !== $this->bridgeVoiceType) {
            $res['BridgeVoiceType'] = $this->bridgeVoiceType;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->importTelAutoStart) {
            $res['ImportTelAutoStart'] = $this->importTelAutoStart;
        }

        if (null !== $this->isRepeat) {
            $res['IsRepeat'] = $this->isRepeat;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskTelList) {
            if (\is_array($this->taskTelList)) {
                $res['TaskTelList'] = [];
                $n1 = 0;
                foreach ($this->taskTelList as $item1) {
                    $res['TaskTelList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BridgeVoicePath'])) {
            $model->bridgeVoicePath = $map['BridgeVoicePath'];
        }

        if (isset($map['BridgeVoiceType'])) {
            $model->bridgeVoiceType = $map['BridgeVoiceType'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['ImportTelAutoStart'])) {
            $model->importTelAutoStart = $map['ImportTelAutoStart'];
        }

        if (isset($map['IsRepeat'])) {
            $model->isRepeat = $map['IsRepeat'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskTelList'])) {
            if (!empty($map['TaskTelList'])) {
                $model->taskTelList = [];
                $n1 = 0;
                foreach ($map['TaskTelList'] as $item1) {
                    $model->taskTelList[$n1] = taskTelList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
