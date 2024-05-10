<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ScheduledSQLConfiguration extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example log2log
     *
     * @var string
     */
    public $dataFormat;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou-intranet.log.aliyuncs.com
     *
     * @var string
     */
    public $destEndpoint;

    /**
     * @description This parameter is required.
     *
     * @example dest-logstore-demo
     *
     * @var string
     */
    public $destLogstore;

    /**
     * @description This parameter is required.
     *
     * @example project-demo
     *
     * @var string
     */
    public $destProject;

    /**
     * @description This parameter is required.
     *
     * @example acs:ram::123456789:role/aliyunlogetlrole
     *
     * @var string
     */
    public $destRoleArn;

    /**
     * @description This parameter is required.
     *
     * @example 1712592000
     *
     * @var int
     */
    public $fromTime;

    /**
     * @description This parameter is required.
     *
     * @example @m-1m
     *
     * @var string
     */
    public $fromTimeExpr;

    /**
     * @description This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $maxRetries;

    /**
     * @description This parameter is required.
     *
     * @example 600
     *
     * @var int
     */
    public $maxRunTimeInSeconds;

    /**
     * @description This parameter is required.
     *
     * @var mixed[]
     */
    public $parameters;

    /**
     * @description This parameter is required.
     *
     * @example enhanced
     *
     * @var string
     */
    public $resourcePool;

    /**
     * @description This parameter is required.
     *
     * @example acs:ram::123456789:role/aliyunlogetlrole
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description This parameter is required.
     *
     * @example * | select *
     *
     * @var string
     */
    public $script;

    /**
     * @description This parameter is required.
     *
     * @example source-logstore-demo
     *
     * @var string
     */
    public $sourceLogstore;

    /**
     * @description This parameter is required.
     *
     * @example searchQuery
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $toTime;

    /**
     * @description This parameter is required.
     *
     * @example @m
     *
     * @var string
     */
    public $toTimeExpr;
    protected $_name = [
        'dataFormat'          => 'dataFormat',
        'destEndpoint'        => 'destEndpoint',
        'destLogstore'        => 'destLogstore',
        'destProject'         => 'destProject',
        'destRoleArn'         => 'destRoleArn',
        'fromTime'            => 'fromTime',
        'fromTimeExpr'        => 'fromTimeExpr',
        'maxRetries'          => 'maxRetries',
        'maxRunTimeInSeconds' => 'maxRunTimeInSeconds',
        'parameters'          => 'parameters',
        'resourcePool'        => 'resourcePool',
        'roleArn'             => 'roleArn',
        'script'              => 'script',
        'sourceLogstore'      => 'sourceLogstore',
        'sqlType'             => 'sqlType',
        'toTime'              => 'toTime',
        'toTimeExpr'          => 'toTimeExpr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataFormat) {
            $res['dataFormat'] = $this->dataFormat;
        }
        if (null !== $this->destEndpoint) {
            $res['destEndpoint'] = $this->destEndpoint;
        }
        if (null !== $this->destLogstore) {
            $res['destLogstore'] = $this->destLogstore;
        }
        if (null !== $this->destProject) {
            $res['destProject'] = $this->destProject;
        }
        if (null !== $this->destRoleArn) {
            $res['destRoleArn'] = $this->destRoleArn;
        }
        if (null !== $this->fromTime) {
            $res['fromTime'] = $this->fromTime;
        }
        if (null !== $this->fromTimeExpr) {
            $res['fromTimeExpr'] = $this->fromTimeExpr;
        }
        if (null !== $this->maxRetries) {
            $res['maxRetries'] = $this->maxRetries;
        }
        if (null !== $this->maxRunTimeInSeconds) {
            $res['maxRunTimeInSeconds'] = $this->maxRunTimeInSeconds;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }
        if (null !== $this->resourcePool) {
            $res['resourcePool'] = $this->resourcePool;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->script) {
            $res['script'] = $this->script;
        }
        if (null !== $this->sourceLogstore) {
            $res['sourceLogstore'] = $this->sourceLogstore;
        }
        if (null !== $this->sqlType) {
            $res['sqlType'] = $this->sqlType;
        }
        if (null !== $this->toTime) {
            $res['toTime'] = $this->toTime;
        }
        if (null !== $this->toTimeExpr) {
            $res['toTimeExpr'] = $this->toTimeExpr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScheduledSQLConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataFormat'])) {
            $model->dataFormat = $map['dataFormat'];
        }
        if (isset($map['destEndpoint'])) {
            $model->destEndpoint = $map['destEndpoint'];
        }
        if (isset($map['destLogstore'])) {
            $model->destLogstore = $map['destLogstore'];
        }
        if (isset($map['destProject'])) {
            $model->destProject = $map['destProject'];
        }
        if (isset($map['destRoleArn'])) {
            $model->destRoleArn = $map['destRoleArn'];
        }
        if (isset($map['fromTime'])) {
            $model->fromTime = $map['fromTime'];
        }
        if (isset($map['fromTimeExpr'])) {
            $model->fromTimeExpr = $map['fromTimeExpr'];
        }
        if (isset($map['maxRetries'])) {
            $model->maxRetries = $map['maxRetries'];
        }
        if (isset($map['maxRunTimeInSeconds'])) {
            $model->maxRunTimeInSeconds = $map['maxRunTimeInSeconds'];
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }
        if (isset($map['resourcePool'])) {
            $model->resourcePool = $map['resourcePool'];
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['script'])) {
            $model->script = $map['script'];
        }
        if (isset($map['sourceLogstore'])) {
            $model->sourceLogstore = $map['sourceLogstore'];
        }
        if (isset($map['sqlType'])) {
            $model->sqlType = $map['sqlType'];
        }
        if (isset($map['toTime'])) {
            $model->toTime = $map['toTime'];
        }
        if (isset($map['toTimeExpr'])) {
            $model->toTimeExpr = $map['toTimeExpr'];
        }

        return $model;
    }
}
