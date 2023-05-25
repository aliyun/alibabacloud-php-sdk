<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class AttachPluginRequest extends Model
{
    /**
     * @example 8afff6c8c4c6447abb035812e4d66b65
     *
     * @var string
     */
    public $apiId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $apiIds;

    /**
     * @example 285bb759342649a1b70c2093a772e087
     *
     * @var string
     */
    public $groupId;

    /**
     * @example 9a3f1a5279434f2ba74ccd91c295af9f
     *
     * @var string
     */
    public $pluginId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example TEST
     *
     * @var string
     */
    public $stageName;
    protected $_name = [
        'apiId'         => 'ApiId',
        'apiIds'        => 'ApiIds',
        'groupId'       => 'GroupId',
        'pluginId'      => 'PluginId',
        'securityToken' => 'SecurityToken',
        'stageName'     => 'StageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiIds) {
            $res['ApiIds'] = $this->apiIds;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiIds'])) {
            $model->apiIds = $map['ApiIds'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
