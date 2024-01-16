<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeProcessTasksResponseBody;

use AlibabaCloud\Tea\Model;

class processTasks extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account that is used to submit the handling task.
     *
     * @example 123xxxx355
     *
     * @var string
     */
    public $creator;

    /**
     * @description The name of the handling entity.
     *
     * @example 1.1.1.x
     *
     * @var string
     */
    public $entityName;

    /**
     * @description The type of the handling entity.
     *
     * @example ip
     *
     * @var string
     */
    public $entityType;

    /**
     * @description The creation time of the handling task. The value is a 13-digit timestamp.
     *
     * @example 1700031183572
     *
     * @var int
     */
    public $gmtCreateMillis;

    /**
     * @description The modification time of the handling task. The value is a 13-digit timestamp.
     *
     * @example 1700031183572
     *
     * @var int
     */
    public $gmtModifiedMillis;

    /**
     * @description The input parameter of the handling task.
     *
     * @example {"groupuuid":"c6a9b1df-f4ac-4078-bef4-99xxxxxx"}
     *
     * @var string
     */
    public $inputParams;

    /**
     * @description The ID of the associated policy.
     *
     * @example 92af3c79-1754-4646-9366-9ddbd1e45536_xxxx
     *
     * @var string
     */
    public $processStrategyUuid;

    /**
     * @description The delivery time of the handling task. The value is a 13-digit timestamp.
     *
     * @example 1700031183572
     *
     * @var int
     */
    public $processTime;

    /**
     * @description The unblocking time of the handling task. The value is a 13-digit timestamp.
     *
     * @example 1700031183572
     *
     * @var int
     */
    public $removeTime;

    /**
     * @description The scenario code of the handling task.
     *
     * @example event_xxx_whole_process
     *
     * @var string
     */
    public $sceneCode;

    /**
     * @description The scenario name of the handling task.
     *
     * @example waf_whole_process
     *
     * @var string
     */
    public $sceneName;

    /**
     * @description The ID of the Alibaba Cloud account that is specified in the handling task.
     *
     * @example 123xxxxx234
     *
     * @var string
     */
    public $scope;

    /**
     * @description The submission source of the handling task.
     *
     * @example system
     *
     * @var string
     */
    public $source;

    /**
     * @description The unique identifier of the handling task.
     *
     * @example 150xxxxxxxxx95066
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The status of the handling task.
     *
     * @example 11
     *
     * @var int
     */
    public $taskStatus;

    /**
     * @description The code of the cloud service that is associated with the handling task.
     *
     * @example WAF
     *
     * @var string
     */
    public $yunCode;
    protected $_name = [
        'creator'             => 'Creator',
        'entityName'          => 'EntityName',
        'entityType'          => 'EntityType',
        'gmtCreateMillis'     => 'GmtCreateMillis',
        'gmtModifiedMillis'   => 'GmtModifiedMillis',
        'inputParams'         => 'InputParams',
        'processStrategyUuid' => 'ProcessStrategyUuid',
        'processTime'         => 'ProcessTime',
        'removeTime'          => 'RemoveTime',
        'sceneCode'           => 'SceneCode',
        'sceneName'           => 'SceneName',
        'scope'               => 'Scope',
        'source'              => 'Source',
        'taskId'              => 'TaskId',
        'taskStatus'          => 'TaskStatus',
        'yunCode'             => 'YunCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->gmtCreateMillis) {
            $res['GmtCreateMillis'] = $this->gmtCreateMillis;
        }
        if (null !== $this->gmtModifiedMillis) {
            $res['GmtModifiedMillis'] = $this->gmtModifiedMillis;
        }
        if (null !== $this->inputParams) {
            $res['InputParams'] = $this->inputParams;
        }
        if (null !== $this->processStrategyUuid) {
            $res['ProcessStrategyUuid'] = $this->processStrategyUuid;
        }
        if (null !== $this->processTime) {
            $res['ProcessTime'] = $this->processTime;
        }
        if (null !== $this->removeTime) {
            $res['RemoveTime'] = $this->removeTime;
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->yunCode) {
            $res['YunCode'] = $this->yunCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return processTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['GmtCreateMillis'])) {
            $model->gmtCreateMillis = $map['GmtCreateMillis'];
        }
        if (isset($map['GmtModifiedMillis'])) {
            $model->gmtModifiedMillis = $map['GmtModifiedMillis'];
        }
        if (isset($map['InputParams'])) {
            $model->inputParams = $map['InputParams'];
        }
        if (isset($map['ProcessStrategyUuid'])) {
            $model->processStrategyUuid = $map['ProcessStrategyUuid'];
        }
        if (isset($map['ProcessTime'])) {
            $model->processTime = $map['ProcessTime'];
        }
        if (isset($map['RemoveTime'])) {
            $model->removeTime = $map['RemoveTime'];
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['YunCode'])) {
            $model->yunCode = $map['YunCode'];
        }

        return $model;
    }
}
