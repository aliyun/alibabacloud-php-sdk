<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class DescribeProcessTasksRequest extends Model
{
    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $entityUuid;

    /**
     * @var string
     */
    public $eventUuid;

    /**
     * @var string
     */
    public $orderField;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $paramContent;

    /**
     * @var int
     */
    public $processActionEnd;

    /**
     * @var int
     */
    public $processActionStart;

    /**
     * @var int
     */
    public $processRemoveEnd;

    /**
     * @var int
     */
    public $processRemoveStart;

    /**
     * @var string
     */
    public $processStrategyUuid;

    /**
     * @var string
     */
    public $reqUuid;

    /**
     * @var string
     */
    public $sceneCode;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $triggerSource;

    /**
     * @var string
     */
    public $yunCode;
    protected $_name = [
        'direction' => 'Direction',
        'entityName' => 'EntityName',
        'entityType' => 'EntityType',
        'entityUuid' => 'EntityUuid',
        'eventUuid' => 'EventUuid',
        'orderField' => 'OrderField',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'paramContent' => 'ParamContent',
        'processActionEnd' => 'ProcessActionEnd',
        'processActionStart' => 'ProcessActionStart',
        'processRemoveEnd' => 'ProcessRemoveEnd',
        'processRemoveStart' => 'ProcessRemoveStart',
        'processStrategyUuid' => 'ProcessStrategyUuid',
        'reqUuid' => 'ReqUuid',
        'sceneCode' => 'SceneCode',
        'scope' => 'Scope',
        'source' => 'Source',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
        'triggerSource' => 'TriggerSource',
        'yunCode' => 'YunCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->entityUuid) {
            $res['EntityUuid'] = $this->entityUuid;
        }

        if (null !== $this->eventUuid) {
            $res['EventUuid'] = $this->eventUuid;
        }

        if (null !== $this->orderField) {
            $res['OrderField'] = $this->orderField;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->paramContent) {
            $res['ParamContent'] = $this->paramContent;
        }

        if (null !== $this->processActionEnd) {
            $res['ProcessActionEnd'] = $this->processActionEnd;
        }

        if (null !== $this->processActionStart) {
            $res['ProcessActionStart'] = $this->processActionStart;
        }

        if (null !== $this->processRemoveEnd) {
            $res['ProcessRemoveEnd'] = $this->processRemoveEnd;
        }

        if (null !== $this->processRemoveStart) {
            $res['ProcessRemoveStart'] = $this->processRemoveStart;
        }

        if (null !== $this->processStrategyUuid) {
            $res['ProcessStrategyUuid'] = $this->processStrategyUuid;
        }

        if (null !== $this->reqUuid) {
            $res['ReqUuid'] = $this->reqUuid;
        }

        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
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

        if (null !== $this->triggerSource) {
            $res['TriggerSource'] = $this->triggerSource;
        }

        if (null !== $this->yunCode) {
            $res['YunCode'] = $this->yunCode;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['EntityUuid'])) {
            $model->entityUuid = $map['EntityUuid'];
        }

        if (isset($map['EventUuid'])) {
            $model->eventUuid = $map['EventUuid'];
        }

        if (isset($map['OrderField'])) {
            $model->orderField = $map['OrderField'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ParamContent'])) {
            $model->paramContent = $map['ParamContent'];
        }

        if (isset($map['ProcessActionEnd'])) {
            $model->processActionEnd = $map['ProcessActionEnd'];
        }

        if (isset($map['ProcessActionStart'])) {
            $model->processActionStart = $map['ProcessActionStart'];
        }

        if (isset($map['ProcessRemoveEnd'])) {
            $model->processRemoveEnd = $map['ProcessRemoveEnd'];
        }

        if (isset($map['ProcessRemoveStart'])) {
            $model->processRemoveStart = $map['ProcessRemoveStart'];
        }

        if (isset($map['ProcessStrategyUuid'])) {
            $model->processStrategyUuid = $map['ProcessStrategyUuid'];
        }

        if (isset($map['ReqUuid'])) {
            $model->reqUuid = $map['ReqUuid'];
        }

        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
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

        if (isset($map['TriggerSource'])) {
            $model->triggerSource = $map['TriggerSource'];
        }

        if (isset($map['YunCode'])) {
            $model->yunCode = $map['YunCode'];
        }

        return $model;
    }
}
