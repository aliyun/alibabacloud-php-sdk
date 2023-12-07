<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListComponentInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class componentInstances extends Model
{
    /**
     * @description 应用名称。
     *
     * @example HDFS
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description 组件服务状态，取值如下：
     * - standby：备用服务。
     * @example active
     *
     * @var string
     */
    public $bizState;

    /**
     * @description Commission状态，取值如下：
     * <p>
     * @example INSERVICE
     *
     * @var string
     */
    public $commissionState;

    /**
     * @description 组件实例操作状态，取值如下：
     * - STOP_FAILED：停止失败
     * @var string
     */
    public $componentInstanceState;

    /**
     * @description 组件名称。
     *
     * @example DataNode
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
     * - STOP_FAILED：停止失败。
     * @example STARTED
     *
     * @var string
     */
    public $desiredState;

    /**
     * @description 节点ID。
     *
     * @example i-bp1cudc25w2bfwl5****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description 节点名称。
     *
     * @example core1-1
     *
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'applicationName'        => 'ApplicationName',
        'bizState'               => 'BizState',
        'commissionState'        => 'CommissionState',
        'componentInstanceState' => 'ComponentInstanceState',
        'componentName'          => 'ComponentName',
        'createTime'             => 'CreateTime',
        'desiredState'           => 'DesiredState',
        'nodeId'                 => 'NodeId',
        'nodeName'               => 'NodeName',
    ];

    public function validate()
    {
    }

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

        return $model;
    }
}
