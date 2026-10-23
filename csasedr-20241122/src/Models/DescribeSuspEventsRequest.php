<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CsasEdr\V20241122\Models;

use AlibabaCloud\Dara\Model;

class DescribeSuspEventsRequest extends Model
{
    /**
     * @var string
     */
    public $alarmEventName;

    /**
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @var string[]
     */
    public $assetsTypeList;

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
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dealed;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $eventNames;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $innerIp;

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
    public $operateTimeEnd;

    /**
     * @var string
     */
    public $operateTimeStart;

    /**
     * @var int
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
    public $sortColumn;

    /**
     * @var string
     */
    public $sortType;

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
    public $srcIp;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $strictMode;

    /**
     * @var string
     */
    public $tacticId;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $timeEnd;

    /**
     * @var string
     */
    public $timeStart;

    /**
     * @var string
     */
    public $uniqueInfo;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $uuids;
    protected $_name = [
        'alarmEventName' => 'AlarmEventName',
        'alarmUniqueInfo' => 'AlarmUniqueInfo',
        'assetsTypeList' => 'AssetsTypeList',
        'clusterId' => 'ClusterId',
        'containerFieldName' => 'ContainerFieldName',
        'containerFieldValue' => 'ContainerFieldValue',
        'currentPage' => 'CurrentPage',
        'dealed' => 'Dealed',
        'department' => 'Department',
        'eventNames' => 'EventNames',
        'groupId' => 'GroupId',
        'hostName' => 'HostName',
        'id' => 'Id',
        'innerIp' => 'InnerIp',
        'lang' => 'Lang',
        'levels' => 'Levels',
        'name' => 'Name',
        'operateErrorCodeList' => 'OperateErrorCodeList',
        'operateTimeEnd' => 'OperateTimeEnd',
        'operateTimeStart' => 'OperateTimeStart',
        'pageSize' => 'PageSize',
        'parentEventTypes' => 'ParentEventTypes',
        'remark' => 'Remark',
        'sortColumn' => 'SortColumn',
        'sortType' => 'SortType',
        'source' => 'Source',
        'sourceIp' => 'SourceIp',
        'srcIp' => 'SrcIp',
        'status' => 'Status',
        'strictMode' => 'StrictMode',
        'tacticId' => 'TacticId',
        'targetType' => 'TargetType',
        'timeEnd' => 'TimeEnd',
        'timeStart' => 'TimeStart',
        'uniqueInfo' => 'UniqueInfo',
        'userName' => 'UserName',
        'uuids' => 'Uuids',
    ];

    public function validate()
    {
        if (\is_array($this->assetsTypeList)) {
            Model::validateArray($this->assetsTypeList);
        }
        if (\is_array($this->operateErrorCodeList)) {
            Model::validateArray($this->operateErrorCodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmEventName) {
            $res['AlarmEventName'] = $this->alarmEventName;
        }

        if (null !== $this->alarmUniqueInfo) {
            $res['AlarmUniqueInfo'] = $this->alarmUniqueInfo;
        }

        if (null !== $this->assetsTypeList) {
            if (\is_array($this->assetsTypeList)) {
                $res['AssetsTypeList'] = [];
                $n1 = 0;
                foreach ($this->assetsTypeList as $item1) {
                    $res['AssetsTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }

        if (null !== $this->eventNames) {
            $res['EventNames'] = $this->eventNames;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->innerIp) {
            $res['InnerIp'] = $this->innerIp;
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
            if (\is_array($this->operateErrorCodeList)) {
                $res['OperateErrorCodeList'] = [];
                $n1 = 0;
                foreach ($this->operateErrorCodeList as $item1) {
                    $res['OperateErrorCodeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->operateTimeEnd) {
            $res['OperateTimeEnd'] = $this->operateTimeEnd;
        }

        if (null !== $this->operateTimeStart) {
            $res['OperateTimeStart'] = $this->operateTimeStart;
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

        if (null !== $this->sortColumn) {
            $res['SortColumn'] = $this->sortColumn;
        }

        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->strictMode) {
            $res['StrictMode'] = $this->strictMode;
        }

        if (null !== $this->tacticId) {
            $res['TacticId'] = $this->tacticId;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        if (null !== $this->timeEnd) {
            $res['TimeEnd'] = $this->timeEnd;
        }

        if (null !== $this->timeStart) {
            $res['TimeStart'] = $this->timeStart;
        }

        if (null !== $this->uniqueInfo) {
            $res['UniqueInfo'] = $this->uniqueInfo;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
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
        if (isset($map['AlarmEventName'])) {
            $model->alarmEventName = $map['AlarmEventName'];
        }

        if (isset($map['AlarmUniqueInfo'])) {
            $model->alarmUniqueInfo = $map['AlarmUniqueInfo'];
        }

        if (isset($map['AssetsTypeList'])) {
            if (!empty($map['AssetsTypeList'])) {
                $model->assetsTypeList = [];
                $n1 = 0;
                foreach ($map['AssetsTypeList'] as $item1) {
                    $model->assetsTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }

        if (isset($map['EventNames'])) {
            $model->eventNames = $map['EventNames'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InnerIp'])) {
            $model->innerIp = $map['InnerIp'];
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
                $model->operateErrorCodeList = [];
                $n1 = 0;
                foreach ($map['OperateErrorCodeList'] as $item1) {
                    $model->operateErrorCodeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OperateTimeEnd'])) {
            $model->operateTimeEnd = $map['OperateTimeEnd'];
        }

        if (isset($map['OperateTimeStart'])) {
            $model->operateTimeStart = $map['OperateTimeStart'];
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

        if (isset($map['SortColumn'])) {
            $model->sortColumn = $map['SortColumn'];
        }

        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StrictMode'])) {
            $model->strictMode = $map['StrictMode'];
        }

        if (isset($map['TacticId'])) {
            $model->tacticId = $map['TacticId'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        if (isset($map['TimeEnd'])) {
            $model->timeEnd = $map['TimeEnd'];
        }

        if (isset($map['TimeStart'])) {
            $model->timeStart = $map['TimeStart'];
        }

        if (isset($map['UniqueInfo'])) {
            $model->uniqueInfo = $map['UniqueInfo'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
