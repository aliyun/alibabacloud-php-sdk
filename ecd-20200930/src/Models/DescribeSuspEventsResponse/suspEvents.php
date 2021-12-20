<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSuspEventsResponse;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSuspEventsResponse\suspEvents\details;
use AlibabaCloud\Tea\Model;

class suspEvents extends Model
{
    /**
     * @var string
     */
    public $alarmEventName;

    /**
     * @var string
     */
    public $alarmEventNameDisplay;

    /**
     * @var string
     */
    public $alarmEventType;

    /**
     * @var string
     */
    public $alarmEventTypeDisplay;

    /**
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @var string
     */
    public $canBeDealOnLine;

    /**
     * @var bool
     */
    public $canCancelFault;

    /**
     * @var string
     */
    public $dataSource;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var int
     */
    public $eventStatus;

    /**
     * @var string
     */
    public $eventSubType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $lastTime;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $occurrenceTime;

    /**
     * @var string
     */
    public $operateErrorCode;

    /**
     * @var string
     */
    public $operateMsg;

    /**
     * @var string
     */
    public $uniqueInfo;

    /**
     * @var details[]
     */
    public $details;
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
        'details'               => 'Details',
    ];

    public function validate()
    {
        Model::validateRequired('alarmEventName', $this->alarmEventName, true);
        Model::validateRequired('alarmEventNameDisplay', $this->alarmEventNameDisplay, true);
        Model::validateRequired('alarmEventType', $this->alarmEventType, true);
        Model::validateRequired('alarmEventTypeDisplay', $this->alarmEventTypeDisplay, true);
        Model::validateRequired('alarmUniqueInfo', $this->alarmUniqueInfo, true);
        Model::validateRequired('canBeDealOnLine', $this->canBeDealOnLine, true);
        Model::validateRequired('canCancelFault', $this->canCancelFault, true);
        Model::validateRequired('dataSource', $this->dataSource, true);
        Model::validateRequired('desc', $this->desc, true);
        Model::validateRequired('desktopId', $this->desktopId, true);
        Model::validateRequired('desktopName', $this->desktopName, true);
        Model::validateRequired('eventStatus', $this->eventStatus, true);
        Model::validateRequired('eventSubType', $this->eventSubType, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('lastTime', $this->lastTime, true);
        Model::validateRequired('level', $this->level, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('occurrenceTime', $this->occurrenceTime, true);
        Model::validateRequired('operateErrorCode', $this->operateErrorCode, true);
        Model::validateRequired('operateMsg', $this->operateMsg, true);
        Model::validateRequired('uniqueInfo', $this->uniqueInfo, true);
        Model::validateRequired('details', $this->details, true);
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
        if (null !== $this->details) {
            $res['Details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['Details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n              = 0;
                foreach ($map['Details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
