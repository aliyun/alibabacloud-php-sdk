<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $deploymentTargetName;

    /**
     * @var string
     */
    public $engineVersion;

    /**
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
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $modifierName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $sessionClusterId;

    /**
     * @var SessionClusterStatus
     */
    public $status;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'basicResourceSetting' => 'basicResourceSetting',
        'createdAt' => 'createdAt',
        'creator' => 'creator',
        'creatorName' => 'creatorName',
        'deploymentTargetName' => 'deploymentTargetName',
        'engineVersion' => 'engineVersion',
        'flinkConf' => 'flinkConf',
        'labels' => 'labels',
        'logging' => 'logging',
        'modifiedAt' => 'modifiedAt',
        'modifier' => 'modifier',
        'modifierName' => 'modifierName',
        'name' => 'name',
        'namespace' => 'namespace',
        'sessionClusterId' => 'sessionClusterId',
        'status' => 'status',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->basicResourceSetting) {
            $this->basicResourceSetting->validate();
        }
        if (\is_array($this->flinkConf)) {
            Model::validateArray($this->flinkConf);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->logging) {
            $this->logging->validate();
        }
        if (null !== $this->status) {
            $this->status->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basicResourceSetting) {
            $res['basicResourceSetting'] = null !== $this->basicResourceSetting ? $this->basicResourceSetting->toArray($noStream) : $this->basicResourceSetting;
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
            if (\is_array($this->flinkConf)) {
                $res['flinkConf'] = [];
                foreach ($this->flinkConf as $key1 => $value1) {
                    $res['flinkConf'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->logging) {
            $res['logging'] = null !== $this->logging ? $this->logging->toArray($noStream) : $this->logging;
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
            $res['status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
            if (!empty($map['flinkConf'])) {
                $model->flinkConf = [];
                foreach ($map['flinkConf'] as $key1 => $value1) {
                    $model->flinkConf[$key1] = $value1;
                }
            }
        }

        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                foreach ($map['labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
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
