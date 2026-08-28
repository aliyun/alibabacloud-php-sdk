<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallWorkspacePluginResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $pluginName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'enabled' => 'enabled',
        'pluginName' => 'pluginName',
        'status' => 'status',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->pluginName) {
            $res['pluginName'] = $this->pluginName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['pluginName'])) {
            $model->pluginName = $map['pluginName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
