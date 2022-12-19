<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlarmEventListRequest extends Model
{
    /**
     * @description The name of the alert event.
     *
     * >  You can call the [DescribeNsasSuspEventType](~~DescribeNsasSuspEventType~~) operation to query the names of alert events.
     * @example Trojan
     *
     * @var string
     */
    public $alarmEventName;

    /**
     * @description The type of the alert event.
     *
     * >  You can call the [DescribeNsasSuspEventType](~~DescribeNsasSuspEventType~~) operation to query the types of alert events.
     * @example Malicious Software
     *
     * @var string
     */
    public $alarmEventType;

    /**
     * @description The number of the page to return. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether the alert event is handled. Valid values:
     *
     *   **N**: unhandled
     *   **Y**: handled
     *
     * @example Y
     *
     * @var string
     */
    public $dealed;

    /**
     * @description The ID of the request source. Set the value to **sas**, which indicates that the request is sent from Security Center.
     *
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The ID of the asset group to which the affected asset belongs.
     *
     * @example 18732
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the alert event.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The severity of the alert event. Separate multiple severities with commas (,). Valid values:
     *
     *   **serious**
     *   **suspicious**
     *   **remind**
     *
     * @example serious
     *
     * @var string
     */
    public $levels;

    /**
     * @description An array that consists of the handling result codes of alert events.
     *
     * @example ignore. Success
     *
     * @var string[]
     */
    public $operateErrorCodeList;

    /**
     * @description The time when the handling operation ends.
     *
     * @example 2022-07-06 13:50:38
     *
     * @var string
     */
    public $operateTimeEnd;

    /**
     * @description The time when the handing operation starts.
     *
     * @example 2022-07-05 13:50:38
     *
     * @var string
     */
    public $operateTimeStart;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The name of the alert or the information about the asset.
     *
     * @example database_server
     *
     * @var string
     */
    public $remark;

    /**
     * @description The custom sorting field. Default value: **operateTime**. Valid values:
     *
     *   **lastTime**: the latest occurrence time
     *   **operateTime**: the handling time
     *
     * >  This parameter takes effect if you set the **Dealed** parameter to Y.
     * @example operateTime
     *
     * @var string
     */
    public $sortColumn;

    /**
     * @description The custom sorting order. Default value: **desc**. Valid values:
     *
     *   **asc**: the ascending order
     *   **desc**: the descending order
     *
     * >  This parameter takes effect if you set the **Dealed** parameter to Y.
     * @example desc
     *
     * @var string
     */
    public $sortType;

    /**
     * @description The source IP address of the request.
     *
     * @example 27.9.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The tactic ID of ATT\&CK.
     *
     * @example TA0001
     *
     * @var string
     */
    public $tacticId;

    /**
     * @description The end time when the alert event was last detected.
     *
     * @example 2022-07-06 13:50:38
     *
     * @var string
     */
    public $timeEnd;

    /**
     * @description The start time when the alert event was last detected.
     *
     * @example 2022-07-05 13:50:38
     *
     * @var string
     */
    public $timeStart;

    /**
     * @description The ID of the alert event.
     *
     * @example 81c43b54073bbd922bcd887fddd8ba98
     *
     * @var string
     */
    public $uniqueInfo;

    /**
     * @description The UUIDs of the assets. Separate multiple UUIDs with commas (,).
     *
     * @example e8d8a2da-f9ce-4402-a1c6-0c4dc15b****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'alarmEventName'       => 'AlarmEventName',
        'alarmEventType'       => 'AlarmEventType',
        'currentPage'          => 'CurrentPage',
        'dealed'               => 'Dealed',
        'from'                 => 'From',
        'groupId'              => 'GroupId',
        'id'                   => 'Id',
        'lang'                 => 'Lang',
        'levels'               => 'Levels',
        'operateErrorCodeList' => 'OperateErrorCodeList',
        'operateTimeEnd'       => 'OperateTimeEnd',
        'operateTimeStart'     => 'OperateTimeStart',
        'pageSize'             => 'PageSize',
        'remark'               => 'Remark',
        'sortColumn'           => 'SortColumn',
        'sortType'             => 'SortType',
        'sourceIp'             => 'SourceIp',
        'tacticId'             => 'TacticId',
        'timeEnd'              => 'TimeEnd',
        'timeStart'            => 'TimeStart',
        'uniqueInfo'           => 'UniqueInfo',
        'uuids'                => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmEventName) {
            $res['AlarmEventName'] = $this->alarmEventName;
        }
        if (null !== $this->alarmEventType) {
            $res['AlarmEventType'] = $this->alarmEventType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
        }
        if (null !== $this->operateErrorCodeList) {
            $res['OperateErrorCodeList'] = $this->operateErrorCodeList;
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
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->sortColumn) {
            $res['SortColumn'] = $this->sortColumn;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->tacticId) {
            $res['TacticId'] = $this->tacticId;
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
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlarmEventListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmEventName'])) {
            $model->alarmEventName = $map['AlarmEventName'];
        }
        if (isset($map['AlarmEventType'])) {
            $model->alarmEventType = $map['AlarmEventType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Levels'])) {
            $model->levels = $map['Levels'];
        }
        if (isset($map['OperateErrorCodeList'])) {
            if (!empty($map['OperateErrorCodeList'])) {
                $model->operateErrorCodeList = $map['OperateErrorCodeList'];
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
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SortColumn'])) {
            $model->sortColumn = $map['SortColumn'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['TacticId'])) {
            $model->tacticId = $map['TacticId'];
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
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
