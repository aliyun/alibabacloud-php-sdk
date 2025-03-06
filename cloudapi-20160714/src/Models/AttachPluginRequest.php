<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class AttachPluginRequest extends Model
{
    /**
     * @description The number of the API to be bound.
     *
     * @example 8afff6c8c4c6447abb035812e4d66b65
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The number of the API to be operated. Separate multiple numbers with commas (,). A maximum of 100 numbers can be entered.
     *
     * @example xxx
     *
     * @var string
     */
    public $apiIds;

    /**
     * @description The ID of the API group that contains the API to which the plug-in is to be bound.
     *
     * @example 285bb759342649a1b70c2093a772e087
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the plug-in to be bound.
     *
     * This parameter is required.
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
     * @description The name of the runtime environment. Valid values:
     *
     *   **RELEASE**
     *   **PRE: the pre-release environment**
     *   **TEST**
     *
     * This parameter is required.
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
