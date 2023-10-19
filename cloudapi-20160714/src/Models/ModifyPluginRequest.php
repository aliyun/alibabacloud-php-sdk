<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyPluginRequest\tag;
use AlibabaCloud\Tea\Model;

class ModifyPluginRequest extends Model
{
    /**
     * @description The description of the plug-in. The description can contain a maximum of 200 characters in length.
     *
     * @example modify plugin first
     *
     * @var string
     */
    public $description;

    /**
     * @description The statement that is used to modify the plug-in definition.
     *
     * @example Plugin definition
     *
     * @var string
     */
    public $pluginData;

    /**
     * @description The ID of the plug-in whose information you want to modify.
     *
     * @example a96926e82f994915a8da40a119374537
     *
     * @var string
     */
    public $pluginId;

    /**
     * @description The name of the plug-in. The name must be 4 to 50 characters in length and can contain letters, digits, and underscores (\_). However, it cannot start with an underscore.
     *
     * @example modifyCors
     *
     * @var string
     */
    public $pluginName;

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
        'pluginId'      => 'PluginId',
        'pluginName'    => 'PluginName',
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
        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }
        if (null !== $this->pluginName) {
            $res['PluginName'] = $this->pluginName;
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
     * @return ModifyPluginRequest
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
        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }
        if (isset($map['PluginName'])) {
            $model->pluginName = $map['PluginName'];
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
