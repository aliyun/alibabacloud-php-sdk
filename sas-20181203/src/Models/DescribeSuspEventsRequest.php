<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspEventsRequest extends Model
{
    /**
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $containerFieldName;

    /**
     * @var string
     */
    public $containerFieldValue;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dealed;

    /**
     * @var string
     */
    public $eventNames;

    /**
     * @var string
     */
    public $from;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $levels;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $operateErrorCodeList;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $parentEventTypes;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $uniqueInfo;

    /**
     * @var string
     */
    public $uuids;
    protected $_name = [
        'alarmUniqueInfo'      => 'AlarmUniqueInfo',
        'clusterId'            => 'ClusterId',
        'containerFieldName'   => 'ContainerFieldName',
        'containerFieldValue'  => 'ContainerFieldValue',
        'currentPage'          => 'CurrentPage',
        'dealed'               => 'Dealed',
        'eventNames'           => 'EventNames',
        'from'                 => 'From',
        'groupId'              => 'GroupId',
        'lang'                 => 'Lang',
        'levels'               => 'Levels',
        'name'                 => 'Name',
        'operateErrorCodeList' => 'OperateErrorCodeList',
        'pageSize'             => 'PageSize',
        'parentEventTypes'     => 'ParentEventTypes',
        'remark'               => 'Remark',
        'source'               => 'Source',
        'sourceIp'             => 'SourceIp',
        'status'               => 'Status',
        'targetType'           => 'TargetType',
        'uniqueInfo'           => 'UniqueInfo',
        'uuids'                => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmUniqueInfo) {
            $res['AlarmUniqueInfo'] = $this->alarmUniqueInfo;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->containerFieldName) {
            $res['ContainerFieldName'] = $this->containerFieldName;
        }
        if (null !== $this->containerFieldValue) {
            $res['ContainerFieldValue'] = $this->containerFieldValue;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->eventNames) {
            $res['EventNames'] = $this->eventNames;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operateErrorCodeList) {
            $res['OperateErrorCodeList'] = $this->operateErrorCodeList;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->parentEventTypes) {
            $res['ParentEventTypes'] = $this->parentEventTypes;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->uniqueInfo) {
            $res['UniqueInfo'] = $this->uniqueInfo;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSuspEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmUniqueInfo'])) {
            $model->alarmUniqueInfo = $map['AlarmUniqueInfo'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ContainerFieldName'])) {
            $model->containerFieldName = $map['ContainerFieldName'];
        }
        if (isset($map['ContainerFieldValue'])) {
            $model->containerFieldValue = $map['ContainerFieldValue'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['EventNames'])) {
            $model->eventNames = $map['EventNames'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Levels'])) {
            $model->levels = $map['Levels'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OperateErrorCodeList'])) {
            if (!empty($map['OperateErrorCodeList'])) {
                $model->operateErrorCodeList = $map['OperateErrorCodeList'];
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ParentEventTypes'])) {
            $model->parentEventTypes = $map['ParentEventTypes'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['UniqueInfo'])) {
            $model->uniqueInfo = $map['UniqueInfo'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
