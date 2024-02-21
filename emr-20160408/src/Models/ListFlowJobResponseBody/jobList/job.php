<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowJobResponseBody\jobList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowJobResponseBody\jobList\job\resourceList;
use AlibabaCloud\Tea\Model;

class job extends Model
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
     * @example FC-5BD9575E34623940
     *
     * @var string
     */
    public $categoryId;

    /**
     * @example "{\"scope\":\"PROJECT\",\"entityId\":\"FP-80C2FDDBF35D9CC5\",\"variables\":[{\"name\":\"v1\",\"value\":\"1\",\"properties\":{\"password\":true}}]}"
     *
     * @var string
     */
    public $customVariables;

    /**
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
     * @example STOP
     *
     * @var string
     */
    public $failAct;

    /**
     * @example 1538017814000
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
     * @example FJ-BCCAE48B90CCB37B
     *
     * @var string
     */
    public $id;

    /**
     * @example ""
     *
     * @var string
     */
    public $lastInstanceDetail;

    /**
     * @example 5
     *
     * @var int
     */
    public $maxRetry;

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
        'adhoc'              => 'Adhoc',
        'alertConf'          => 'AlertConf',
        'categoryId'         => 'CategoryId',
        'customVariables'    => 'CustomVariables',
        'description'        => 'Description',
        'envConf'            => 'EnvConf',
        'failAct'            => 'FailAct',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'id'                 => 'Id',
        'lastInstanceDetail' => 'LastInstanceDetail',
        'maxRetry'           => 'MaxRetry',
        'monitorConf'        => 'MonitorConf',
        'name'               => 'Name',
        'paramConf'          => 'ParamConf',
        'params'             => 'Params',
        'resourceList'       => 'ResourceList',
        'retryInterval'      => 'RetryInterval',
        'runConf'            => 'RunConf',
        'type'               => 'Type',
        'mode'               => 'mode',
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
        if (null !== $this->lastInstanceDetail) {
            $res['LastInstanceDetail'] = $this->lastInstanceDetail;
        }
        if (null !== $this->maxRetry) {
            $res['MaxRetry'] = $this->maxRetry;
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
        if (null !== $this->resourceList) {
            $res['ResourceList'] = null !== $this->resourceList ? $this->resourceList->toMap() : null;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
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
     * @return job
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
        if (isset($map['LastInstanceDetail'])) {
            $model->lastInstanceDetail = $map['LastInstanceDetail'];
        }
        if (isset($map['MaxRetry'])) {
            $model->maxRetry = $map['MaxRetry'];
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
        if (isset($map['ResourceList'])) {
            $model->resourceList = resourceList::fromMap($map['ResourceList']);
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
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
