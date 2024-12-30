<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetDataSourceConnectionInfoResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 172.**.**.48
     *
     * @var string
     */
    public $address;

    /**
     * @example 0
     *
     * @var string
     */
    public $authLevel;

    /**
     * @example U240****0880C6095
     *
     * @var string
     */
    public $creatorId;

    /**
     * @example a201c85c-******
     *
     * @var string
     */
    public $dsId;

    /**
     * @example mysql
     *
     * @var string
     */
    public $dsType;

    /**
     * @example 5.7
     *
     * @var string
     */
    public $dsVersion;

    /**
     * @example rm*********t44ju1
     *
     * @var string
     */
    public $instance;

    /**
     * @example rm*********t44ju1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example U240****0880C6095
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @example true
     *
     * @var bool
     */
    public $noSasl;

    /**
     * @example dataphin
     *
     * @var string
     */
    public $parentDsType;

    /**
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @example prod-ossdoc
     *
     * @var string
     */
    public $project;

    /**
     * @example Analysis
     *
     * @var string
     */
    public $schema;

    /**
     * @example 0327
     *
     * @var string
     */
    public $showName;

    /**
     * @example 0de6**2-d**-4720-8836-0cc****1394c
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'address'      => 'Address',
        'authLevel'    => 'AuthLevel',
        'creatorId'    => 'CreatorId',
        'dsId'         => 'DsId',
        'dsType'       => 'DsType',
        'dsVersion'    => 'DsVersion',
        'instance'     => 'Instance',
        'instanceId'   => 'InstanceId',
        'modifyUser'   => 'ModifyUser',
        'noSasl'       => 'NoSasl',
        'parentDsType' => 'ParentDsType',
        'port'         => 'Port',
        'project'      => 'Project',
        'schema'       => 'Schema',
        'showName'     => 'ShowName',
        'workspaceId'  => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return result
     */
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
