<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowJobRequest\resourceList;
use AlibabaCloud\Tea\Model;

class CreateFlowJobRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $adhoc;

    /**
     * @var string
     */
    public $alertConf;

    /**
     * @example C-A23BD131A862****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example {\"scope\":\"PROJECT\",\"entityId\":\"FP-80C2FDDBF35D9CC5\",\"variables\":[{\"name\":\"v1\",\"value\":\"1\",\"properties\":{\"password\":true}}]}
     *
     * @var string
     */
    public $customVariables;

    /**
     * @example Job description
     *
     * @var string
     */
    public $description;

    /**
     * @example {"key":"value"}
     *
     * @var string
     */
    public $envConf;

    /**
     * @example CONTINUE
     *
     * @var string
     */
    public $failAct;

    /**
     * @example 5
     *
     * @var int
     */
    public $maxRetry;

    /**
     * @example 0
     *
     * @var int
     */
    public $maxRunningTimeSec;

    /**
     * @example YARN
     *
     * @var string
     */
    public $mode;

    /**
     * @example {"inputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic","consumer.group":"kafka_consumer_group"}],"outputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic"}]}
     *
     * @var string
     */
    public $monitorConf;

    /**
     * @example my_shell_job
     *
     * @var string
     */
    public $name;

    /**
     * @example {"date":"${yyyy-MM-dd}"}
     *
     * @var string
     */
    public $paramConf;

    /**
     * @example ls -l
     *
     * @var string
     */
    public $params;

    /**
     * @example FC-5BD9575E3462****
     *
     * @var string
     */
    public $parentCategory;

    /**
     * @example FP-257A173659F5****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var resourceList[]
     */
    public $resourceList;

    /**
     * @example 200
     *
     * @var int
     */
    public $retryInterval;

    /**
     * @var string
     */
    public $retryPolicy;

    /**
     * @example {"priority":1,"userName":"hadoop","memory":2048,"cores":1}
     *
     * @var string
     */
    public $runConf;

    /**
     * @example SHELL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'adhoc'             => 'Adhoc',
        'alertConf'         => 'AlertConf',
        'clusterId'         => 'ClusterId',
        'customVariables'   => 'CustomVariables',
        'description'       => 'Description',
        'envConf'           => 'EnvConf',
        'failAct'           => 'FailAct',
        'maxRetry'          => 'MaxRetry',
        'maxRunningTimeSec' => 'MaxRunningTimeSec',
        'mode'              => 'Mode',
        'monitorConf'       => 'MonitorConf',
        'name'              => 'Name',
        'paramConf'         => 'ParamConf',
        'params'            => 'Params',
        'parentCategory'    => 'ParentCategory',
        'projectId'         => 'ProjectId',
        'regionId'          => 'RegionId',
        'resourceList'      => 'ResourceList',
        'retryInterval'     => 'RetryInterval',
        'retryPolicy'       => 'RetryPolicy',
        'runConf'           => 'RunConf',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adhoc) {
            $res['Adhoc'] = $this->adhoc;
        }
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
        if (null !== $this->maxRetry) {
            $res['MaxRetry'] = $this->maxRetry;
        }
        if (null !== $this->maxRunningTimeSec) {
            $res['MaxRunningTimeSec'] = $this->maxRunningTimeSec;
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
        if (null !== $this->parentCategory) {
            $res['ParentCategory'] = $this->parentCategory;
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
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->retryPolicy) {
            $res['RetryPolicy'] = $this->retryPolicy;
        }
        if (null !== $this->runConf) {
            $res['RunConf'] = $this->runConf;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Adhoc'])) {
            $model->adhoc = $map['Adhoc'];
        }
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
        if (isset($map['MaxRetry'])) {
            $model->maxRetry = $map['MaxRetry'];
        }
        if (isset($map['MaxRunningTimeSec'])) {
            $model->maxRunningTimeSec = $map['MaxRunningTimeSec'];
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
        if (isset($map['ParentCategory'])) {
            $model->parentCategory = $map['ParentCategory'];
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
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['RetryPolicy'])) {
            $model->retryPolicy = $map['RetryPolicy'];
        }
        if (isset($map['RunConf'])) {
            $model->runConf = $map['RunConf'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
