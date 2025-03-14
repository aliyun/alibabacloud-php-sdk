<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeIdcProbeScanResultListResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The status of the client of the instance on which the probe is installed. Valid values:
     *
     *   **online**: The Security Center agent on the asset is **enabled**.
     *   **offline**: The Security Center agent on the asset is **disabled**.
     *
     * @example online
     *
     * @var string
     */
    public $clientStatus;

    /**
     * @description The name of the IDC.
     *
     * @example Test
     *
     * @var string
     */
    public $idcName;

    /**
     * @description The CIDR blocks.
     *
     * @example 192.168.2.0/24
     *
     * @var string
     */
    public $ipSegment;

    /**
     * @description The timestamp when the last scan was performed. Unit: milliseconds.
     *
     * @example 1720006818000
     *
     * @var int
     */
    public $lastScanTime;

    /**
     * @description The operating system type of the asset. Valid values:
     *
     *   **windows**
     *   **linux**
     *
     * @example Linux
     *
     * @var string
     */
    public $os;

    /**
     * @description The private IP address of the associated instance.
     *
     * @example 42.121.*.*
     *
     * @var string
     */
    public $probeInternetIp;

    /**
     * @description The private IP address of the associated instance.
     *
     * @example 192.168.*.*
     *
     * @var string
     */
    public $probeIntranetIp;

    /**
     * @description The name of the associated instance.
     *
     * @example i-xxxx
     *
     * @var string
     */
    public $probeMachineName;

    /**
     * @description The UUID of the associated instance.
     *
     * @example 11C96623-E106-59C9-866D-A6C82911****
     *
     * @var string
     */
    public $probeUuid;

    /**
     * @description The ID of the scan result.
     *
     * @example 1231
     *
     * @var int
     */
    public $scanResultId;

    /**
     * @description The IP address that is scanned.
     *
     * @example 192.168.*.*
     *
     * @var string
     */
    public $scannedIp;

    /**
     * @description The port that is scanned.
     *
     * @example 22
     *
     * @var string
     */
    public $validPort;
    protected $_name = [
        'clientStatus' => 'ClientStatus',
        'idcName' => 'IdcName',
        'ipSegment' => 'IpSegment',
        'lastScanTime' => 'LastScanTime',
        'os' => 'Os',
        'probeInternetIp' => 'ProbeInternetIp',
        'probeIntranetIp' => 'ProbeIntranetIp',
        'probeMachineName' => 'ProbeMachineName',
        'probeUuid' => 'ProbeUuid',
        'scanResultId' => 'ScanResultId',
        'scannedIp' => 'ScannedIp',
        'validPort' => 'ValidPort',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }
        if (null !== $this->idcName) {
            $res['IdcName'] = $this->idcName;
        }
        if (null !== $this->ipSegment) {
            $res['IpSegment'] = $this->ipSegment;
        }
        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->probeInternetIp) {
            $res['ProbeInternetIp'] = $this->probeInternetIp;
        }
        if (null !== $this->probeIntranetIp) {
            $res['ProbeIntranetIp'] = $this->probeIntranetIp;
        }
        if (null !== $this->probeMachineName) {
            $res['ProbeMachineName'] = $this->probeMachineName;
        }
        if (null !== $this->probeUuid) {
            $res['ProbeUuid'] = $this->probeUuid;
        }
        if (null !== $this->scanResultId) {
            $res['ScanResultId'] = $this->scanResultId;
        }
        if (null !== $this->scannedIp) {
            $res['ScannedIp'] = $this->scannedIp;
        }
        if (null !== $this->validPort) {
            $res['ValidPort'] = $this->validPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }
        if (isset($map['IdcName'])) {
            $model->idcName = $map['IdcName'];
        }
        if (isset($map['IpSegment'])) {
            $model->ipSegment = $map['IpSegment'];
        }
        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['ProbeInternetIp'])) {
            $model->probeInternetIp = $map['ProbeInternetIp'];
        }
        if (isset($map['ProbeIntranetIp'])) {
            $model->probeIntranetIp = $map['ProbeIntranetIp'];
        }
        if (isset($map['ProbeMachineName'])) {
            $model->probeMachineName = $map['ProbeMachineName'];
        }
        if (isset($map['ProbeUuid'])) {
            $model->probeUuid = $map['ProbeUuid'];
        }
        if (isset($map['ScanResultId'])) {
            $model->scanResultId = $map['ScanResultId'];
        }
        if (isset($map['ScannedIp'])) {
            $model->scannedIp = $map['ScannedIp'];
        }
        if (isset($map['ValidPort'])) {
            $model->validPort = $map['ValidPort'];
        }

        return $model;
    }
}
