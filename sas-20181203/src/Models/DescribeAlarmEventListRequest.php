<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlarmEventListRequest extends Model
{
    /**
     * @var string
     */
    public $alarmEventName;

    /**
     * @var string
     */
    public $alarmEventType;

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
    public $from;

    /**
     * @var string
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
    public $remark;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'alarmEventName'       => 'AlarmEventName',
        'alarmEventType'       => 'AlarmEventType',
        'currentPage'          => 'CurrentPage',
        'dealed'               => 'Dealed',
        'from'                 => 'From',
        'groupId'              => 'GroupId',
        'lang'                 => 'Lang',
        'levels'               => 'Levels',
        'operateErrorCodeList' => 'OperateErrorCodeList',
        'pageSize'             => 'PageSize',
        'remark'               => 'Remark',
        'sourceIp'             => 'SourceIp',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
        }
        if (null !== $this->operateErrorCodeList) {
            $res['OperateErrorCodeList'] = $this->operateErrorCodeList;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
