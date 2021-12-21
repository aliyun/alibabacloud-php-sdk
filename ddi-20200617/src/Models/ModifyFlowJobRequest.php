<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowJobRequest\resourceList;
use AlibabaCloud\Tea\Model;

class ModifyFlowJobRequest extends Model
{
    /**
     * @var string
     */
    public $alertConf;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $customVariables;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $envConf;

    /**
     * @var string
     */
    public $failAct;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $knoxPassword;

    /**
     * @var string
     */
    public $knoxUser;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $monitorConf;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $paramConf;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var resourceList[]
     */
    public $resourceList;

    /**
     * @var string
     */
    public $retryPolicy;

    /**
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
