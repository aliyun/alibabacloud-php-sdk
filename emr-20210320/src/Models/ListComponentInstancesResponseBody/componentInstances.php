<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListComponentInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class componentInstances extends Model
{
    /**
     * @description 应用名称。
     *
     * @example KNOX
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description 组件服务状态，取值如下：
     * - active：主服务
     * - standby：备用服务。
     *
     * @example active
     *
     * @var string
     */
    public $bizState;

    /**
     * @description Commission状态，取值如下：
     * - COMMISSIONED：已上线
     * - COMMISSIONING：上线中
     * - DECOMMISSIONED：已下线
     * - DECOMMISSIONINPROGRESS：下线进程中
     * - DECOMMISSIONFAILED：下线失败
     * - INSERVICE：服务中
     * - UNKNOWN：未知状态。
     * <p>
     *
     * @example INSERVICE
     *
     * @var string
     */
    public $commissionState;

    /**
     * @description 组件实例操作状态，取值如下：
     * - WAITING：等待中
     * - INSTALLING：安装中
     * - INSTALLED：已安装
     * - INSTALL_FAILED：安装失败
     * - STARTING：启动中
     * - STARTED：已启动
     * - START_FAILED：启动失败
     * - STOPPING：停止中
     * - STOPPED：已停止
     * - STOP_FAILED：停止失败
     *
     * @example STARTED
     *
     * @var string
     */
    public $componentInstanceState;

    /**
     * @description 组件名称。
     *
     * @example KNOX
     *
     * @var string
     */
    public $componentName;

    /**
     * @description 安装时间戳。
     *
     * @example 1628248947000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 期望状态，取值如下：
     * - WAITING：等待中
     * - INSTALLING：安装中
     * - INSTALLED：已安装
     * - INSTALL_FAILED：安装失败
     * - STARTING：启动中
     * - STARTED：已启动
     * - START_FAILED：启动失败
     * - STOPPING：停止中
     * - STOPPED：已停止
     * - STOP_FAILED：停止失败。
     *
     * @example STARTED
     *
     * @var string
     */
    public $desiredState;

    /**
     * @description 节点ID。
     *
     * @example i-bp17yy050pxo01m2****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description 节点名称。
     *
     * @example emr-worker-1
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'bizState' => 'BizState',
        'commissionState' => 'CommissionState',
        'componentInstanceState' => 'ComponentInstanceState',
        'componentName' => 'ComponentName',
        'createTime' => 'CreateTime',
        'desiredState' => 'DesiredState',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->bizState) {
            $res['BizState'] = $this->bizState;
        }
        if (null !== $this->commissionState) {
            $res['CommissionState'] = $this->commissionState;
        }
        if (null !== $this->componentInstanceState) {
            $res['ComponentInstanceState'] = $this->componentInstanceState;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->desiredState) {
            $res['DesiredState'] = $this->desiredState;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['BizState'])) {
            $model->bizState = $map['BizState'];
        }
        if (isset($map['CommissionState'])) {
            $model->commissionState = $map['CommissionState'];
        }
        if (isset($map['ComponentInstanceState'])) {
            $model->componentInstanceState = $map['ComponentInstanceState'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DesiredState'])) {
            $model->desiredState = $map['DesiredState'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
