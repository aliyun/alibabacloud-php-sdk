<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetDataSourceConnectionInfoResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $authLevel;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $dsId;

    /**
     * @var string
     */
    public $dsType;

    /**
     * @var string
     */
    public $dsVersion;

    /**
     * @var string
     */
    public $instance;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $modifyUser;

    /**
     * @var bool
     */
    public $noSasl;

    /**
     * @var string
     */
    public $parentDsType;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $showName;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'address' => 'Address',
        'authLevel' => 'AuthLevel',
        'creatorId' => 'CreatorId',
        'dsId' => 'DsId',
        'dsType' => 'DsType',
        'dsVersion' => 'DsVersion',
        'instance' => 'Instance',
        'instanceId' => 'InstanceId',
        'modifyUser' => 'ModifyUser',
        'noSasl' => 'NoSasl',
        'parentDsType' => 'ParentDsType',
        'port' => 'Port',
        'project' => 'Project',
        'schema' => 'Schema',
        'showName' => 'ShowName',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->authLevel) {
            $res['AuthLevel'] = $this->authLevel;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->dsId) {
            $res['DsId'] = $this->dsId;
        }

        if (null !== $this->dsType) {
            $res['DsType'] = $this->dsType;
        }

        if (null !== $this->dsVersion) {
            $res['DsVersion'] = $this->dsVersion;
        }

        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }

        if (null !== $this->noSasl) {
            $res['NoSasl'] = $this->noSasl;
        }

        if (null !== $this->parentDsType) {
            $res['ParentDsType'] = $this->parentDsType;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['AuthLevel'])) {
            $model->authLevel = $map['AuthLevel'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['DsId'])) {
            $model->dsId = $map['DsId'];
        }

        if (isset($map['DsType'])) {
            $model->dsType = $map['DsType'];
        }

        if (isset($map['DsVersion'])) {
            $model->dsVersion = $map['DsVersion'];
        }

        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }

        if (isset($map['NoSasl'])) {
            $model->noSasl = $map['NoSasl'];
        }

        if (isset($map['ParentDsType'])) {
            $model->parentDsType = $map['ParentDsType'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
