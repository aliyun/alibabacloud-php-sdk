<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class ListAgentInstallRecordsRequest extends Model
{
    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var string
     */
    public $pluginVersion;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'current' => 'current',
        'instanceId' => 'instance_id',
        'pageSize' => 'pageSize',
        'pluginId' => 'plugin_id',
        'pluginVersion' => 'plugin_version',
        'region' => 'region',
        'status' => 'status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->pluginId) {
            $res['plugin_id'] = $this->pluginId;
        }
        if (null !== $this->pluginVersion) {
            $res['plugin_version'] = $this->pluginVersion;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAgentInstallRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['current'])) {
            $model->current = $map['current'];
        }
        if (isset($map['instance_id'])) {
            $model->instanceId = $map['instance_id'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['plugin_id'])) {
            $model->pluginId = $map['plugin_id'];
        }
        if (isset($map['plugin_version'])) {
            $model->pluginVersion = $map['plugin_version'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
