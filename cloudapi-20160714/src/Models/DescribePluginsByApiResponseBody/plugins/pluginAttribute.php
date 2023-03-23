<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsByApiResponseBody\plugins;

use AlibabaCloud\Tea\Model;

class pluginAttribute extends Model
{
    /**
     * @description The time when the plug-in was created. The time is displayed in UTC.
     *
     * @example 2019-01-11T09:29:58Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The description of the plug-in.
     *
     * @example Traffic throttling
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the plug-in was last modified. The time is displayed in UTC.
     *
     * @example 2019-01-11T09:29:58Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The definition statement of the plug-in.
     *
     * @example {\"unit\":\"MINUTE\",\"apiDefault\":20}
     *
     * @var string
     */
    public $pluginData;

    /**
     * @description The ID of the plug-in.
     *
     * @example 9a3f1a5279434f2ba74ccd91c295af9f
     *
     * @var string
     */
    public $pluginId;

    /**
     * @description The name of the plug-in.
     *
     * @example firstPlugin
     *
     * @var string
     */
    public $pluginName;

    /**
     * @description The type of the plug-in.
     *
     * @example trafficControl
     *
     * @var string
     */
    public $pluginType;

    /**
     * @description The region where the plug-in resides.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'createdTime'  => 'CreatedTime',
        'description'  => 'Description',
        'modifiedTime' => 'ModifiedTime',
        'pluginData'   => 'PluginData',
        'pluginId'     => 'PluginId',
        'pluginName'   => 'PluginName',
        'pluginType'   => 'PluginType',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

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
