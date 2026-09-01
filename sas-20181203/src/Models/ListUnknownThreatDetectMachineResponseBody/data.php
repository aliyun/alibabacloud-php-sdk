<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListUnknownThreatDetectMachineResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $effectDays;

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
     * @var int
     */
    public $maliciousProcessCount;

    /**
     * @var int
     */
    public $normalEventCount;

    /**
     * @var string
     */
    public $pluginStatus;

    /**
     * @var int
     */
    public $processCount;

    /**
     * @var int
     */
    public $recentDeviationBehaviorCount;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $studyMode;

    /**
     * @var int
     */
    public $studyRemainDays;

    /**
     * @var int
     */
    public $studyStartTime;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'effectDays' => 'EffectDays',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'maliciousProcessCount' => 'MaliciousProcessCount',
        'normalEventCount' => 'NormalEventCount',
        'pluginStatus' => 'PluginStatus',
        'processCount' => 'ProcessCount',
        'recentDeviationBehaviorCount' => 'RecentDeviationBehaviorCount',
        'status' => 'Status',
        'studyMode' => 'StudyMode',
        'studyRemainDays' => 'StudyRemainDays',
        'studyStartTime' => 'StudyStartTime',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectDays) {
            $res['EffectDays'] = $this->effectDays;
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

        if (null !== $this->maliciousProcessCount) {
            $res['MaliciousProcessCount'] = $this->maliciousProcessCount;
        }

        if (null !== $this->normalEventCount) {
            $res['NormalEventCount'] = $this->normalEventCount;
        }

        if (null !== $this->pluginStatus) {
            $res['PluginStatus'] = $this->pluginStatus;
        }

        if (null !== $this->processCount) {
            $res['ProcessCount'] = $this->processCount;
        }

        if (null !== $this->recentDeviationBehaviorCount) {
            $res['RecentDeviationBehaviorCount'] = $this->recentDeviationBehaviorCount;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->studyMode) {
            $res['StudyMode'] = $this->studyMode;
        }

        if (null !== $this->studyRemainDays) {
            $res['StudyRemainDays'] = $this->studyRemainDays;
        }

        if (null !== $this->studyStartTime) {
            $res['StudyStartTime'] = $this->studyStartTime;
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
        if (isset($map['EffectDays'])) {
            $model->effectDays = $map['EffectDays'];
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

        if (isset($map['MaliciousProcessCount'])) {
            $model->maliciousProcessCount = $map['MaliciousProcessCount'];
        }

        if (isset($map['NormalEventCount'])) {
            $model->normalEventCount = $map['NormalEventCount'];
        }

        if (isset($map['PluginStatus'])) {
            $model->pluginStatus = $map['PluginStatus'];
        }

        if (isset($map['ProcessCount'])) {
            $model->processCount = $map['ProcessCount'];
        }

        if (isset($map['RecentDeviationBehaviorCount'])) {
            $model->recentDeviationBehaviorCount = $map['RecentDeviationBehaviorCount'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StudyMode'])) {
            $model->studyMode = $map['StudyMode'];
        }

        if (isset($map['StudyRemainDays'])) {
            $model->studyRemainDays = $map['StudyRemainDays'];
        }

        if (isset($map['StudyStartTime'])) {
            $model->studyStartTime = $map['StudyStartTime'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
