<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Dara\Model;

class GetDBListFromAgentRequest extends Model
{
    /**
     * @var int
     */
    public $backupGatewayId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $sourceEndpointRegion;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'backupGatewayId' => 'BackupGatewayId',
        'clientToken' => 'ClientToken',
        'ownerId' => 'OwnerId',
        'sourceEndpointRegion' => 'SourceEndpointRegion',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupGatewayId) {
            $res['BackupGatewayId'] = $this->backupGatewayId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->sourceEndpointRegion) {
            $res['SourceEndpointRegion'] = $this->sourceEndpointRegion;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['BackupGatewayId'])) {
            $model->backupGatewayId = $map['BackupGatewayId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['SourceEndpointRegion'])) {
            $model->sourceEndpointRegion = $map['SourceEndpointRegion'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
