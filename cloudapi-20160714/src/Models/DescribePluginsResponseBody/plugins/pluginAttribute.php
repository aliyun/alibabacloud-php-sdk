<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsResponseBody\plugins;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsResponseBody\plugins\pluginAttribute\tags;
use AlibabaCloud\Tea\Model;

class pluginAttribute extends Model
{
    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $pluginData;

    /**
     * @var int
     */
    public $description;

    /**
     * @var string
     */
    public $pluginName;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $pluginType;

    /**
     * @var int
     */
    public $regionId;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'pluginId'     => 'PluginId',
        'modifiedTime' => 'ModifiedTime',
        'pluginData'   => 'PluginData',
        'description'  => 'Description',
        'pluginName'   => 'PluginName',
        'createdTime'  => 'CreatedTime',
        'pluginType'   => 'PluginType',
        'regionId'     => 'RegionId',
        'tags'         => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->pluginData) {
            $res['PluginData'] = $this->pluginData;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->pluginName) {
            $res['PluginName'] = $this->pluginName;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pluginAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['PluginData'])) {
            $model->pluginData = $map['PluginData'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PluginName'])) {
            $model->pluginName = $map['PluginName'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
