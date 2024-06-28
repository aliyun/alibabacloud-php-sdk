<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeProcessTasksRequest extends Model
{
    /**
     * @description The sort order. Valid values:
     *
     *   **desc** (default)
     *   **asc**
     *
     * @example desc
     *
     * @var string
     */
    public $direction;

    /**
     * @description The name of the handling entity.
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $entityName;

    /**
     * @description The type of the handling entity. Valid values:
     *
     *   **ip**
     *   **file**
     *   **process**
     *
     * @example ip
     *
     * @var string
     */
    public $entityType;

    /**
     * @description The field that you use to sort the result.
     *
     * >  You can obtain the field from the response result.
     * @example gmtCreate
     *
     * @var string
     */
    public $orderField;

    /**
     * @description The page number. Default value: 1. Pages start from page 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10. If you do not specify the PageSize parameter, 10 entries are returned by default.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The handling entity, handling scenario, or handling parameter that is used for fuzzy match.
     *
     * @example 12.x.x.x
     *
     * @var string
     */
    public $paramContent;

    /**
     * @description The end of the time range for a handling task. The value is a 13-digit timestamp.
     *
     * @example 1700031183572
     *
     * @var int
     */
    public $processActionEnd;

    /**
     * @description The beginning of the time range for a handling task. The value is a 13-digit timestamp.
     *
     * @example 1700031183572
     *
     * @var int
     */
    public $processActionStart;

    /**
     * @description The end of the time range for an unblocking task. The value is a 13-digit timestamp.
     *
     * @example 1700031183572
     *
     * @var int
     */
    public $processRemoveEnd;

    /**
     * @description The beginning of the time range for an unblocking task. The value is a 13-digit timestamp.
     *
     * @example 1700031183572
     *
     * @var int
     */
    public $processRemoveStart;

    /**
     * @description The UUID of the handling policy.
     *
     * >  You can call the [ListDisposeStrategy](https://help.aliyun.com/document_detail/2584440.html) operation to query the UUID of the handling policy.
     * @example 92af3c79-1754-4646-9366-9ddbd1e45536_xxxx
     *
     * @var string
     */
    public $processStrategyUuid;

    /**
     * @description The scenario code of the handling task.
     *
     * >  You can call the [DescribeEnumItems](~~DescribeEnumItems~~) operation to query the scenario code of the handling task. This parameter is available when you set **EnumType** to **process**.
     * @example event_xxx_whole_process
     *
     * @var string
     */
    public $sceneCode;

    /**
     * @description The ID of the Alibaba Cloud account that is specified in the handling task.
     *
     * @example 125xxxxx9870
     *
     * @var string
     */
    public $scope;

    /**
     * @description The triggering source of the handling task. The value is a string array. Valid values:
     *
     *   **system**: triggered when you manually handle an event
     *   **custom**: triggered by an event based on an automatic response rule
     *   **custom_alert**: triggered by an alert based on an automatic response rule
     *   **soar-manual**: triggered when you use SOAR to manually run a playbook
     *   **soar-mdr**: triggered by Managed Security Service
     *
     * @example ["system"]
     *
     * @var string
     */
    public $source;

    /**
     * @description The unique identifier of the handling task.
     *
     * >  This parameter is used to query a specific task. You can obtain the value from the response result.
     * @example 150xxxxxxxxx95066
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The status of the handling task. The value is a string. Valid values:
     *
     *   **11**: being handled
     *   **21**: being blocked
     *   **22**: being quarantined
     *   **23**: completed
     *   **24**: added to the whitelist
     *   **20**: successful
     *   **90**: failed
     *   **91**: unblocking failed
     *   **92**: restoring quarantined files failed
     *
     * @example ["11","21"]
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The cloud service that is associated with the handling task. The value is a string. Valid values:
     *
     *   **WAF**: Web Application Firewall (WAF)
     *   **CFW**: Cloud Firewall
     *   **Aegis**: Security Center
     *
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
