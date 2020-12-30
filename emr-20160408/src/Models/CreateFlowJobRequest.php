<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowJobRequest\resourceList;
use AlibabaCloud\Tea\Model;

class CreateFlowJobRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $projectId;

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
    public $failAct;

    /**
     * @var int
     */
    public $maxRetry;

    /**
     * @var string
     */
    public $retryPolicy;

    /**
     * @var int
     */
    public $maxRunningTimeSec;

    /**
     * @var int
     */
    public $retryInterval;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $paramConf;

    /**
     * @var string
     */
    public $customVariables;

    /**
     * @var string
     */
    public $envConf;

    /**
     * @var string
     */
    public $runConf;

    /**
     * @var string
     */
    public $monitorConf;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $parentCategory;

    /**
     * @var bool
     */
    public $adhoc;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $alertConf;

    /**
     * @var resourceList[]
     */
    public $resourceList;
    protected $_name = [
        'regionId'          => 'RegionId',
        'projectId'         => 'ProjectId',
        'name'              => 'Name',
        'description'       => 'Description',
        'type'              => 'Type',
        'failAct'           => 'FailAct',
        'maxRetry'          => 'MaxRetry',
        'retryPolicy'       => 'RetryPolicy',
        'maxRunningTimeSec' => 'MaxRunningTimeSec',
        'retryInterval'     => 'RetryInterval',
        'params'            => 'Params',
        'paramConf'         => 'ParamConf',
        'customVariables'   => 'CustomVariables',
        'envConf'           => 'EnvConf',
        'runConf'           => 'RunConf',
        'monitorConf'       => 'MonitorConf',
        'mode'              => 'Mode',
        'parentCategory'    => 'ParentCategory',
        'adhoc'             => 'Adhoc',
        'clusterId'         => 'ClusterId',
        'alertConf'         => 'AlertConf',
        'resourceList'      => 'ResourceList',
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (null !== $this->failAct) {
            $res['FailAct'] = $this->failAct;
        }
        if (null !== $this->maxRetry) {
            $res['MaxRetry'] = $this->maxRetry;
        }
        if (null !== $this->retryPolicy) {
            $res['RetryPolicy'] = $this->retryPolicy;
        }
        if (null !== $this->maxRunningTimeSec) {
            $res['MaxRunningTimeSec'] = $this->maxRunningTimeSec;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->paramConf) {
            $res['ParamConf'] = $this->paramConf;
        }
        if (null !== $this->customVariables) {
            $res['CustomVariables'] = $this->customVariables;
        }
        if (null !== $this->envConf) {
            $res['EnvConf'] = $this->envConf;
        }
        if (null !== $this->runConf) {
            $res['RunConf'] = $this->runConf;
        }
        if (null !== $this->monitorConf) {
            $res['MonitorConf'] = $this->monitorConf;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->parentCategory) {
            $res['ParentCategory'] = $this->parentCategory;
        }
        if (null !== $this->adhoc) {
            $res['Adhoc'] = $this->adhoc;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->alertConf) {
            $res['AlertConf'] = $this->alertConf;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlowJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
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
        if (isset($map['FailAct'])) {
            $model->failAct = $map['FailAct'];
        }
        if (isset($map['MaxRetry'])) {
            $model->maxRetry = $map['MaxRetry'];
        }
        if (isset($map['RetryPolicy'])) {
            $model->retryPolicy = $map['RetryPolicy'];
        }
        if (isset($map['MaxRunningTimeSec'])) {
            $model->maxRunningTimeSec = $map['MaxRunningTimeSec'];
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['ParamConf'])) {
            $model->paramConf = $map['ParamConf'];
        }
        if (isset($map['CustomVariables'])) {
            $model->customVariables = $map['CustomVariables'];
        }
        if (isset($map['EnvConf'])) {
            $model->envConf = $map['EnvConf'];
        }
        if (isset($map['RunConf'])) {
            $model->runConf = $map['RunConf'];
        }
        if (isset($map['MonitorConf'])) {
            $model->monitorConf = $map['MonitorConf'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['ParentCategory'])) {
            $model->parentCategory = $map['ParentCategory'];
        }
        if (isset($map['Adhoc'])) {
            $model->adhoc = $map['Adhoc'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['AlertConf'])) {
            $model->alertConf = $map['AlertConf'];
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

        return $model;
    }
}
