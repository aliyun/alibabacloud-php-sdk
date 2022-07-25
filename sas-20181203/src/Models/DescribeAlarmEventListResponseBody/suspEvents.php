<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventListResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventListResponseBody\suspEvents\tacticItems;
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
    public $alarmEventNameOriginal;

    /**
     * @var string
     */
    public $alarmEventType;

    /**
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @var bool
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
     * @var bool
     */
    public $dealed;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $hasTraceInfo;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $operateErrorCode;

    /**
     * @var int
     */
    public $operateTime;

    /**
     * @var string
     */
    public $saleVersion;

    /**
     * @var string
     */
    public $securityEventIds;

    /**
     * @var string
     */
    public $solution;

    /**
     * @var string
     */
    public $stages;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $suspiciousEventCount;

    /**
     * @var tacticItems[]
     */
    public $tacticItems;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alarmEventName'         => 'AlarmEventName',
        'alarmEventNameOriginal' => 'AlarmEventNameOriginal',
        'alarmEventType'         => 'AlarmEventType',
        'alarmUniqueInfo'        => 'AlarmUniqueInfo',
        'canBeDealOnLine'        => 'CanBeDealOnLine',
        'canCancelFault'         => 'CanCancelFault',
        'dataSource'             => 'DataSource',
        'dealed'                 => 'Dealed',
        'description'            => 'Description',
        'endTime'                => 'EndTime',
        'gmtModified'            => 'GmtModified',
        'hasTraceInfo'           => 'HasTraceInfo',
        'instanceId'             => 'InstanceId',
        'instanceName'           => 'InstanceName',
        'internetIp'             => 'InternetIp',
        'intranetIp'             => 'IntranetIp',
        'level'                  => 'Level',
        'operateErrorCode'       => 'OperateErrorCode',
        'operateTime'            => 'OperateTime',
        'saleVersion'            => 'SaleVersion',
        'securityEventIds'       => 'SecurityEventIds',
        'solution'               => 'Solution',
        'stages'                 => 'Stages',
        'startTime'              => 'StartTime',
        'suspiciousEventCount'   => 'SuspiciousEventCount',
        'tacticItems'            => 'TacticItems',
        'uuid'                   => 'Uuid',
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
        if (null !== $this->alarmEventNameOriginal) {
            $res['AlarmEventNameOriginal'] = $this->alarmEventNameOriginal;
        }
        if (null !== $this->alarmEventType) {
            $res['AlarmEventType'] = $this->alarmEventType;
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
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hasTraceInfo) {
            $res['HasTraceInfo'] = $this->hasTraceInfo;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->operateErrorCode) {
            $res['OperateErrorCode'] = $this->operateErrorCode;
        }
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }
        if (null !== $this->saleVersion) {
            $res['SaleVersion'] = $this->saleVersion;
        }
        if (null !== $this->securityEventIds) {
            $res['SecurityEventIds'] = $this->securityEventIds;
        }
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }
        if (null !== $this->stages) {
            $res['Stages'] = $this->stages;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->suspiciousEventCount) {
            $res['SuspiciousEventCount'] = $this->suspiciousEventCount;
        }
        if (null !== $this->tacticItems) {
            $res['TacticItems'] = [];
            if (null !== $this->tacticItems && \is_array($this->tacticItems)) {
                $n = 0;
                foreach ($this->tacticItems as $item) {
                    $res['TacticItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AlarmEventNameOriginal'])) {
            $model->alarmEventNameOriginal = $map['AlarmEventNameOriginal'];
        }
        if (isset($map['AlarmEventType'])) {
            $model->alarmEventType = $map['AlarmEventType'];
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
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HasTraceInfo'])) {
            $model->hasTraceInfo = $map['HasTraceInfo'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['OperateErrorCode'])) {
            $model->operateErrorCode = $map['OperateErrorCode'];
        }
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }
        if (isset($map['SaleVersion'])) {
            $model->saleVersion = $map['SaleVersion'];
        }
        if (isset($map['SecurityEventIds'])) {
            $model->securityEventIds = $map['SecurityEventIds'];
        }
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }
        if (isset($map['Stages'])) {
            $model->stages = $map['Stages'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SuspiciousEventCount'])) {
            $model->suspiciousEventCount = $map['SuspiciousEventCount'];
        }
        if (isset($map['TacticItems'])) {
            if (!empty($map['TacticItems'])) {
                $model->tacticItems = [];
                $n                  = 0;
                foreach ($map['TacticItems'] as $item) {
                    $model->tacticItems[$n++] = null !== $item ? tacticItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
