<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreatePluginRequest\tag;
use AlibabaCloud\Tea\Model;

class CreatePluginRequest extends Model
{
    /**
     * @description The description of the plug-in. The description can contain a maximum of 200 characters in length.
     *
     * @example createPlugin
     *
     * @var string
     */
    public $description;

    /**
     * @description The plug-in definition. Supported formats: JSON and YAML.
     *
     * @example Plugin definition
     *
     * @var string
     */
    public $pluginData;

    /**
     * @description The name of the plug-in. The name must be 4 to 50 characters in length and can contain letters, digits, and underscores (\_). However, it cannot start with an underscore.
     *
     * @example NewCors
     *
     * @var string
     */
    public $pluginName;

    /**
     * @description The type of the plug-in. Valid values:
     *
     *   **ipControl: IP address-based access control**
     *   **trafficControl: throttling**
     *   **backendSignature: backend signature**
     *   **jwtAuth** :JWT (OpenId Connect) authentication
     *   **cors** :cross-origin resource sharing (CORS)
     *   **caching**
     *
     * @example cors
     *
     * @var string
     */
    public $pluginType;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The tag of objects that match the rule. You can specify multiple tags.
     *
     * @example Key， Value
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'description'   => 'Description',
        'pluginData'    => 'PluginData',
        'pluginName'    => 'PluginName',
        'pluginType'    => 'PluginType',
        'securityToken' => 'SecurityToken',
        'tag'           => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->pluginData) {
            $res['PluginData'] = $this->pluginData;
        }
        if (null !== $this->pluginName) {
            $res['PluginName'] = $this->pluginName;
        }
        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePluginRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PluginData'])) {
            $model->pluginData = $map['PluginData'];
        }
        if (isset($map['PluginName'])) {
            $model->pluginName = $map['PluginName'];
        }
        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
