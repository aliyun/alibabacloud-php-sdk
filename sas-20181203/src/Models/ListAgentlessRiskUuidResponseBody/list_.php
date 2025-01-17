<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAgentlessRiskUuidResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $baselineCount;
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
     * @var int
     */
    public $maliciousCount;
    /**
     * @var int
     */
    public $scanTime;
    /**
     * @var string
     */
    public $targetId;
    /**
     * @var string
     */
    public $targetName;
    /**
     * @var string
     */
    public $uuid;
    /**
     * @var int
     */
    public $vulCount;
    protected $_name = [
        'baselineCount'  => 'BaselineCount',
        'instanceId'     => 'InstanceId',
        'instanceName'   => 'InstanceName',
        'internetIp'     => 'InternetIp',
        'intranetIp'     => 'IntranetIp',
        'maliciousCount' => 'MaliciousCount',
        'scanTime'       => 'ScanTime',
        'targetId'       => 'TargetId',
        'targetName'     => 'TargetName',
        'uuid'           => 'Uuid',
        'vulCount'       => 'VulCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baselineCount) {
            $res['BaselineCount'] = $this->baselineCount;
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

        if (null !== $this->maliciousCount) {
            $res['MaliciousCount'] = $this->maliciousCount;
        }

        if (null !== $this->scanTime) {
            $res['ScanTime'] = $this->scanTime;
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->vulCount) {
            $res['VulCount'] = $this->vulCount;
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
        if (isset($map['BaselineCount'])) {
            $model->baselineCount = $map['BaselineCount'];
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

        if (isset($map['MaliciousCount'])) {
            $model->maliciousCount = $map['MaliciousCount'];
        }

        if (isset($map['ScanTime'])) {
            $model->scanTime = $map['ScanTime'];
        }

        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['VulCount'])) {
            $model->vulCount = $map['VulCount'];
        }

        return $model;
    }
}
