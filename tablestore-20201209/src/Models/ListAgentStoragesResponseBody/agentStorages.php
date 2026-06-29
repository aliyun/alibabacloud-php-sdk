<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models\ListAgentStoragesResponseBody;

use AlibabaCloud\Dara\Model;

class agentStorages extends Model
{
    /**
     * @var string
     */
    public $agentStorageDescription;

    /**
     * @var string
     */
    public $agentStorageName;

    /**
     * @var string
     */
    public $agentStorageSpecification;

    /**
     * @var string
     */
    public $agentStorageStatus;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'agentStorageDescription' => 'AgentStorageDescription',
        'agentStorageName' => 'AgentStorageName',
        'agentStorageSpecification' => 'AgentStorageSpecification',
        'agentStorageStatus' => 'AgentStorageStatus',
        'aliasName' => 'AliasName',
        'createTime' => 'CreateTime',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentStorageDescription) {
            $res['AgentStorageDescription'] = $this->agentStorageDescription;
        }

        if (null !== $this->agentStorageName) {
            $res['AgentStorageName'] = $this->agentStorageName;
        }

        if (null !== $this->agentStorageSpecification) {
            $res['AgentStorageSpecification'] = $this->agentStorageSpecification;
        }

        if (null !== $this->agentStorageStatus) {
            $res['AgentStorageStatus'] = $this->agentStorageStatus;
        }

        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AgentStorageDescription'])) {
            $model->agentStorageDescription = $map['AgentStorageDescription'];
        }

        if (isset($map['AgentStorageName'])) {
            $model->agentStorageName = $map['AgentStorageName'];
        }

        if (isset($map['AgentStorageSpecification'])) {
            $model->agentStorageSpecification = $map['AgentStorageSpecification'];
        }

        if (isset($map['AgentStorageStatus'])) {
            $model->agentStorageStatus = $map['AgentStorageStatus'];
        }

        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
