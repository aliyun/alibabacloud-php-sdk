<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class AttachPluginRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $apiIds;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var string
     */
    public $apiId;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'pluginId'      => 'PluginId',
        'groupId'       => 'GroupId',
        'apiIds'        => 'ApiIds',
        'stageName'     => 'StageName',
        'apiId'         => 'ApiId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->apiIds) {
            $res['ApiIds'] = $this->apiIds;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachPluginRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ApiIds'])) {
            $model->apiIds = $map['ApiIds'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        return $model;
    }
}
