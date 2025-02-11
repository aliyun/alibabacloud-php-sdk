<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListClusterAgentInstallRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $createdAt;
    /**
     * @var string
     */
    public $grayscaleConfig;
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
    public $updatedAt;
    protected $_name = [
        'clusterId'       => 'cluster_id',
        'createdAt'       => 'created_at',
        'grayscaleConfig' => 'grayscale_config',
        'pluginId'        => 'plugin_id',
        'pluginVersion'   => 'plugin_version',
        'updatedAt'       => 'updated_at',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }

        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }

        if (null !== $this->grayscaleConfig) {
            $res['grayscale_config'] = $this->grayscaleConfig;
        }

        if (null !== $this->pluginId) {
            $res['plugin_id'] = $this->pluginId;
        }

        if (null !== $this->pluginVersion) {
            $res['plugin_version'] = $this->pluginVersion;
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
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }

        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }

        if (isset($map['grayscale_config'])) {
            $model->grayscaleConfig = $map['grayscale_config'];
        }

        if (isset($map['plugin_id'])) {
            $model->pluginId = $map['plugin_id'];
        }

        if (isset($map['plugin_version'])) {
            $model->pluginVersion = $map['plugin_version'];
        }

        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        return $model;
    }
}
