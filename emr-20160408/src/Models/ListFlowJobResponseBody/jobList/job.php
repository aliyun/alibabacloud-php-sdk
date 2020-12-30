<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowJobResponseBody\jobList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowJobResponseBody\jobList\job\resourceList;
use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $failAct;

    /**
     * @var string
     */
    public $customVariables;

    /**
     * @var resourceList
     */
    public $resourceList;

    /**
     * @var int
     */
    public $retryInterval;

    /**
     * @var string
     */
    public $envConf;

    /**
     * @var string
     */
    public $paramConf;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $monitorConf;

    /**
     * @var string
     */
    public $lastInstanceDetail;

    /**
     * @var string
     */
    public $runConf;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $adhoc;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $alertConf;

    /**
     * @var int
     */
    public $maxRetry;
    protected $_name = [
        'type'               => 'Type',
        'failAct'            => 'FailAct',
        'customVariables'    => 'CustomVariables',
        'resourceList'       => 'ResourceList',
        'retryInterval'      => 'RetryInterval',
        'envConf'            => 'EnvConf',
        'paramConf'          => 'ParamConf',
        'mode'               => 'mode',
        'gmtModified'        => 'GmtModified',
        'monitorConf'        => 'MonitorConf',
        'lastInstanceDetail' => 'LastInstanceDetail',
        'runConf'            => 'RunConf',
        'params'             => 'Params',
        'description'        => 'Description',
        'gmtCreate'          => 'GmtCreate',
        'categoryId'         => 'CategoryId',
        'adhoc'              => 'Adhoc',
        'name'               => 'Name',
        'id'                 => 'Id',
        'alertConf'          => 'AlertConf',
        'maxRetry'           => 'MaxRetry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->failAct) {
            $res['FailAct'] = $this->failAct;
        }
        if (null !== $this->customVariables) {
            $res['CustomVariables'] = $this->customVariables;
        }
        if (null !== $this->resourceList) {
            $res['ResourceList'] = null !== $this->resourceList ? $this->resourceList->toMap() : null;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->envConf) {
            $res['EnvConf'] = $this->envConf;
        }
        if (null !== $this->paramConf) {
            $res['ParamConf'] = $this->paramConf;
        }
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->monitorConf) {
            $res['MonitorConf'] = $this->monitorConf;
        }
        if (null !== $this->lastInstanceDetail) {
            $res['LastInstanceDetail'] = $this->lastInstanceDetail;
        }
        if (null !== $this->runConf) {
            $res['RunConf'] = $this->runConf;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->adhoc) {
            $res['Adhoc'] = $this->adhoc;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->alertConf) {
            $res['AlertConf'] = $this->alertConf;
        }
        if (null !== $this->maxRetry) {
            $res['MaxRetry'] = $this->maxRetry;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['FailAct'])) {
            $model->failAct = $map['FailAct'];
        }
        if (isset($map['CustomVariables'])) {
            $model->customVariables = $map['CustomVariables'];
        }
        if (isset($map['ResourceList'])) {
            $model->resourceList = resourceList::fromMap($map['ResourceList']);
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['EnvConf'])) {
            $model->envConf = $map['EnvConf'];
        }
        if (isset($map['ParamConf'])) {
            $model->paramConf = $map['ParamConf'];
        }
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['MonitorConf'])) {
            $model->monitorConf = $map['MonitorConf'];
        }
        if (isset($map['LastInstanceDetail'])) {
            $model->lastInstanceDetail = $map['LastInstanceDetail'];
        }
        if (isset($map['RunConf'])) {
            $model->runConf = $map['RunConf'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Adhoc'])) {
            $model->adhoc = $map['Adhoc'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['AlertConf'])) {
            $model->alertConf = $map['AlertConf'];
        }
        if (isset($map['MaxRetry'])) {
            $model->maxRetry = $map['MaxRetry'];
        }

        return $model;
    }
}
