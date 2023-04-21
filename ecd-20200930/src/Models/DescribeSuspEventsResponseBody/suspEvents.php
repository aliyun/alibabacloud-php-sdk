<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSuspEventsResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSuspEventsResponseBody\suspEvents\details;
use AlibabaCloud\Tea\Model;

class suspEvents extends Model
{
    /**
     * @description The name of the alert event to which the exception belongs.
     *
     * @example Suspicious modification to auto-startup items
     *
     * @var string
     */
    public $alarmEventName;

    /**
     * @description The description of the alert event with which the exception is associated.
     *
     * @example Suspicious modification to auto-startup items
     *
     * @var string
     */
    public $alarmEventNameDisplay;

    /**
     * @description The type of the alert event to which the exception belongs.
     *
     * @example Suspicious process
     *
     * @var string
     */
    public $alarmEventType;

    /**
     * @description The description of the alert event to which the exception belongs.
     *
     * @example Suspicious process
     *
     * @var string
     */
    public $alarmEventTypeDisplay;

    /**
     * @description The ID of the alert event to which the exception belongs.
     *
     * @example 8ff29a086e0ccf4507c55e4ec3af****
     *
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @description Indicates whether the exception can be processed online. Valid values:
     *
     *   true: The exception can be processed online.
     *   false: The exception cannot be processed online.
     *
     * @example false
     *
     * @var string
     */
    public $canBeDealOnLine;

    /**
     * @description Indicates whether the exception can be ignored. Valid values:
     *
     *   true: The exception can be ignored.
     *   false: The exception cannot be ignored.
     *
     * @example false
     *
     * @var bool
     */
    public $canCancelFault;

    /**
     * @description The source of data. This parameter can be ignored.
     *
     * @example aegis_suspicious_event
     *
     * @var string
     */
    public $dataSource;

    /**
     * @description The impact of the exception.
     *
     * @example The threat detection model detected that a process was attempting to modify an auto-startup item on your server. The modification may be performed by attackers or trojans to obtain system permissions.
     *
     * @var string
     */
    public $desc;

    /**
     * @description The ID of the affected cloud desktop.
     *
     * @example ecd-blbmpzpqjdrdy****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The name of the affected cloud desktop.
     *
     * @example test
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description Details of the exceptions.
     *
     * @var details[]
     */
    public $details;

    /**
     * @description The state of the exception. Valid values:
     *
     *   1: PENDING
     *   2: IGNORE
     *   4: HANDLED
     *   8: FAULT
     *   16: DEALING
     *   32: DONE
     *   64: EXPIRE
     *
     * @example 1
     *
     * @var int
     */
    public $eventStatus;

    /**
     * @description The name of the exception.
     *
     * @example Suspicious modification to auto-startup items
     *
     * @var string
     */
    public $eventSubType;

    /**
     * @description The ID of the exception.
     *
     * @example 19271054
     *
     * @var int
     */
    public $id;

    /**
     * @description The time when the last exception occurred.
     *
     * @example 2021-05-14 14:27:51
     *
     * @var string
     */
    public $lastTime;

    /**
     * @description The severity of the exception. Valid values:
     *
     *   serious: The exception is urgent.
     *   suspicious: The exception is a warning
     *   remind: The exception is a suggestion.
     *
     * @example suspicious
     *
     * @var string
     */
    public $level;

    /**
     * @description The full name of the exception.
     *
     * @example Suspicious processes - suspicious modification to auto-startup items
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the exception first occurred.
     *
     * @example 2021-05-13 22:54:17
     *
     * @var string
     */
    public $occurrenceTime;

    /**
     * @description The handling result code of the exception.
     *
     * @example 1
     *
     * @var string
     */
    public $operateErrorCode;

    /**
     * @description The handling remarks on the exception.
     *
     * @example success
     *
     * @var string
     */
    public $operateMsg;

    /**
     * @description The ID of the exception.
     *
     * @example ea154b41f2c4b4005cb130af0586****
     *
     * @var string
     */
    public $uniqueInfo;
    protected $_name = [
        'alarmEventName'        => 'AlarmEventName',
        'alarmEventNameDisplay' => 'AlarmEventNameDisplay',
        'alarmEventType'        => 'AlarmEventType',
        'alarmEventTypeDisplay' => 'AlarmEventTypeDisplay',
        'alarmUniqueInfo'       => 'AlarmUniqueInfo',
        'canBeDealOnLine'       => 'CanBeDealOnLine',
        'canCancelFault'        => 'CanCancelFault',
        'dataSource'            => 'DataSource',
        'desc'                  => 'Desc',
        'desktopId'             => 'DesktopId',
        'desktopName'           => 'DesktopName',
        'details'               => 'Details',
        'eventStatus'           => 'EventStatus',
        'eventSubType'          => 'EventSubType',
        'id'                    => 'Id',
        'lastTime'              => 'LastTime',
        'level'                 => 'Level',
        'name'                  => 'Name',
        'occurrenceTime'        => 'OccurrenceTime',
        'operateErrorCode'      => 'OperateErrorCode',
        'operateMsg'            => 'OperateMsg',
        'uniqueInfo'            => 'UniqueInfo',
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
        if (null !== $this->alarmEventNameDisplay) {
            $res['AlarmEventNameDisplay'] = $this->alarmEventNameDisplay;
        }
        if (null !== $this->alarmEventType) {
            $res['AlarmEventType'] = $this->alarmEventType;
        }
        if (null !== $this->alarmEventTypeDisplay) {
            $res['AlarmEventTypeDisplay'] = $this->alarmEventTypeDisplay;
        }
        if (null !== $this->alarmUniqueInfo) {
            $res['AlarmUniqueInfo'] = $this->alarmUniqueInfo;
        }
        if (null !== $this->canBeDealOnLine) {
            $res['CanBeDealOnLine'] = $this->canBeDealOnLine;
        }
        if (null !== $this->canCancelFault) {
            $res['CanCancelFault'] = $this->canCancelFault;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->details) {
            $res['Details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['Details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->eventStatus) {
            $res['EventStatus'] = $this->eventStatus;
        }
        if (null !== $this->eventSubType) {
            $res['EventSubType'] = $this->eventSubType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->occurrenceTime) {
            $res['OccurrenceTime'] = $this->occurrenceTime;
        }
        if (null !== $this->operateErrorCode) {
            $res['OperateErrorCode'] = $this->operateErrorCode;
        }
        if (null !== $this->operateMsg) {
            $res['OperateMsg'] = $this->operateMsg;
        }
        if (null !== $this->uniqueInfo) {
            $res['UniqueInfo'] = $this->uniqueInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return suspEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmEventName'])) {
            $model->alarmEventName = $map['AlarmEventName'];
        }
        if (isset($map['AlarmEventNameDisplay'])) {
            $model->alarmEventNameDisplay = $map['AlarmEventNameDisplay'];
        }
        if (isset($map['AlarmEventType'])) {
            $model->alarmEventType = $map['AlarmEventType'];
        }
        if (isset($map['AlarmEventTypeDisplay'])) {
            $model->alarmEventTypeDisplay = $map['AlarmEventTypeDisplay'];
        }
        if (isset($map['AlarmUniqueInfo'])) {
            $model->alarmUniqueInfo = $map['AlarmUniqueInfo'];
        }
        if (isset($map['CanBeDealOnLine'])) {
            $model->canBeDealOnLine = $map['CanBeDealOnLine'];
        }
        if (isset($map['CanCancelFault'])) {
            $model->canCancelFault = $map['CanCancelFault'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n              = 0;
                foreach ($map['Details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EventStatus'])) {
            $model->eventStatus = $map['EventStatus'];
        }
        if (isset($map['EventSubType'])) {
            $model->eventSubType = $map['EventSubType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OccurrenceTime'])) {
            $model->occurrenceTime = $map['OccurrenceTime'];
        }
        if (isset($map['OperateErrorCode'])) {
            $model->operateErrorCode = $map['OperateErrorCode'];
        }
        if (isset($map['OperateMsg'])) {
            $model->operateMsg = $map['OperateMsg'];
        }
        if (isset($map['UniqueInfo'])) {
            $model->uniqueInfo = $map['UniqueInfo'];
        }

        return $model;
    }
}
