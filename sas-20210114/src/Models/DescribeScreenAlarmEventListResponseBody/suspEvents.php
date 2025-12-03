<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenAlarmEventListResponseBody;

use AlibabaCloud\Dara\Model;

class suspEvents extends Model
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
    public $saleVersion;

    /**
     * @var string
     */
    public $solution;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $suspiciousEventCount;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alarmEventName' => 'AlarmEventName',
        'alarmEventType' => 'AlarmEventType',
        'alarmUniqueInfo' => 'AlarmUniqueInfo',
        'canBeDealOnLine' => 'CanBeDealOnLine',
        'canCancelFault' => 'CanCancelFault',
        'dataSource' => 'DataSource',
        'dealed' => 'Dealed',
        'description' => 'Description',
        'endTime' => 'EndTime',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'level' => 'Level',
        'saleVersion' => 'SaleVersion',
        'solution' => 'Solution',
        'startTime' => 'StartTime',
        'suspiciousEventCount' => 'SuspiciousEventCount',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmEventName) {
            $res['AlarmEventName'] = $this->alarmEventName;
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

        if (null !== $this->saleVersion) {
            $res['SaleVersion'] = $this->saleVersion;
        }

        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->suspiciousEventCount) {
            $res['SuspiciousEventCount'] = $this->suspiciousEventCount;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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

        if (isset($map['SaleVersion'])) {
            $model->saleVersion = $map['SaleVersion'];
        }

        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['SuspiciousEventCount'])) {
            $model->suspiciousEventCount = $map['SuspiciousEventCount'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
