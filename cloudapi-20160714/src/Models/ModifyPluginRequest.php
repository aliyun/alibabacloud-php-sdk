<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyPluginRequest\tag;
use AlibabaCloud\Tea\Model;

class ModifyPluginRequest extends Model
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
    public $pluginName;

    /**
     * @var string
     */
    public $pluginData;

    /**
     * @var string
     */
    public $description;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'pluginId'      => 'PluginId',
        'pluginName'    => 'PluginName',
        'pluginData'    => 'PluginData',
        'description'   => 'Description',
        'tag'           => 'Tag',
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
        if (null !== $this->pluginName) {
            $res['PluginName'] = $this->pluginName;
        }
        if (null !== $this->pluginData) {
            $res['PluginData'] = $this->pluginData;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }
        if (isset($map['PluginName'])) {
            $model->pluginName = $map['PluginName'];
        }
        if (isset($map['PluginData'])) {
            $model->pluginData = $map['PluginData'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
