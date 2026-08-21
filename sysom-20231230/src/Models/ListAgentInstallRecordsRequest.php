<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class ListAgentInstallRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $xDebugId;

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

    /**
     * @var string
     */
    public $xSysomInvokeSource;
    protected $_name = [
        'xDebugId' => 'X-Debug-Id',
        'current' => 'current',
        'instanceId' => 'instance_id',
        'pageSize' => 'pageSize',
        'pluginId' => 'plugin_id',
        'pluginVersion' => 'plugin_version',
        'region' => 'region',
        'status' => 'status',
        'xSysomInvokeSource' => 'x-sysom-invoke-source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->xDebugId) {
            $res['X-Debug-Id'] = $this->xDebugId;
        }

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

        if (null !== $this->xSysomInvokeSource) {
            $res['x-sysom-invoke-source'] = $this->xSysomInvokeSource;
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
        if (isset($map['X-Debug-Id'])) {
            $model->xDebugId = $map['X-Debug-Id'];
        }

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

        if (isset($map['x-sysom-invoke-source'])) {
            $model->xSysomInvokeSource = $map['x-sysom-invoke-source'];
        }

        return $model;
    }
}
