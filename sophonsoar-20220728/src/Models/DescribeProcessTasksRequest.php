<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeProcessTasksRequest extends Model
{
    /**
     * @example desc
     *
     * @var string
     */
    public $direction;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $entityName;

    /**
     * @example ip
     *
     * @var string
     */
    public $entityType;

    /**
     * @example gmtCreate
     *
     * @var string
     */
    public $orderField;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 12.x.x.x
     *
     * @var string
     */
    public $paramContent;

    /**
     * @example 1700031183572
     *
     * @var int
     */
    public $processActionEnd;

    /**
     * @example 1700031183572
     *
     * @var int
     */
    public $processActionStart;

    /**
     * @example 1700031183572
     *
     * @var int
     */
    public $processRemoveEnd;

    /**
     * @example 1700031183572
     *
     * @var int
     */
    public $processRemoveStart;

    /**
     * @example 92af3c79-1754-4646-9366-9ddbd1e45536_xxxx
     *
     * @var string
     */
    public $processStrategyUuid;

    /**
     * @example event_xxx_whole_process
     *
     * @var string
     */
    public $sceneCode;

    /**
     * @example 125xxxxx9870
     *
     * @var string
     */
    public $scope;

    /**
     * @example ["system"]
     *
     * @var string
     */
    public $source;

    /**
     * @example 150xxxxxxxxx95066
     *
     * @var string
     */
    public $taskId;

    /**
     * @example ["11","21"]
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @example ["WAF"]
     *
     * @var string
     */
    public $yunCode;
    protected $_name = [
        'direction'           => 'Direction',
        'entityName'          => 'EntityName',
        'entityType'          => 'EntityType',
        'orderField'          => 'OrderField',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'paramContent'        => 'ParamContent',
        'processActionEnd'    => 'ProcessActionEnd',
        'processActionStart'  => 'ProcessActionStart',
        'processRemoveEnd'    => 'ProcessRemoveEnd',
        'processRemoveStart'  => 'ProcessRemoveStart',
        'processStrategyUuid' => 'ProcessStrategyUuid',
        'sceneCode'           => 'SceneCode',
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
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
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
        if (null !== $this->yunCode) {
            $res['YunCode'] = $this->yunCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProcessTasksRequest
     */
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
        if (isset($map['YunCode'])) {
            $model->yunCode = $map['YunCode'];
        }

        return $model;
    }
}
