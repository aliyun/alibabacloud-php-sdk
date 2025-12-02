<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20250903\Models;

use AlibabaCloud\Dara\Model;

class ListPlaybooksShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $order;

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
     * @var int
     */
    public $playbookExecutionEndTime;

    /**
     * @var int
     */
    public $playbookExecutionStartTime;

    /**
     * @var string
     */
    public $playbookName;

    /**
     * @var string
     */
    public $playbookParamTypesShrink;

    /**
     * @var int
     */
    public $playbookStatus;

    /**
     * @var string
     */
    public $playbookType;

    /**
     * @var string
     */
    public $playbookUuidsShrink;

    /**
     * @var int
     */
    public $roleFor;
    protected $_name = [
        'lang' => 'Lang',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'order' => 'Order',
        'orderField' => 'OrderField',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'playbookExecutionEndTime' => 'PlaybookExecutionEndTime',
        'playbookExecutionStartTime' => 'PlaybookExecutionStartTime',
        'playbookName' => 'PlaybookName',
        'playbookParamTypesShrink' => 'PlaybookParamTypes',
        'playbookStatus' => 'PlaybookStatus',
        'playbookType' => 'PlaybookType',
        'playbookUuidsShrink' => 'PlaybookUuids',
        'roleFor' => 'RoleFor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
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

        if (null !== $this->playbookExecutionEndTime) {
            $res['PlaybookExecutionEndTime'] = $this->playbookExecutionEndTime;
        }

        if (null !== $this->playbookExecutionStartTime) {
            $res['PlaybookExecutionStartTime'] = $this->playbookExecutionStartTime;
        }

        if (null !== $this->playbookName) {
            $res['PlaybookName'] = $this->playbookName;
        }

        if (null !== $this->playbookParamTypesShrink) {
            $res['PlaybookParamTypes'] = $this->playbookParamTypesShrink;
        }

        if (null !== $this->playbookStatus) {
            $res['PlaybookStatus'] = $this->playbookStatus;
        }

        if (null !== $this->playbookType) {
            $res['PlaybookType'] = $this->playbookType;
        }

        if (null !== $this->playbookUuidsShrink) {
            $res['PlaybookUuids'] = $this->playbookUuidsShrink;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
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

        if (isset($map['PlaybookExecutionEndTime'])) {
            $model->playbookExecutionEndTime = $map['PlaybookExecutionEndTime'];
        }

        if (isset($map['PlaybookExecutionStartTime'])) {
            $model->playbookExecutionStartTime = $map['PlaybookExecutionStartTime'];
        }

        if (isset($map['PlaybookName'])) {
            $model->playbookName = $map['PlaybookName'];
        }

        if (isset($map['PlaybookParamTypes'])) {
            $model->playbookParamTypesShrink = $map['PlaybookParamTypes'];
        }

        if (isset($map['PlaybookStatus'])) {
            $model->playbookStatus = $map['PlaybookStatus'];
        }

        if (isset($map['PlaybookType'])) {
            $model->playbookType = $map['PlaybookType'];
        }

        if (isset($map['PlaybookUuids'])) {
            $model->playbookUuidsShrink = $map['PlaybookUuids'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        return $model;
    }
}
