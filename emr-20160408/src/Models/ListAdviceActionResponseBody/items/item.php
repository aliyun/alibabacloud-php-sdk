<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListAdviceActionResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $actionType;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $component;

    /**
     * @var string
     */
    public $configItemKey;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $hostgroupName;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'actionType'    => 'ActionType',
        'clusterId'     => 'ClusterId',
        'command'       => 'Command',
        'component'     => 'Component',
        'configItemKey' => 'ConfigItemKey',
        'configName'    => 'ConfigName',
        'gmtCreate'     => 'GmtCreate',
        'gmtModified'   => 'GmtModified',
        'hostgroupName' => 'HostgroupName',
        'serviceName'   => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->component) {
            $res['Component'] = $this->component;
        }
        if (null !== $this->configItemKey) {
            $res['ConfigItemKey'] = $this->configItemKey;
        }
        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hostgroupName) {
            $res['HostgroupName'] = $this->hostgroupName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['Component'])) {
            $model->component = $map['Component'];
        }
        if (isset($map['ConfigItemKey'])) {
            $model->configItemKey = $map['ConfigItemKey'];
        }
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HostgroupName'])) {
            $model->hostgroupName = $map['HostgroupName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
