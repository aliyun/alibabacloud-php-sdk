<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowJobRequest\resourceList;
use AlibabaCloud\Tea\Model;

class ModifyFlowJobRequest extends Model
{
    /**
     * @description 保留参数。
     *
     * @var string
     */
    public $alertConf;

    /**
     * @description 集群ID。您可以调用ListClusters查看集群的ID。
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 自定义变量。
     *
     * @var string
     */
    public $customVariables;

    /**
     * @description 修改后的作业描述。
     *
     * @var string
     */
    public $description;

    /**
     * @description 环境变量设置。
     *
     * @var string
     */
    public $envConf;

    /**
     * @description 失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）
     *
     * @var string
     */
    public $failAct;

    /**
     * @description 需要修改的作业的ID。
     *
     * @var string
     */
    public $id;

    /**
     * @description Knox的用户密码，执行Zeppelin Notebook时必须提供。
     *
     * @var string
     */
    public $knoxPassword;

    /**
     * @description Knox的用户名，执行Zeppelin Notebook时必须提供。
     *
     * @var string
     */
    public $knoxUser;

    /**
     * @description 模型模式，取值如下：  YARN：将作业包装成一个Launcher提交至YARN中执行，LOCAL：作业直接在机器上以进程方式运行。
     *
     * @var string
     */
    public $mode;

    /**
     * @description 监控配置，仅SPARK_STREAMING类型作业支持监控配置。
     *
     * @var string
     */
    public $monitorConf;

    /**
     * @description 修改后的作业名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 参数设置。
     *
     * @var string
     */
    public $paramConf;

    /**
     * @description 作业内容。如果是spark作业，该参数的内容会作为spark-submit的参数。
     *
     * @var string
     */
    public $params;

    /**
     * @description 项目ID。您可以调用ListFlowProject查看项目的ID。
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 保留参数。
     *
     * @var resourceList[]
     */
    public $resourceList;

    /**
     * @description 重试策略，保留参数。
     *
     * @var string
     */
    public $retryPolicy;

    /**
     * @description 运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）
     *
     * @var string
     */
    public $runConf;
    protected $_name = [
        'alertConf'       => 'AlertConf',
        'clusterId'       => 'ClusterId',
        'customVariables' => 'CustomVariables',
        'description'     => 'Description',
        'envConf'         => 'EnvConf',
        'failAct'         => 'FailAct',
        'id'              => 'Id',
        'knoxPassword'    => 'KnoxPassword',
        'knoxUser'        => 'KnoxUser',
        'mode'            => 'Mode',
        'monitorConf'     => 'MonitorConf',
        'name'            => 'Name',
        'paramConf'       => 'ParamConf',
        'params'          => 'Params',
        'projectId'       => 'ProjectId',
        'regionId'        => 'RegionId',
        'resourceList'    => 'ResourceList',
        'retryPolicy'     => 'RetryPolicy',
        'runConf'         => 'RunConf',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertConf) {
            $res['AlertConf'] = $this->alertConf;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->customVariables) {
            $res['CustomVariables'] = $this->customVariables;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->envConf) {
            $res['EnvConf'] = $this->envConf;
        }
        if (null !== $this->failAct) {
            $res['FailAct'] = $this->failAct;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->knoxPassword) {
            $res['KnoxPassword'] = $this->knoxPassword;
        }
        if (null !== $this->knoxUser) {
            $res['KnoxUser'] = $this->knoxUser;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->monitorConf) {
            $res['MonitorConf'] = $this->monitorConf;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->paramConf) {
            $res['ParamConf'] = $this->paramConf;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceList) {
            $res['ResourceList'] = [];
            if (null !== $this->resourceList && \is_array($this->resourceList)) {
                $n = 0;
                foreach ($this->resourceList as $item) {
                    $res['ResourceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->retryPolicy) {
            $res['RetryPolicy'] = $this->retryPolicy;
        }
        if (null !== $this->runConf) {
            $res['RunConf'] = $this->runConf;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyFlowJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertConf'])) {
            $model->alertConf = $map['AlertConf'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CustomVariables'])) {
            $model->customVariables = $map['CustomVariables'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvConf'])) {
            $model->envConf = $map['EnvConf'];
        }
        if (isset($map['FailAct'])) {
            $model->failAct = $map['FailAct'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['KnoxPassword'])) {
            $model->knoxPassword = $map['KnoxPassword'];
        }
        if (isset($map['KnoxUser'])) {
            $model->knoxUser = $map['KnoxUser'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['MonitorConf'])) {
            $model->monitorConf = $map['MonitorConf'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParamConf'])) {
            $model->paramConf = $map['ParamConf'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceList'])) {
            if (!empty($map['ResourceList'])) {
                $model->resourceList = [];
                $n                   = 0;
                foreach ($map['ResourceList'] as $item) {
                    $model->resourceList[$n++] = null !== $item ? resourceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RetryPolicy'])) {
            $model->retryPolicy = $map['RetryPolicy'];
        }
        if (isset($map['RunConf'])) {
            $model->runConf = $map['RunConf'];
        }

        return $model;
    }
}
