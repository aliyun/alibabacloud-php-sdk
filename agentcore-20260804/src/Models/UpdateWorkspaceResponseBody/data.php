<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateWorkspaceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateWorkspaceResponseBody\data\networkConfiguration;

class data extends Model
{
    /**
     * @var string
     */
    public $authorizationStatus;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var networkConfiguration
     */
    public $networkConfiguration;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'authorizationStatus' => 'authorizationStatus',
        'bucketName' => 'bucketName',
        'name' => 'name',
        'networkConfiguration' => 'networkConfiguration',
        'regionId' => 'regionId',
        'status' => 'status',
        'storageType' => 'storageType',
        'tenantId' => 'tenantId',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (null !== $this->networkConfiguration) {
            $this->networkConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationStatus) {
            $res['authorizationStatus'] = $this->authorizationStatus;
        }

        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->networkConfiguration) {
            $res['networkConfiguration'] = null !== $this->networkConfiguration ? $this->networkConfiguration->toArray($noStream) : $this->networkConfiguration;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->storageType) {
            $res['storageType'] = $this->storageType;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['authorizationStatus'])) {
            $model->authorizationStatus = $map['authorizationStatus'];
        }

        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['networkConfiguration'])) {
            $model->networkConfiguration = networkConfiguration::fromMap($map['networkConfiguration']);
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['storageType'])) {
            $model->storageType = $map['storageType'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
