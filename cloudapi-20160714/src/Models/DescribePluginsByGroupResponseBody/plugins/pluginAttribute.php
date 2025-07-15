<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsByGroupResponseBody\plugins;

use AlibabaCloud\Tea\Model;

class pluginAttribute extends Model
{
    /**
     * @description Creation time, in GMT
     *
     * @example 2024-12-20T02:05:57Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description Plugin description
     *
     * @example traffic controll
     *
     * @var string
     */
    public $description;

    /**
     * @description Last modified time, in GMT
     *
     * @example 2022-03-15T02:30:18Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description Plugin definition statement
     *
     * @example {\\"unit\\":\\"MINUTE\\",\\"apiDefault\\":20}
     *
     * @var string
     */
    public $pluginData;

    /**
     * @description Plugin ID
     *
     * @example 5e204eeb4aa94c919a49f471ad3fc716
     *
     * @var string
     */
    public $pluginId;

    /**
     * @description Plugin name
     *
     * @example firstPlugin
     *
     * @var string
     */
    public $pluginName;

    /**
     * @description Plugin type
     *
     * @example trafficControl
     *
     * @var string
     */
    public $pluginType;

    /**
     * @description 插件所在Region
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'modifiedTime' => 'ModifiedTime',
        'pluginData' => 'PluginData',
        'pluginId' => 'PluginId',
        'pluginName' => 'PluginName',
        'pluginType' => 'PluginType',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
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
        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
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
        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
