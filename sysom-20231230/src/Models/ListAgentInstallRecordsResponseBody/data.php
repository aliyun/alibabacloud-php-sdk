<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListAgentInstallRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createdAt;
    /**
     * @var string
     */
    public $instanceId;
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
    public $status;
    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt'     => 'created_at',
        'instanceId'    => 'instance_id',
        'pluginId'      => 'plugin_id',
        'pluginVersion' => 'plugin_version',
        'status'        => 'status',
        'updatedAt'     => 'updated_at',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }

        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }

        if (null !== $this->pluginId) {
            $res['plugin_id'] = $this->pluginId;
        }

        if (null !== $this->pluginVersion) {
            $res['plugin_version'] = $this->pluginVersion;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
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
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }

        if (isset($map['instance_id'])) {
            $model->instanceId = $map['instance_id'];
        }

        if (isset($map['plugin_id'])) {
            $model->pluginId = $map['plugin_id'];
        }

        if (isset($map['plugin_version'])) {
            $model->pluginVersion = $map['plugin_version'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        return $model;
    }
}
