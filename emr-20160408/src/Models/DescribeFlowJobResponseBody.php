<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowJobResponseBody\resourceList;
use AlibabaCloud\Tea\Model;

class DescribeFlowJobResponseBody extends Model
{
    /**
     * @example false
     *
     * @var string
     */
    public $adhoc;

    /**
     * @example "{\"items\":[{\"enable\":true,\"eventId\":\"EMR-210401001\",\"alertUserGroupIdList\":[\"AUG-52dabfbbca654b52aae05ac5acd9a0f0\"],\"alertDingDingGroupList\":[\"ADG-2c411c452e6b467b9a59fadf21d195ad\"]}]}"
     *
     * @var string
     */
    public $alertConf;

    /**
     * @example FC-5BD9575E3462****
     *
     * @var string
     */
    public $categoryId;

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
    public $editLockDetail;

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
     * @example 1538017813000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1538017814000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example FJ-BCCAE48B90CC****
     *
     * @var string
     */
    public $id;

    /**
     * @example FJI-0BA97D0BB8F3****
     *
     * @var string
     */
    public $lastInstanceId;

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
     * @example 1549175a-6d14-4c8a-89f9-5e28300f6d7e
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resourceList
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

    /**
     * @example YARN
     *
     * @var string
     */
    public $mode;
    protected $_name = [
        'adhoc'             => 'Adhoc',
        'alertConf'         => 'AlertConf',
        'categoryId'        => 'CategoryId',
        'customVariables'   => 'CustomVariables',
        'description'       => 'Description',
        'editLockDetail'    => 'EditLockDetail',
        'envConf'           => 'EnvConf',
        'failAct'           => 'FailAct',
        'gmtCreate'         => 'GmtCreate',
        'gmtModified'       => 'GmtModified',
        'id'                => 'Id',
        'lastInstanceId'    => 'LastInstanceId',
        'maxRetry'          => 'MaxRetry',
        'maxRunningTimeSec' => 'MaxRunningTimeSec',
        'monitorConf'       => 'MonitorConf',
        'name'              => 'Name',
        'paramConf'         => 'ParamConf',
        'params'            => 'Params',
        'requestId'         => 'RequestId',
        'resourceList'      => 'ResourceList',
        'retryInterval'     => 'RetryInterval',
        'retryPolicy'       => 'RetryPolicy',
        'runConf'           => 'RunConf',
        'type'              => 'Type',
        'mode'              => 'mode',
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
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->customVariables) {
            $res['CustomVariables'] = $this->customVariables;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->editLockDetail) {
            $res['EditLockDetail'] = $this->editLockDetail;
        }
        if (null !== $this->envConf) {
            $res['EnvConf'] = $this->envConf;
        }
        if (null !== $this->failAct) {
            $res['FailAct'] = $this->failAct;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastInstanceId) {
            $res['LastInstanceId'] = $this->lastInstanceId;
        }
        if (null !== $this->maxRetry) {
            $res['MaxRetry'] = $this->maxRetry;
        }
        if (null !== $this->maxRunningTimeSec) {
            $res['MaxRunningTimeSec'] = $this->maxRunningTimeSec;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceList) {
            $res['ResourceList'] = null !== $this->resourceList ? $this->resourceList->toMap() : null;
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
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowJobResponseBody
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CustomVariables'])) {
            $model->customVariables = $map['CustomVariables'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EditLockDetail'])) {
            $model->editLockDetail = $map['EditLockDetail'];
        }
        if (isset($map['EnvConf'])) {
            $model->envConf = $map['EnvConf'];
        }
        if (isset($map['FailAct'])) {
            $model->failAct = $map['FailAct'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastInstanceId'])) {
            $model->lastInstanceId = $map['LastInstanceId'];
        }
        if (isset($map['MaxRetry'])) {
            $model->maxRetry = $map['MaxRetry'];
        }
        if (isset($map['MaxRunningTimeSec'])) {
            $model->maxRunningTimeSec = $map['MaxRunningTimeSec'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceList'])) {
            $model->resourceList = resourceList::fromMap($map['ResourceList']);
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
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        return $model;
    }
}
