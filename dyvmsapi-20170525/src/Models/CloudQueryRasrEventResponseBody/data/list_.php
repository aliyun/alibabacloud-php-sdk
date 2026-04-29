<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryRasrEventResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $botText;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var string
     */
    public $customerNumber;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $mainUniqueId;

    /**
     * @var string
     */
    public $mixRecordFile;

    /**
     * @var string
     */
    public $monitorSide;

    /**
     * @var string
     */
    public $outRecordFile;

    /**
     * @var string
     */
    public $rasrDuration;

    /**
     * @var string
     */
    public $recordFile;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $uniqueId;
    protected $_name = [
        'botText' => 'BotText',
        'cno' => 'Cno',
        'customerNumber' => 'CustomerNumber',
        'endTime' => 'EndTime',
        'engine' => 'Engine',
        'enterpriseId' => 'EnterpriseId',
        'mainUniqueId' => 'MainUniqueId',
        'mixRecordFile' => 'MixRecordFile',
        'monitorSide' => 'MonitorSide',
        'outRecordFile' => 'OutRecordFile',
        'rasrDuration' => 'RasrDuration',
        'recordFile' => 'RecordFile',
        'startTime' => 'StartTime',
        'text' => 'Text',
        'uniqueId' => 'UniqueId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->botText) {
            $res['BotText'] = $this->botText;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->customerNumber) {
            $res['CustomerNumber'] = $this->customerNumber;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->mainUniqueId) {
            $res['MainUniqueId'] = $this->mainUniqueId;
        }

        if (null !== $this->mixRecordFile) {
            $res['MixRecordFile'] = $this->mixRecordFile;
        }

        if (null !== $this->monitorSide) {
            $res['MonitorSide'] = $this->monitorSide;
        }

        if (null !== $this->outRecordFile) {
            $res['OutRecordFile'] = $this->outRecordFile;
        }

        if (null !== $this->rasrDuration) {
            $res['RasrDuration'] = $this->rasrDuration;
        }

        if (null !== $this->recordFile) {
            $res['RecordFile'] = $this->recordFile;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
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
        if (isset($map['BotText'])) {
            $model->botText = $map['BotText'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['CustomerNumber'])) {
            $model->customerNumber = $map['CustomerNumber'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['MainUniqueId'])) {
            $model->mainUniqueId = $map['MainUniqueId'];
        }

        if (isset($map['MixRecordFile'])) {
            $model->mixRecordFile = $map['MixRecordFile'];
        }

        if (isset($map['MonitorSide'])) {
            $model->monitorSide = $map['MonitorSide'];
        }

        if (isset($map['OutRecordFile'])) {
            $model->outRecordFile = $map['OutRecordFile'];
        }

        if (isset($map['RasrDuration'])) {
            $model->rasrDuration = $map['RasrDuration'];
        }

        if (isset($map['RecordFile'])) {
            $model->recordFile = $map['RecordFile'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        return $model;
    }
}
