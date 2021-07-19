<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $cloudMonitorContactGroupList;

    /**
     * @var bool
     */
    public $cloudMonitorEnableSubscribeEvent;

    /**
     * @var bool
     */
    public $cloudMonitorEnableInstallAgent;

    /**
     * @var string
     */
    public $cloudMonitorTemplateIdList;

    /**
     * @var bool
     */
    public $cloudMonitorRuleEnabled;
    protected $_name = [
        'regionId'                         => 'RegionId',
        'name'                             => 'Name',
        'description'                      => 'Description',
        'type'                             => 'Type',
        'resourceGroupId'                  => 'ResourceGroupId',
        'cloudMonitorContactGroupList'     => 'CloudMonitorContactGroupList',
        'cloudMonitorEnableSubscribeEvent' => 'CloudMonitorEnableSubscribeEvent',
        'cloudMonitorEnableInstallAgent'   => 'CloudMonitorEnableInstallAgent',
        'cloudMonitorTemplateIdList'       => 'CloudMonitorTemplateIdList',
        'cloudMonitorRuleEnabled'          => 'CloudMonitorRuleEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->cloudMonitorContactGroupList) {
            $res['CloudMonitorContactGroupList'] = $this->cloudMonitorContactGroupList;
        }
        if (null !== $this->cloudMonitorEnableSubscribeEvent) {
            $res['CloudMonitorEnableSubscribeEvent'] = $this->cloudMonitorEnableSubscribeEvent;
        }
        if (null !== $this->cloudMonitorEnableInstallAgent) {
            $res['CloudMonitorEnableInstallAgent'] = $this->cloudMonitorEnableInstallAgent;
        }
        if (null !== $this->cloudMonitorTemplateIdList) {
            $res['CloudMonitorTemplateIdList'] = $this->cloudMonitorTemplateIdList;
        }
        if (null !== $this->cloudMonitorRuleEnabled) {
            $res['CloudMonitorRuleEnabled'] = $this->cloudMonitorRuleEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['CloudMonitorContactGroupList'])) {
            $model->cloudMonitorContactGroupList = $map['CloudMonitorContactGroupList'];
        }
        if (isset($map['CloudMonitorEnableSubscribeEvent'])) {
            $model->cloudMonitorEnableSubscribeEvent = $map['CloudMonitorEnableSubscribeEvent'];
        }
        if (isset($map['CloudMonitorEnableInstallAgent'])) {
            $model->cloudMonitorEnableInstallAgent = $map['CloudMonitorEnableInstallAgent'];
        }
        if (isset($map['CloudMonitorTemplateIdList'])) {
            $model->cloudMonitorTemplateIdList = $map['CloudMonitorTemplateIdList'];
        }
        if (isset($map['CloudMonitorRuleEnabled'])) {
            $model->cloudMonitorRuleEnabled = $map['CloudMonitorRuleEnabled'];
        }

        return $model;
    }
}
