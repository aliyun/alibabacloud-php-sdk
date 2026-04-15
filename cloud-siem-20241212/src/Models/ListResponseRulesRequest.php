<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class ListResponseRulesRequest extends Model
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
    public $regionId;

    /**
     * @var string
     */
    public $responseActionType;

    /**
     * @var string
     */
    public $responseRuleName;

    /**
     * @var int
     */
    public $responseRuleStatus;

    /**
     * @var string
     */
    public $responseRuleType;

    /**
     * @var string
     */
    public $responseTriggerType;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var int
     */
    public $roleType;
    protected $_name = [
        'lang' => 'Lang',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'responseActionType' => 'ResponseActionType',
        'responseRuleName' => 'ResponseRuleName',
        'responseRuleStatus' => 'ResponseRuleStatus',
        'responseRuleType' => 'ResponseRuleType',
        'responseTriggerType' => 'ResponseTriggerType',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
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

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->responseActionType) {
            $res['ResponseActionType'] = $this->responseActionType;
        }

        if (null !== $this->responseRuleName) {
            $res['ResponseRuleName'] = $this->responseRuleName;
        }

        if (null !== $this->responseRuleStatus) {
            $res['ResponseRuleStatus'] = $this->responseRuleStatus;
        }

        if (null !== $this->responseRuleType) {
            $res['ResponseRuleType'] = $this->responseRuleType;
        }

        if (null !== $this->responseTriggerType) {
            $res['ResponseTriggerType'] = $this->responseTriggerType;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
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

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResponseActionType'])) {
            $model->responseActionType = $map['ResponseActionType'];
        }

        if (isset($map['ResponseRuleName'])) {
            $model->responseRuleName = $map['ResponseRuleName'];
        }

        if (isset($map['ResponseRuleStatus'])) {
            $model->responseRuleStatus = $map['ResponseRuleStatus'];
        }

        if (isset($map['ResponseRuleType'])) {
            $model->responseRuleType = $map['ResponseRuleType'];
        }

        if (isset($map['ResponseTriggerType'])) {
            $model->responseTriggerType = $map['ResponseTriggerType'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        return $model;
    }
}
