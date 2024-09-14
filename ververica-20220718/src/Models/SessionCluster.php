<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class SessionCluster extends Model
{
    /**
     * @var BasicResourceSetting
     */
    public $basicResourceSetting;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @example 27846363877456****
     *
     * @var string
     */
    public $creator;

    /**
     * @example ****@streamcompute.onaliyun.com
     *
     * @var string
     */
    public $creatorName;

    /**
     * @example default-queue
     *
     * @var string
     */
    public $deploymentTargetName;

    /**
     * @example vvr-6.0.7-flink-1.15
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @example {"taskmanager.numberOfTaskSlots":"1"}
     *
     * @var mixed[]
     */
    public $flinkConf;

    /**
     * @var mixed[]
     */
    public $labels;

    /**
     * @var Logging
     */
    public $logging;

    /**
     * @var int
     */
    public $modifiedAt;

    /**
     * @example 27846363877456****
     *
     * @var string
     */
    public $modifier;

    /**
     * @example ****@streamcompute.onaliyun.com
     *
     * @var string
     */
    public $modifierName;

    /**
     * @example test-sessionCluster
     *
     * @var string
     */
    public $name;

    /**
     * @example default-namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @example 1f68a52c-1760-43c6-97fb-afe0674b****
     *
     * @var string
     */
    public $sessionClusterId;

    /**
     * @var SessionClusterStatus
     */
    public $status;

    /**
     * @example edcef******b4f
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'basicResourceSetting' => 'basicResourceSetting',
        'createdAt'            => 'createdAt',
        'creator'              => 'creator',
        'creatorName'          => 'creatorName',
        'deploymentTargetName' => 'deploymentTargetName',
        'engineVersion'        => 'engineVersion',
        'flinkConf'            => 'flinkConf',
        'labels'               => 'labels',
        'logging'              => 'logging',
        'modifiedAt'           => 'modifiedAt',
        'modifier'             => 'modifier',
        'modifierName'         => 'modifierName',
        'name'                 => 'name',
        'namespace'            => 'namespace',
        'sessionClusterId'     => 'sessionClusterId',
        'status'               => 'status',
        'workspace'            => 'workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicResourceSetting) {
            $res['basicResourceSetting'] = null !== $this->basicResourceSetting ? $this->basicResourceSetting->toMap() : null;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }
        if (null !== $this->deploymentTargetName) {
            $res['deploymentTargetName'] = $this->deploymentTargetName;
        }
        if (null !== $this->engineVersion) {
            $res['engineVersion'] = $this->engineVersion;
        }
        if (null !== $this->flinkConf) {
            $res['flinkConf'] = $this->flinkConf;
        }
        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }
        if (null !== $this->logging) {
            $res['logging'] = null !== $this->logging ? $this->logging->toMap() : null;
        }
        if (null !== $this->modifiedAt) {
            $res['modifiedAt'] = $this->modifiedAt;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->modifierName) {
            $res['modifierName'] = $this->modifierName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->sessionClusterId) {
            $res['sessionClusterId'] = $this->sessionClusterId;
        }
        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SessionCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['basicResourceSetting'])) {
            $model->basicResourceSetting = BasicResourceSetting::fromMap($map['basicResourceSetting']);
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }
        if (isset($map['deploymentTargetName'])) {
            $model->deploymentTargetName = $map['deploymentTargetName'];
        }
        if (isset($map['engineVersion'])) {
            $model->engineVersion = $map['engineVersion'];
        }
        if (isset($map['flinkConf'])) {
            $model->flinkConf = $map['flinkConf'];
        }
        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }
        if (isset($map['logging'])) {
            $model->logging = Logging::fromMap($map['logging']);
        }
        if (isset($map['modifiedAt'])) {
            $model->modifiedAt = $map['modifiedAt'];
        }
        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }
        if (isset($map['modifierName'])) {
            $model->modifierName = $map['modifierName'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['sessionClusterId'])) {
            $model->sessionClusterId = $map['sessionClusterId'];
        }
        if (isset($map['status'])) {
            $model->status = SessionClusterStatus::fromMap($map['status']);
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
