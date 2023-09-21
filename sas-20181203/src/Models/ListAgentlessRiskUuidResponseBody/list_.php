<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAgentlessRiskUuidResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The number of baseline risks.
     *
     * @example 1
     *
     * @var int
     */
    public $baselineCount;

    /**
     * @description The instance name of the asset.
     *
     * @example sql-test-0****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 8.210.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server.
     *
     * @example 172.25.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The number of malicious samples.
     *
     * @example 1
     *
     * @var int
     */
    public $maliciousCount;

    /**
     * @description The timestamp of the detection. Unit: milliseconds.
     *
     * @example 168257753****
     *
     * @var int
     */
    public $scanTime;

    /**
     * @description The ID of the asset that is detected.
     *
     * @example 30****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The name of the asset that is detected.
     *
     * @example test****
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The UUID of the server.
     *
     * @example 49e25e0f-bb51-4a5a-a1b3-13a4ddaa****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The number of detected vulnerabilities.
     *
     * @example 1
     *
     * @var int
     */
    public $vulCount;
    protected $_name = [
        'baselineCount'  => 'BaselineCount',
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineCount) {
            $res['BaselineCount'] = $this->baselineCount;
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

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineCount'])) {
            $model->baselineCount = $map['BaselineCount'];
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
